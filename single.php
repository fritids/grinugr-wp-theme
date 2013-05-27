<?php get_header();
	  global $post_id;
 ?>
<div id="overview" class="jumbotron subhead">
  <div class="container">
    <h1>Blog</h1>
    <p class="lead"><?php the_category(','); ?><!--#GrinUGR, proyectos de investigación que usan internet como herramienta.--></p>
  </div>
</div>
<div class="bs-docs-social">
  <div class="container">
	<!-- Breadcrumb -->
	<?php //the_breadcrumb(); ?>
	<div class="breadcrumbs">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}?>
	</div>
	<!-- Fin Breadcrumb -->
         <?php //llamamos a los iconos de redes sociales
				
				echo get_social_icons('pull-right');
			   ?>
   </div>
</div> 
	<div class="container-fluid">
			<!--<div id="content" class="clearfix row-fluid">-->
			
				<div id="main" class="span8 blog-col-izquierda clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $post_id = get_the_ID();
					/*echo "DEBUG post id: <BR>" ;
					echo $post_id;*/
					?> 	
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							
							<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																			  [1] => width
																			  [2] => height */
							?>
							
							<div id="custom-bg" style="width:96%; max-height:400px; height:<?=$image[2]?>px; background-position:center;background-image: url('<?php echo $image[0]; ?>'); background-size:cover;">

							</div>
							<?php endif; ?>
							<div class="share-up pull-right"><?php echo grin_social_share();?><p class="pull-right muted"><?php _e("<!--:en-->Share<!--:--><!--:es-->Comparte<!--:-->"); ?></p></div>
						
							<?php //the_post_thumbnail( 'wpbs-featured' ); ?>
							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta pull-left"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el<!--:-->", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("<!--:en-->by<!--:--><!--:es-->por<!--:-->", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
							<div class="clearfix"></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<!--<footer>-->
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
							<?php } ?>
							
						<hr/>	
						<div class="space-bottom5"></div>
						 <!--</footer> end article footer -->
						<!--<div class="pull-right">
							
							<?php /*echo grin_social_share();*/?>	
							<p class="pull-right muted"><?php _e("<!--:en-->Share<!--:--><!--:es-->Comparte<!--:-->"); ?>
						</div>-->
					</article> <!-- end article -->
					
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>