<?php get_header(); ?>
	<div id="overview" class="jumbotron subhead">
  <div class="container-fluid home-container">
    <h1><img class="entidad-icon" src="<?php bloginfo('template_url') ?>/images/icons/icon-centros-large.png" alt="imagen de centros" width="60" /> <?php _e("<!--:en-->Centers<!--:--><!--:es-->Centros<!--:-->"); ?><?php /*the_title();*/ ?></h1>
	
	<p class="lead"><?php _e("<!--:en-->Directory research centers that use the internet as a tool.<!--:--><!--:es-->Directorio de centros de investigación que emplean internet como herramienta. <!--:-->"); ?></p>
	<?php if(qtrans_getLanguage()=='en'){ ?>
		<a href="/en/identificacion-de-proyectos-digitales/" class="btn btn-inverse btn-medium"><i class="icon-pencil icon-white"></i><strong>Add your event by filling out our form</strong></a>
	<?php } ?>
	<?php if(qtrans_getLanguage()=='es') { ?>								
		<a href="/identificacion-de-proyectos-digitales/" class="btn btn-inverse btn-medium"><i class="icon-pencil icon-white"></i><strong>Añade tu caso rellenando nuestro formulario </strong></a>
	<?php } ?>	
	
	
  </div>
</div>
<div class="bs-docs-social">
  <div class="container-fluid home-container">
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
	<div class="container-fluid container-fluid home-container">
			
				<div id="main" class="blog-col-izquierda clearfix" role="main">

							
							<div class="destacados-grinugr archive-list">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
							
								
								<div class="media span4">
								   <?php
								   if (has_post_thumbnail( get_the_ID() ) ){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
									
								   ?>
								  <a href="<?php the_permalink() ?>" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
									<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
									
								  </a>
								 <?php }else{ ?>
								   <a href="<?php the_permalink() ?>" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php bloginfo('template_url'); ?>/images/no_pic_centro.jpg');">
									<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
									
								  </a>
								  
								  <?php } ?>
								  <div class="media-body">
									<h4 class="media-heading"><span class="muted"><?php _e("<!--:en-->Center<!--:--><!--:es-->Centro<!--:-->"); ?></span></h4>
									<h4 class="media-heading"><?php the_title(); ?></h4>
									<p><?php the_excerpt(); ?>
									<div class="clearfix"></div>
									<a href="<?php the_permalink() ?>" class="btn btn-small btn-inverse"><?php _e("<!--:en-->Center Info<!--:--><!--:es-->Info Centro<!--:-->"); ?></a></p>
								  </div>
										
							
								</div>
							
								
								<!--<div class="flota-derecha10">
									<span class="label label-important"><a href="#">Oxford Internet Centre</a></span>
									<span class="label label-important"><a href="#">Cristobal Cobo</a></span>	
								   </div>-->
								  
							
					
					
					

					
					<?php endwhile; ?>	
					<div class="clearfix"></div>
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
					
						<div class="clearfix"></div>
								
					</div> <!-- end #destacados grinugr -->
			
				</div> <!-- end #main -->
    
				<?php // get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>