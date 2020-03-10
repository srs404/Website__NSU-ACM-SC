<?php
require_once get_template_directory() . '/src/widgets/SelectTypeOfSite/SelectTypeOfSite.php';
/**
 * ACM Open TOC functionality
 */
class ACMOpenTOC {
	const OPENTOC_TYPE_MIME = [
		'html' => 'text/html',
	];
	const REQUIRED_PARAMS = [
		'id' 		=> 'string',
		'title' 	=> 'string',
		'section' 	=> 'string',
		'opentoc' 	=> 'array',
	];
	const OPENTOC_TAXONOMY = 'section';

	/**
	 * ACMOpenTOC init function.
	 */
	public static function init() {
		$type_of_site = SelectTypeOfSite::type_of_site();
		if ( 'conference' === $type_of_site || 'sig' === $type_of_site ) {
			add_action( 'init', [ __CLASS__, 'create_post_type' ] );
			add_action( 'rest_api_init', [ __CLASS__, 'register_routes' ] );
		}
	}

	/**
	 * Register custom post type and taxonomy for open toc pages.
	 */
	public static function create_post_type() {
		register_post_type( 'conferences',
			[
				'labels' => [
					'name' 			=> __( 'Open TOC Pages' ),
					'singular_name' => __( 'Open TOC Page' ),
				],
				'public' 		=> true,
				'has_archive' 	=> true,
				'menu_icon' 	=> 'dashicons-media-text',
				'taxonomies' 	=> [ self::OPENTOC_TAXONOMY ],
			]
		);
		register_taxonomy(
			self::OPENTOC_TAXONOMY,
			'conferences',
			[
				'label' 			=> __( 'Section' ),
				'rewrite' 			=> [
					'slug' => self::OPENTOC_TAXONOMY,
				],
				'hierarchical' 		=> false,
				'show_admin_column' => true,
			]
		);
	}

	/**
	 * Register end-points.
	 */
	public static function register_routes() {
		// Create or update open toc page.
		register_rest_route( 'opentoc/v1', '/opentoc', [
			'methods' 	=> 'POST',
			'callback'	=> [ __CLASS__, 'manage_open_toc' ],
		] );
	}

	/**
	 * Create a new open toc page or update an existing one.
	 *
	 * @param  WP_REST_Request $request Full data about the request.
	 * @return WP_Error|WP_REST_Response
	 */
	public static function manage_open_toc( WP_REST_Request $request ) {
		/**
		 * Process to genete and compare local token will be change once client share the
		 * library to manage tokens in both sides.
		 */
		$secret = get_site_url() . '_' . gmdate( 'm-d-y' );
		$local_token = base64_encode( $secret );
		$authorization_header = $request->get_header( 'authorization' );
		$authorization_header = isset( $authorization_header ) ? $authorization_header : ' ';
		list( $type, $request_token ) = explode( ' ', $authorization_header );
		// Reject request if request token is invalid or not present.
		if ( $request_token !== $local_token ) {
			return new WP_Error( 'error', 'No authorized', [
				'status' => 401,
			] );
		}
		$params = self::sanitize_params( $request );
		if ( ! $params ) {
			return new WP_Error( 'error', 'Bad request', [
				'status' => 400,
			] );
		} else if ( isset( $params['update'] ) && '1' === $params['update'] ) {
			return self::update_open_toc( $params );
		} else {
			return self::create_open_toc( $params );
		}
	}

	/**
	 * Store file and return content of file.
	 *
	 * @param array $file_data Array with data from file.
	 * @return string HTML content enconded.
	 */
	private static function process_file( $file_data ) {
		$file = $file_data['tmp_name'];
		$file_name = basename( $file_data['name'] );
		$file_content = htmlentities( file_get_contents( $file ) );
		// Create open toc folder if not exist.
		if ( ! file_exists( 'wp-content/acm-open-toc' ) ) {
			mkdir( 'wp-content/acm-open-toc', 0331, true );
		}
		move_uploaded_file( $file, "wp-content/acm-open-toc/$file_name" );
		return $file_content;
	}

	/**
	 * Update an existing open toc page.
	 *
	 * @param array $params Post paramas sanitized.
	 * @return WP_Error|WP_REST_Response
	 */
	private static function update_open_toc( $params ) {
		$search_args = [
			'post_type'     => 'conferences',
			'post_status'   => 'publish',
			'meta_query' => [
				[
					'key' => 'acm-id',
					'value' => $params['id'],
				],
			],
		];
		$query = new WP_Query( $search_args );
		// If $post is empty then no post was found .
		if ( 0 === $query->found_posts ) {
			return new WP_Error( 'error', 'Not found', [
				'status' => 404,
			] );
		}
		$file_content = self::process_file( $params['opentoc'] );
		$update_args = [
			'ID' => $query->posts[0]->ID,
			'post_content'  => $file_content,
		];
		// Update post.
		$post_updated = wp_update_post( $update_args );
		if ( $post_updated ) {
			return new WP_REST_Response( 'Open toc page updated', 200 );
		} else {
			return new WP_Error( 'error', 'Server error', [
				'status' => 500,
			] );
		}
	}

	/**
	 * Store open toc page and create post.
	 *
	 * @param array $params Post paramas sanitized.
	 * @return WP_Error|WP_REST_Response
	 */
	private static function create_open_toc( $params ) {
		$file_content = self::process_file( $params['opentoc'] );
		// Create post object.
		$open_toc_post = [
			'post_type'     => 'conferences',
			'post_title'    => wp_strip_all_tags( $params['title'] ),
			'post_content'  => $file_content,
			'post_status'   => 'publish',
			'post_author'   => 1,
			'meta_input'    => [
				'acm-id' => $params['id'],
			],
		];
		// Insert the post into the database.
		$post_id = wp_insert_post( $open_toc_post );
		if ( $post_id ) {
			update_post_meta( $post_id, '_wp_page_template', 'single-conferences.php' );
			wp_set_object_terms( $post_id, $params['section'], self::OPENTOC_TAXONOMY, true );
			return new WP_REST_Response( 'Open toc page created', 200 );
		}
	}

	/**
	 * Sanitize params.
	 *
	 * @param  WP_REST_Request $request Full data about the request.
	 * @return boolean|array Return params sanitized or false in case required
	 * params are not present.
	 */
	private static function sanitize_params( WP_REST_Request $request ) {
		$body_params = [];
		$file_params = [];
		// Sanitize body params.
		foreach ( $request->get_body_params() as $key => $value ) {
			$body_params[ $key ] = sanitize_text_field( $value );
		}
		// Verify only html files.
		foreach ( $request->get_file_params() as $key => $file_data ) {
			$valid_file = wp_check_filetype( $file_data['name'], self::OPENTOC_TYPE_MIME );
			if ( $valid_file['ext'] && $valid_file['type'] ) {
				$file_params[ $key ] = $file_data;
			}
		}
		$params = array_merge( $body_params, $file_params );
		// Verify if all the required params exist and if they are of the correct type.
		foreach ( self::REQUIRED_PARAMS as $param => $type ) {
			if ( ! array_key_exists( $param, $params ) || gettype( $params[ $param ] ) !== $type ) {
				return false;
			}
		}
		return $params;
	}
}
