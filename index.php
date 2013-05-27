<?php get_header(); ?>
			
			<div id="overview" class="jumbotron subhead">
  <div class="container">
    <h1>Blog</h1>
    <p class="lead"><?php _e("<!--:en-->News in # GrinUGR, research projects using the internet as a tool.<!--:--><!--:es-->Novedades de #GrinUGR, proyectos de investigación que usan internet como herramienta.<!--:-->"); ?></p>
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
        <div class="pull-right" style="margin: 8px 16px -20px 40px;"><?php get_search_form( $echo ); ?> </div>
	
         <?php //llamamos a los iconos de redes sociales
				
				echo get_social_icons('pull-right');
			   ?>
		</div>
   </div>
</div> 
	<div class="container-fluid">
			
				<div id="main" class="span8 blog-col-izquierda clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
							<?php //the_post_thumbnail( 'wpbs-featured' ); ?>
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								
								<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																				  [1] => width
																				  [2] => height */
								?>
								
								<div id="custom-bg" style="width:<?=$image[1]?>px; max-width:97%;  max-height:400px; height:<?=$image[2]?>px; background-position:center;background-image: url('<?php echo $image[0]; ?>'); background-size:cover;">

								</div>
								<?php endif; ?>
							</a>
							
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<p class="meta"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("<!--:en-->by <!--:--><!--:es-->por <!--:-->", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <?php the_category(', '); ?>.</p></p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php //the_content( __("Read more &raquo;","bonestheme") ); ?>
							<?php the_excerpt(); ?>
							 <a href="<?php the_permalink() ?>" class="btn btn-inverse btn-small pull-right" ><?php _e("<!--:en-->Read more<!--:--><!--:es-->Leer más <!--:-->"); ?></a>
						</section> <!-- end article section -->
						
						<!--<footer>-->
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
							
						<!--</footer>  end article footer -->
						<hr/>
						<div class="space-bottom5"></div>
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
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