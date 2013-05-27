<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
<div id="overview" class="jumbotron subhead">
  <div class="container">
    <h1>
	<?php if(qtrans_getLanguage()=='en'){ ?>
		<a href="/en/proyectos/" title="Volver al listado de Proyectos"><img class="entidad-icon" src="<?php bloginfo('template_url') ?>/images/icons/icon-proyectos-large.png" alt="imagen de proyectos" width="60" /> Digital Projects<?php /*the_title();*/ ?></a></h1>
	<?php } ?>
	<?php if(qtrans_getLanguage()=='es') { ?>								
		<a href="/proyectos/" title="Volver al listado de Proyectos"><img class="entidad-icon" src="<?php bloginfo('template_url') ?>/images/icons/icon-proyectos-large.png" alt="imagen de proyectos" width="60" /> Proyectos Digitales <?php /*the_title();*/ ?></a></h1>
	<?php } ?>	
	
	
	
	<p class="lead"><?php _e("<!--:en-->Directory of digital projects.<!--:--><!--:es-->Directorio de proyectos digitales. <!--:-->"); ?></p>
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
							
							<!--<div id="custom-bg" style="width:<?=$image[1]?>px; max-width:100%; max-height:400px; height:<?=$image[2]?>px; background-position:center;background-image: url('<?php echo $image[0]; ?>'); background-size:cover;">-->
							<div id="custom-bg" style="width:97%; height:<?=$image[2]?>px; min-height:150px; max-height:250px; background-position:center;background-image: url('<?php echo $image[0]; ?>'); background-size:auto; background-repeat:no-repeat;">	

							</div>
							<?php endif; ?>
							<div class="share-up pull-right"><?php echo grin_social_share();?><p class="pull-right muted"><?php _e("<!--:en-->Share<!--:--><!--:es-->Comparte <!--:-->"); ?></p></div>
						
							<?php //the_post_thumbnail( 'wpbs-featured' ); ?>
							<?php 
								//cogemos el campo subtítulo
								
								$subtitulo=rwmb_meta( 'grinugr_subtitulo' , 'type=text' );
							?>
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
						
							
							<!--<p class="meta"><?php _e("Publicado el", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php/* _e("por", "bonestheme"); ?> <?php the_author_posts_link();*/ ?> <span class="amp">/</span> <?php _e("en", "bonestheme"); ?> <?php the_category(', '); ?>.</p>-->
						
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
						
					
					</article> <!-- end article -->
					
					<div class="alert alert-info">
					<h4><?php _e("<!--:en-->Are you a researcher or belong to this entity?<!--:--><!--:es-->¿Eres un investigador o perteneces a esta entidad?<!--:-->"); ?></h4>
					<?php _e("<!--:en-->If there is any data you want to change, enter it below as a comment.<!--:--><!--:es-->>Si hay algún dato que desees modificar, indícalo a continuación como comentario. <!--:-->"); ?>
					</div>
					<?php comments_template('',true); ?>
					
					<div class="clearfix"></div>
					
					
			
				</div> <!-- end #main -->
    <?php endwhile; ?>
	<?php endif; ?>
				<?php get_sidebar('grinsidebar'); // sidebar 2 ?>
				<div class="clearfix"></div>
				<div class="content-fluid">
					<h3 class="titulo-right-content"><i class="icon-birrete-big"></i><?php _e("<!--:en-->OTHER PROJECTS IN<!--:--><!--:es-->OTROS PROYECTOS EN EL <!--:-->"); ?> <span class="green"><?php _e("<!--:en-->DIGITAL<!--:--><!--:es-->BANCO <!--:-->"); ?>BANCO</span> <?php _e("<!--:en-->BANK<!--:--><!--:es-->DIGITAL <!--:-->"); ?>DIGITAL
					<?php if(qtrans_getLanguage()=='en'){ ?>
						<a class="ver-todas-lnk" href="/en/proyectos/">See all &raquo;</a></h3>
					<?php } ?>
					<?php if(qtrans_getLanguage()=='es') { ?>								
						<a class="ver-todas-lnk" href="/proyectos/">Ver todos&raquo; </a></h3>
					<?php } ?>	
					
					
					<div class="destacados-grinugr">
					
						<?php //sacar un centro destacado que se indique por algún método
						$proyectos=get_destacados_grinugr('proyectos');
						//$custom_post = get_post( $id_custom_post );
						/*echo "<pre>";
						print_r($proyectos);
						echo "</pre>";*/
						global $post_id;
						//echo 'DEBUG '.$post_id;
						
						$i=0;
						
						foreach ($proyectos as $proyecto) {
							$i++;
							$custom_post = get_post( $proyecto );
							if($i<=3){
								if($custom_post->ID!=$post_id){
						?>
						<div class="media span4" style="margin:0px 2px 0px 0px">
						   <?php
						   if (has_post_thumbnail( $custom_post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $custom_post->ID ), 'large' );
							
						   ?>
						   
						   <?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
									<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
													
								</a>
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>								
								<a href="/proyectos/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
									<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
													
								</a>
							<?php } ?>	
						   
						  
						  <?php endif; ?>
						  <div class="media-body">
							<h4 class="media-heading"><span class="muted"><?php _e("<!--:en-->Project<!--:--><!--:es-->Proyecto<!--:-->"); ?></span></h4>
							<h4 class="media-heading"><?=$custom_post->post_title?></h4>
							<p><?=$custom_post->post_excerpt?>
							<div class="clearfix"></div>
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Project Info</a></p>
												  
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>								
								<a href="/proyectos/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Info Proyecto</a></p>
												  
							<?php } ?>	
							
							
							</div>
						  		
					
						</div>
						<?php
								}
						}
						}
						?>
						
						<!--<div class="flota-derecha10">
							<span class="label label-important"><a href="#">Oxford Internet Centre</a></span>
							<span class="label label-important"><a href="#">Cristobal Cobo</a></span>	
						   </div>-->
						  
						<div class="clearfix"></div>
						
					</div>
				</div>	
    
			</div> <!-- end #content -->
			

<?php get_footer(); ?>