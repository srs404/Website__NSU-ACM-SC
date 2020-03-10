<div class="wrap">
	<h1 class="wp-heading-inline">Video tutorials</h1>
	<div class="acm-video-tutorials__container">
	<?php
		$video_data = ACMUtils::get_data_from_json('/src/video-tutorials/video-tutorials.json');
		if ( is_array( $video_data ) ) :
			$videos = $video_data['videos'];
			foreach ( $videos as $row ) :
	?>
		<div class="acm-video-tutorials__row">
			<?php
				foreach ( $row as $video ) :
			?>
			<div class="acm-video-tutorials__tutorial">
				<h2 class="acm-video-tutorials__tutorial-title">
					<?php echo $video['title'] ?>
				</h2>
				<div class="acm-video-tutorials__tutorial-video">
					<?php echo wp_oembed_get( 'https://www.youtube.com/watch?v=' . $video['id'] ); ?>
				</div>
				<p class="acm-video-tutorials__tutorial-description">
					<?php echo $video['description'] ?>
				</p>
			</div>
			<?php
				endforeach;
			?>
		</div>
	<?php
			endforeach;
		endif;
	?>
	</div>
</div>
