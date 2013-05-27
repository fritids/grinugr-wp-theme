<?php
/*
Template Name: Página Investigadores GrinUGR
*/
?>
<?php get_header(); ?>
	<div id="overview" class="jumbotron subhead">
  <div class="container-fluid home-container">
    <h1><img class="entidad-icon" src="<?php bloginfo('template_url') ?>/images/icons/icon-proyectosgrinugr-large.png" alt="imagen de investigadores" width="60" /><?php _e("<!--:en-->People GrinUGR<!--:--><!--:es-->Personas GrinUGR<!--:-->"); ?> </h1>
	
	<p class="lead"><?php _e("<!--:en-->People and researchers that make up the project GrinUGR<!--:--><!--:es-->Personas e investigadores que componen el Proyecto GrinUGR.<!--:-->"); ?></p>
	
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
</div> 
	<div class="container-fluid container-fluid home-container">
			<!--<div class="pull-right" style="margin: -16px 5px -2px;"><?php get_search_form( $echo ); ?> </div>-->
			<div class="clearfix"></div>
				<div id="main" class="blog-col-izquierda clearfix" role="main">

							
							<div class="destacados-grinugr archive-list">
									<?php 
									$proyectos_relacionados=array();
									//sacamos los proyectos relacionados con grinugr
									$connected_to_grin = new WP_Query( array(
										  'connected_type' => 'proyectos_to_proyectos',
										  'connected_items' => 653, //proyectos relacionados a grin ugr
										  'nopaging' => false,
										  'posts_per_page' => 4,
										  'order' => 'ASC'
										) );
									if ( $connected_to_grin->have_posts() ) :
										while ( $connected_to_grin->have_posts() ) : $connected_to_grin->the_post();
											$proyectos_relacionados[]=get_the_ID();
										endwhile;
									endif;	
									wp_reset_query();
									
									
									//print_r($proyectos_relacionados);
									
									get_custom_post_box(726,'investigadores'); //sacamos a Esteban por defecto 
									
									
									$post_mostrados=array();
									
									//agregamos grin ugr a los proyectos que queremos listar
									$proyectos_relacionados[]=653;
									
									// Find connected pages
									$connected = new WP_Query( array(
									  'connected_type' => 'investigadores_to_proyectos',
									  'connected_items' => $proyectos_relacionados,
									  'nopaging' => true,									  
									  'order' => 'ASC',
									  'post__not_in' => array( 726 )
									) );
									

									// Display connected pages
									if ( $connected->have_posts() ) :
									?>
									<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
							
									<?php 
									
									
									if(!in_array(get_the_ID(),$post_mostrados)){ //si no está en el array de mostrados hacemos display del post
										$post_mostrados[]=get_the_ID();  
									?>
								<div class="media span4">
								   <?php
								   if (has_post_thumbnail( get_the_ID() ) ){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
									
								   ?>
								  <a href="<?php the_permalink() ?>" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
									<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
									
								  </a>
								  <?php }else{ ?>
								   <a href="<?php the_permalink() ?>" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php bloginfo('template_url'); ?>/images/no_pic_grinugr.jpg');">
									<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
									
								  </a>
								  
								  <?php } ?>
								  <div class="media-body">
									<h4 class="media-heading"><span class="muted"><?php _e("<!--:en-->Researcher<!--:--><!--:es-->Investigador <!--:-->"); ?></span></h4>
									<h4 class="media-heading"><?php the_title(); ?></h4>
									<p><?php the_excerpt(); ?>
									<div class="clearfix"></div>
									<a href="<?php the_permalink() ?>" class="btn btn-small btn-inverse"><?php _e("<!--:en-->Researcher Info<!--:--><!--:es-->Info Investigador <!--:-->"); ?></a></p>
								  </div>
										
							
								</div>
								<?php
								} //fin check post repetido
								?>
								
								<!--<div class="flota-derecha10">
									<span class="label label-important"><a href="#">Oxford Internet Centre</a></span>
									<span class="label label-important"><a href="#">Cristobal Cobo</a></span>	
								   </div>-->
								  
							
					
					
					

					
					<?php endwhile; ?>
					<?php 
					// Prevent weirdness
					wp_reset_postdata();					
					?>
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