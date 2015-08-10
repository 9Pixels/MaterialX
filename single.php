<?php
/**
 *	The Template for displaying all single posts.
 *
 *	@package WordPress
 *	@subpackage MaterialX
 */
get_header(); ?>
<?php  while ( have_posts() ) : the_post(); ?>
			<?php 
			$metro_creativex_template_url = get_template_directory_uri();
			if (has_post_format( 'aside' )) {
				echo '<h1 class="insidepost bg-design" style="background-image:url('.$metro_creativex_template_url.'/images/pt_aside.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'audio' )) {
				echo '<h1 class="insidepost bg-wordpress" style="background-image:url('.$metro_creativex_template_url.'/images/pt_audio.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'chat' )) {
				echo '<h1 class="insidepost bg-stuff" style="background-image:url('.$metro_creativex_template_url.'/images/pt_chat.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'gallery' )) {
				echo '<h1 class="insidepost bg-responsive" style="background-image:url('.$metro_creativex_template_url.'/images/pt_gallery.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'image' )) {
				echo '<h1 class="insidepost bg-responsive" style="background-image:url('.$metro_creativex_template_url.'/images/pt_image.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'link' )) {
				echo '<h1 class="insidepost bg-web" style="background-image:url('.$metro_creativex_template_url.'/images/pt_link.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'quote' )) {
				echo '<h1 class="insidepost bg-web" style="background-image:url('.$metro_creativex_template_url.'/images/pt_quote.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'status' )) {
				echo '<h1 class="insidepost bg-web" style="background-image:url('.$metro_creativex_template_url.'/images/pt_status.png);">'. esc_html( get_the_title() ) .'</h1>';
			} elseif (has_post_format( 'video' )) {
				echo '<h1 class="insidepost bg-wordpress" style="background-image:url('.$metro_creativex_template_url.'/images/pt_video.png);">'. esc_html( get_the_title() ) .'</h1>';
			} else {
				echo '<h1 class="insidepost bg-stuff" style="background-image:url('.$metro_creativex_template_url.'/images/pt_standard.png);">'. esc_html( get_the_title() ) .'</h1>';
			}
			?>
		<div class="insidepost_date"><?php echo get_the_date(); ?> - <?php the_category(', ') ?></div>
	</div><!--/topside-->
	<div id="content">
		<div <?php post_class(); ?>>
			<?php 
				$metro_creativex_posttitle = get_the_title();
				$metro_creativex_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				if(isset($metro_creativex_feat_image[0])):
					echo '<div class="post_img"><img src='.$metro_creativex_feat_image[0].' alt="'. esc_html( $metro_creativex_posttitle ) .'"></div>';
				endif;	
			
				the_content(); 
				wp_link_pages();
				edit_post_link( __('Edit post', 'materialx'));
			?>
			<div class="clearfix"></div>
			<?php 
				if(has_tag()):
					echo '<div class="tags">';
					the_tags();	
					echo '</div>';
				endif;	
			?> 
		</div><!--/post-->
		<?php metro_creativex_pagination(); ?>
		<?php comments_template(); ?>
	</div><!-- /content -->
<?php endwhile; ?>
<?php get_footer(); ?>