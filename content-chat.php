<?php/** *	The template for displaying posts in the Chat post format. * *	@package WordPress *	@subpackage MaterialX */?><article id="post-<?php the_ID(); ?>" <?php post_class('bg-design'); ?>>	<?php 		$materialx_posttitle = get_the_title();		$materialx_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );		if(isset($materialx_feat_image[0])):			echo '<div class="img">					<div class="post_icon" style="background-image:url('. esc_url( get_template_directory_uri() ) .'/images/pt_chat.png);"></div>					<img src='. esc_url( $materialx_feat_image[0] ) .' alt="'. esc_html( $materialx_posttitle ) .'">				</div>';		endif;		?>	<div class="post_content">		<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title(); ?>">			<?php 				the_title();								if(!isset($materialx_feat_image[0])):					echo '<div class="post_icon" style="background-image:url('. esc_url( get_template_directory_uri() ) .'/images/pt_chat.png);"></div>';				endif;				?>		</a>		<div class="excerpt chat_type">			<?php echo get_the_excerpt(); ?>		</div><!--/excerpt-->		<div class="post_date"><?php echo esc_html( get_the_time( get_option( 'date_format' ) ) ); ?></div>	</div><!--/post_content--></article>