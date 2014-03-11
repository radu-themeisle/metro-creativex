<?php/** * The Template for displaying all single posts. * * @package cwp */get_header(); ?>	<?php /* The loop */ while ( have_posts() ) : the_post(); ?>				<h1 class="insidepost" style="background-image:url(				<?php 				$template_url = get_template_directory_uri();				if (has_post_format( 'aside' )) {					echo $template_url.'/images/pt_aside.png';				} elseif (has_post_format( 'audio' )) {					echo $template_url.'/images/pt_audio.png';				} elseif (has_post_format( 'chat' )) {					echo $template_url.'/images/pt_chat.png';				} elseif (has_post_format( 'gallery' )) {					echo $template_url.'/images/pt_gallery.png';				} elseif (has_post_format( 'image' )) {					echo $template_url.'/images/pt_image.png';				} elseif (has_post_format( 'link' )) {					echo $template_url.'/images/pt_link.png';				} elseif (has_post_format( 'quote' )) {					echo $template_url.'/images/pt_quote.png';				} elseif (has_post_format( 'status' )) {					echo $template_url.'/images/pt_status.png';				} elseif (has_post_format( 'video' )) {					echo $template_url.'/images/pt_video.png';				} else {					echo $template_url.'/images/pt_standard.png';				}				?>);"><?php the_title(); ?></h1>			<div class="insidepost_date"><?php the_time('d M Y'); ?> - <?php the_category(', ') ?></div>		</div><!--/topside-->		<div id="content">			<div <?php post_class('post'); ?>>				<?php 					$posttitle = get_the_title();					$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );					if(isset($feat_image[0])):						echo '<div class="post_img"><img src='.$feat_image[0].' alt="'.$posttitle.'"></div>';					endif;										the_content(); 					wp_link_pages();				?>				<div class="clearfix"></div>				<?php 					if(has_tag()):						echo '<div class="tags">';						the_tags();							echo '</div>';					endif;					?> 			</div><!--/post-->			<?php cwp_pagination(); ?>			<?php comments_template(); ?>		</div><!-- /content -->	<?php endwhile; ?><?php get_footer(); ?>