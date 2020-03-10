<?php
/**
 * Set-up ACM theme configuration fields.
 * Thanks to David from Shellcreeper for the tutorial - https://shellcreeper.com/wp-settings-meta-box/
 */
class ACMThemeConfiguration {
	const PAGE_ID = 'toplevel_page_acm_config';
	/**
	 * Init.
	 */
	public static function init() {
		add_action( 'admin_menu', [ __CLASS__, 'acm_config_settings_setup' ] );
		add_action( 'acm_config_settings_page_init', [ __CLASS__, 'acm_config_reset_settings' ] );
		add_action( 'add_meta_boxes', [ __CLASS__, 'acm_config_submit_add_meta_box' ] );
		add_action( 'add_meta_boxes', [ __CLASS__, 'acm_config_basic_add_meta_box' ] );
		add_action( 'add_meta_boxes', [ __CLASS__, 'acm_social_networks_add_meta_box' ] );
		add_action( 'add_meta_boxes', [ __CLASS__, 'acm_custom_logos_add_meta_box' ] );
	}

	/**
	 * Create Settings Page.
	 * @link http://codex.wordpress.org/Function_Reference/register_setting
	 * @link http://codex.wordpress.org/Function_Reference/add_menu_page
	 */
	public static function acm_config_settings_setup() {
		register_setting(
			'acm_config',
			'acm_number_of_posts',
			'acm_basic_sanitize'
		);
		register_setting(
			'acm_config',
			'acm_social_networks',
			[
				'default' => [
					'facebook' => 'https://www.facebook.com/AssociationForComputingMachinery/',
					'flickr' => 'https://www.flickr.com/photos/theofficialacm',
					'google_plus' => 'https://plus.google.com/101763122146287444610',
					'linkedin' => 'https://www.linkedin.com/company/association-for-computing-machinery',
					'email' => 'acmhelp@acm.org',
					'twitter' => 'https://twitter.com/theofficialacm',
					'instagram' => 'https://www.instagram.com/theofficialacm/',
					'youtube' => 'https://www.youtube.com/user/TheOfficialACM',
				],
			]
		);
		register_setting(
			'acm_config',
			'acm_custom_logos'
		);
		/* Add settings menu page. */
		$settings_page = add_menu_page(
			'ACM Theme Configuration',
			'ACM Theme Configuration',
			'manage_options',
			'acm_config',
			[ __CLASS__, 'acm_config_settings_page' ],
			'dashicons-clipboard',
			4
		);
		$page_id = self::PAGE_ID;
		/* Do stuff in settings page, such as adding scripts, etc. */
		if ( !empty( $settings_page ) ) {
			/* Load the JavaScript needed for the settings screen. */
			add_action( 'admin_enqueue_scripts', [ __CLASS__, 'acm_config_enqueue_scripts' ] );
			add_action( "admin_footer-{$page_id}", [ __CLASS__, 'acm_config_footer_scripts' ] );
			/* Set number of column available. */
			add_filter( 'screen_layout_columns', [ __CLASS__, 'acm_config_screen_layout_column' ], 10, 2 );
		}
	}

	/**
	 * Load Script Needed For Meta Box.
	 */
	public static function acm_config_enqueue_scripts( $hook_suffix ) {
		if ( $hook_suffix == self::PAGE_ID ){
			wp_enqueue_media();
			wp_enqueue_script( 'common' );
			wp_enqueue_script( 'wp-lists' );
			wp_enqueue_script( 'postbox' );
		}
	}

	/**
	 * Footer Script Needed for Meta Box.
	 */
	public static function acm_config_footer_scripts() {
	?>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready( function($) {
			var file_frame = [];
			var $button = $( '.meta-box-upload-button' );
			var $removebutton = $( '.meta-box-upload-button-remove' );
			var $hiddenRefer = $( '[name="_wp_http_referer"]' );
			// Prevent reset when user wants to upload;
			if ( $hiddenRefer.val().includes( 'action=reset_settings' ) ) {
				$hiddenRefer.val( '/wp-admin/admin.php?page=acm_config' );
			}
			// Toogle boxes.
			$( '.if-js-closed' ).removeClass( 'if-js-closed' ).addClass( 'closed' );
			postboxes.add_postbox_toggles( '<?php echo self::PAGE_ID; ?>' );
			// Display spinner.
			$( '#fx-smb-form' ).submit( function() {
				$( '#publishing-action .spinner' ).css( 'display','inline' );
			});
			// Confirm before reset.
			$( '#delete-action .submitdelete' ).on( 'click', function() {
				return confirm( 'Are you sure want to do this?' );
			});

			$button.on( 'click', function ( event ) {
				event.preventDefault();
				var $this = $( this );
				var	id = $this.attr( 'id' );
				// If the media frame already exists, reopen it.
				if ( file_frame[ id ] ) {
					file_frame[ id ].open();
					return;
				}
				// Create the media frame.
				file_frame[ id ] = wp.media.frames.file_frame = wp.media( {
					title    : $this.data( 'uploader_title' ),
					button   : {
						text : $this.data( 'uploader_button_text' )
					},
					multiple : false  // Set to true to allow multiple files to be selected
				} );
				// When an image is selected, run a callback.
				file_frame[ id ].on( 'select', function() {
					// We set multiple to false so only get one image from the uploader
					var attachment = file_frame[ id ].state().get( 'selection' ).first().toJSON();
					// set input
					$( '#' + id + '-value' ).val( attachment.id );
					// set preview
					var img = '<img src="' + attachment.url + '" style="max-width:200px;" />';
					$( '.' + id + '-image-preview' ).append( img );
				} );
				// Finally, open the modal
				file_frame[ id ].open();
			} );

			$removebutton.on( 'click', function( event ) {
				event.preventDefault();
				var $this = $( this );
				var id = $this.prev( 'input' ).attr( 'id' );
				$( '.' + id + '-image-preview' ).html( '' );
				$( '#' + id + '-value' ).val( 0 );
			} );
		});
		//]]>
	</script>
	<?php
	}

	/**
	 * Number of Column available in Settings Page.
	 * we can only set to 1 or 2 column.
	 */
	public static function acm_config_screen_layout_column( $columns, $screen ) {
		if ( $screen == self::PAGE_ID ) {
			$columns[self::PAGE_ID] = 2;
		}
		return $columns;
	}

	/**
	 * Settings Page Callback
	 */
	public static function acm_config_settings_page() {
		global $hook_suffix;
		do_action( 'acm_config_settings_page_init' );
		/* Enable add_meta_boxes function in this page. */
		do_action( 'add_meta_boxes', $hook_suffix );
		?>
		<div class="wrap">
			<h2>ACM Theme Configuration</h2>
			<?php settings_errors(); ?>
			<div class="fx-settings-meta-box-wrap">
				<form id="fx-smb-form" method="post" action="options.php">
					<?php settings_fields( 'acm_config' ); ?>
					<?php wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); ?>
					<?php wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); ?>
					<div id="poststuff">
						<div id="post-body" class="metabox-holder columns-<?php echo 1 == get_current_screen()->get_columns() ? '1' : '2'; ?>">
							<div id="postbox-container-1" class="postbox-container">
								<?php do_meta_boxes( $hook_suffix, 'side', null ); ?>
							</div>
							<div id="postbox-container-2" class="postbox-container">
								<?php do_meta_boxes( $hook_suffix, 'normal', null ); ?>
								<?php do_meta_boxes( $hook_suffix, 'advanced', null ); ?>
							</div>
						</div>
						<br class="clear">
					</div>
				</form>
			</div>
		</div>
		<?php
	}

	/**
	 * Delete Options.
	 */
	public static function acm_config_reset_settings() {
		$action = isset( $_REQUEST['action'] ) ? $_REQUEST['action'] : '';
		if ( 'reset_settings' == $action ) {
			if ( current_user_can( 'manage_options' ) ) {
				$nonce = isset( $_REQUEST['_wpnonce'] ) ? $_REQUEST['_wpnonce'] : '';
				if ( wp_verify_nonce( $nonce, 'fx-smb-reset' ) ) {
					delete_option( 'acm_number_of_posts' );
					delete_option( 'acm_social_networks' );
					delete_option( 'acm_custom_logos' );
					/* Utility hook. */
					do_action( 'acm_config_reset' );
					/* Add Update Notice. */
					add_settings_error( "acm_config", "", "Settings reset to defaults.", 'updated' );
				} else {
					/* Add Error Notice. */
					add_settings_error( "acm_config", "", "Failed to reset settings. Please try again.", 'error' );
				}
			} else {
				/* Add Error Notice. */
				add_settings_error( "acm_config", "", "Failed to reset settings. You do not capability to do this action.", 'error' );
			}
		}
	}

	/**
	 * Add Submit/Save Meta Box.
	 * @uses acm_config_submit_meta_box()
	 * @link http://codex.wordpress.org/Function_Reference/add_meta_box
	 */
	public static function acm_config_submit_add_meta_box() {
		add_meta_box(
			'submitdiv',
			'Save Options',
			[ __CLASS__, 'acm_config_submit_meta_box' ],
			self::PAGE_ID,
			'side',
			'high'
		);
	}

	/**
	 * Submit Meta Box Callback.
	 */
	public static function acm_config_submit_meta_box() {
		/* Reset URL */
		$reset_url = add_query_arg( array(
				'page' => 'acm_config',
				'action' => 'reset_settings',
				'_wpnonce' => wp_create_nonce( 'fx-smb-reset', __FILE__ ),
			),
			admin_url( 'admin.php' )
		);
	?>
	<div id="submitpost" class="submitbox">
		<div id="major-publishing-actions">
			<div id="delete-action">
				<a href="<?php echo esc_url( $reset_url ); ?>" class="submitdelete deletion">
					Reset Settings
				</a>
			</div>
			<div id="publishing-action">
				<span class="spinner"></span>
				<?php submit_button( esc_attr( 'Save' ), 'primary', 'submit', false );?>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<?php
	}


	/**
	 * Number of post meta box.
	 * @link http://codex.wordpress.org/Function_Reference/add_meta_box
	 */
	public static function acm_config_basic_add_meta_box() {
		add_meta_box(
			'basic',
			'Number of posts to display',
			[ __CLASS__, 'acm_number_of_posts_meta_box' ],
			self::PAGE_ID,
			'normal',
			'default'
		);
	}

	/**
	 * Number of post meta box callback.
	 */
	public static function acm_number_of_posts_meta_box() {
	?>
	<p>
		<label for="basic-text">Number of post</label>
		<input
			id="basic-text"
			class="widefat"
			type="number"
			name="acm_number_of_posts"
			value="<?php echo sanitize_text_field( get_option( 'acm_number_of_posts', '' ) );?>">
	</p>
	<p class="howto">
		Set a number of post to display in the main page. *If field is empty there will be no restrictions of posts.
	</p>
	<?php
	}

	/**
	 * Sanitize Basic Settings.
	 * This function is defined in register_setting().
	 */
	public static function acm_config_basic_sanitize( $settings  ) {
		$settings = sanitize_text_field( $settings );
		return $settings ;
	}

	/**
	 * Social networks meta box.
	 * @link http://codex.wordpress.org/Function_Reference/add_meta_box
	 */
	public static function acm_social_networks_add_meta_box() {
		add_meta_box(
			'acm_social_networks',
			'Social Networks',
			[ __CLASS__, 'acm_social_networks_meta_box' ],
			self::PAGE_ID,
			'normal',
			'default'
		);
	}

	/**
	 * Social networks meta box callback.
	 */
	public static function acm_social_networks_meta_box() {
		$social_options = get_option( 'acm_social_networks' );
	?>
	<p class="howto">
		Enter the full URL of your social network. Links will be displayed in the footer.
	</p>
	<p>
		<label for="facebook">Facebook</label>
		<input
			id="facebook"
			class="widefat"
			type="url"
			name="acm_social_networks[facebook]"
			placeholder="https://www.facebook.com/pages/ACM-Association-for-Computing-Machinery"
			value="<?php echo sanitize_text_field( $social_options['facebook'] );?>">
	</p>
	<p>
		<label for="flickr">Flickr</label>
		<input
			id="flickr"
			class="widefat"
			type="url"
			name="acm_social_networks[flickr]"
			placeholder="https://www.flickr.com/photos/theofficialacm"
			value="<?php echo sanitize_text_field( $social_options['flickr'] );?>">
	</p>
	<p>
		<label for="google-plus">Google Plus</label>
		<input
			id="google-plus"
			class="widefat"
			type="url"
			name="acm_social_networks[google_plus]"
			placeholder="https://plus.google.com/101763122146287444610/posts"
			value="<?php echo sanitize_text_field( $social_options['google_plus'] );?>">
	</p>
	<p>
		<label for="linkedin">LinkedIn</label>
		<input
			id="linkedin"
			class="widefat"
			type="url"
			name="acm_social_networks[linkedin]"
			placeholder="https://www.linkedin.com/company-beta/785681/"
			value="<?php echo sanitize_text_field( $social_options['linkedin'] );?>">
	</p>
	<p>
		<label for="email">Email</label>
		<input
			id="email"
			class="widefat"
			type="email"
			name="acm_social_networks[email]"
			placeholder="mailto:acmhelp@acm.org"
			value="<?php echo sanitize_email( $social_options['email'] );?>">
	</p>
	<p>
		<label for="twitter">Twitter</label>
		<input
			id="twitter"
			class="widefat"
			type="url"
			name="acm_social_networks[twitter]"
			placeholder="https://twitter.com/theofficialacm"
			value="<?php echo sanitize_text_field( $social_options['twitter'] );?>">
	</p>
	<p>
		<label for="instagram">Instagram</label>
		<input
			id="instagram"
			class="widefat"
			type="url"
			name="acm_social_networks[instagram]"
			placeholder="https://www.instagram.com/theofficialacm/"
			value="<?php echo sanitize_text_field( $social_options['instagram'] );?>">
	</p>
	<p>
		<label for="youtube">YouTube</label>
		<input
			id="youtube"
			class="widefat"
			type="url"
			name="acm_social_networks[youtube]"
			placeholder="https://www.youtube.com/user/TheOfficialACM"
			value="<?php echo sanitize_text_field( $social_options['youtube'] );?>">
	</p>
	<?php
	}

	/**
	 * Custom logos meta box.
	 * @link http://codex.wordpress.org/Function_Reference/add_meta_box
	 */
	public static function acm_custom_logos_add_meta_box() {
		add_meta_box(
			'acm_custom_logos',
			'Custom Logos',
			[ __CLASS__, 'acm_custom_logos_meta_box' ],
			self::PAGE_ID,
			'normal',
			'default'
		);
	}

	/**
	 * Custom logos meta box callback.
	 */
	public static function acm_custom_logos_meta_box() {
		$custom_logos = get_option( 'acm_custom_logos' );
	?>
	<p class="howto">
		Upload up to 5 sponsor logos. These will be displayed in the footer.
	</p>
	<?php
		$field_names = [
			'acm_custom_logo_1',
			'acm_custom_logo_2',
			'acm_custom_logo_3',
			'acm_custom_logo_4',
			'acm_custom_logo_5',
			'acm_custom_logo_6'
		];
		foreach ( $field_names as $key => $name ) :
			$value = $custom_logos[$name];
			$name = esc_attr( $name );
		?>
			<h5>Logo - <?php echo $key + 1; ?></h5>
			<input
				type="hidden"
				id="<?php echo esc_html( $name ); ?>-value"
				class="small-text" name="acm_custom_logos[<?php echo esc_html( $name ); ?>]"
				value="<?php echo esc_html( $value ); ?>"/>
			<input
				type="button"
				id="<?php echo esc_html( $name ); ?>"
				class="button meta-box-upload-button"
				value="Upload"/>
		<?php
			if ( $value ) :
		?>
			<input
				type="button"
				id="<?php echo esc_html( $name ); ?>-remove"
				class="button meta-box-upload-button-remove"
				value="Remove"/>
		<?php
			endif;
			$image = wp_get_attachment_thumb_url($value);
		?>
			<div class="<?php echo esc_html( $name ); ?>-image-preview">
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image ); ?>">
			<?php endif; ?>
			</div>
			<br />
		<?php
		endforeach;
	}
}
