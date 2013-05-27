<?php get_header(); ?>
<div id="overview" class="jumbotron subhead">
  <div class="container-fluid home-container">
      <h1><?php _e("Resultados de búsqueda para","bonestheme"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1>
	
	<p class="lead"></p>
	
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
			<div class="pull-left" style="margin: -16px 5px -2px;"><?php //get_search_form( $echo ); ?> </div>
			<div class="clearfix"></div>
				<div id="main" class="blog-col-izquierda clearfix" role="main">

							
							<div class="destacados-grinugr archive-list">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
							
								
								<div class="media span4">
								  <?php
								  //determinamos el tipo de Post y su tag
								  $post_type=get_post_type();
								  if($post_type=='investigadores'){
										$tag_post='Investigador';
								  }else if($post_type=='centros'){
										$tag_post='Centro';
								  }else if($post_type=='proyectos'){
										$tag_post='Proyecto';
								  }else if($post_type=='post'){
										$tag_post='Entrada';
								  }else if($post_type=='page'){
										$tag_post='Página';
								  }else if($post_type=='proyectos_internos'){
										$tag_post='Proyecto GrinUGR';
								  }
								  ?>
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
									<h4 class="media-heading"><span class="muted"><?=$tag_post?></span>
										<?php if($tag_post=="Entrada"){ ?>
										<span class="real-muted pull-right"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time></span></h4>
										<?php } ?>
									<h4 class="media-heading"><a style="color:#222222;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
									<h4 class="media-heading"><a href="<?php the_permalink() ?>" class="btn btn-small btn-inverse">Ver <?=$tag_post?></a></h4>
									<p><?php the_excerpt(); ?>
									<div class="clearfix"></div>
									</p>
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
					    	<h1><?php _e("Sin resultados", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Lo sentimos, pero no hemos encontrado nada.", "bonestheme"); ?></p>
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