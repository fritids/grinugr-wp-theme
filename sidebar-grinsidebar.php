<?php global $post_id; 
	
	//detectamos en el custom_post_type en el que estamos para filtrar acciones
	//$custom_post->post_type
	
	$custom_post = get_post($post_id);
	
	/*echo "<pre>";
	print_r($custom_post);
	echo "</pre>";*/
?>			
			<div id="pagesidebar" class="fluid-sidebar sidebar span4" role="complementary">
						    
							<ul class="nav nav-tabs" id="myTab">
								<li class="active"><a href="#contacto"><?php _e("<!--:en-->Contact<!--:--><!--:es-->Contacto<!--:-->");?></a></li>
								
								<li><a href="#conexiones"><?php _e("<!--:en-->Connections<!--:--><!--:es-->Conexiones<!--:-->");?></a></li>
								</ul>
								 
								 
								<div class="tab-content">
								<div class="tab-pane active" id="contacto">
										<?php 
										$web=rwmb_meta( 'entidades_grinugr_web' , 'type=text' ); 
										$emailc=rwmb_meta( 'entidades_grinugr_emailc' , 'type=text' ); 
										$utwitter=rwmb_meta( 'entidades_grinugr_utwitter' , 'type=text' ); 
										$ciudad=rwmb_meta( 'entidades_grinugr_ciudad' , 'type=text' ); 
										$pais=rwmb_meta( 'entidades_grinugr_pais' , 'type=text' ); 
										$cp=rwmb_meta( 'entidades_grinugr_cp' , 'type=text' ); 
										
										?>
								        <dl class="dl-horizontal">
										<?php if($web){ ?>
										<dt>Web</dt>
										<dd><a href="http://<?=$web?>">http://<?=$web?></a></dd>
										<hr/>
										<?php } ?>
										<?php if(($emailc)&&($custom_post->post_type!="investigadores")){ //en caso de ser un investigador no mostramos el email ?>
										<dt>Email</dt>
										<dd><a href="mailto:<?=$emailc?>"><?=$emailc?></a></dd>
										<hr/>
										<?php } ?>
										<?php if($utwitter){ ?>
										<dt>Twitter</dt>
										<dd><a href="http://twitter/<?=$utwitter?>"><?=$utwitter?></a></dd>
										<hr/>
										<?php } ?>
										<?php if($ciudad){ ?>
										<dt><?php _e("<!--:en-->City<!--:--><!--:es-->Ciudad<!--:-->");?></dt>
										<dd><?=$ciudad?></dd>
										<hr/>
										<?php } ?>
										<?php if($pais){ ?>
										<dt><?php _e("<!--:en-->Country<!--:--><!--:es-->Pa&iacute;s<!--:-->");?></dt>
										<dd><?=$pais?></dd>
										
										<?php } ?>
										</dl>
										
									
										
								</div>
								
								<div class="tab-pane" id="conexiones" style="overflow-y:scroll;height:300px">
									<div class="destacados-grinugr">
									<?php
									$post_type=get_post_type();
									
									
									
									if(($post_type=='proyectos')||($post_type=='investigadores')){
										$post_tag="Investigador-Proyecto";
										// Find connected pages
										$connected = new WP_Query( array(
										  'connected_type' => 'investigadores_to_proyectos',
										  'connected_items' => get_queried_object(),
										  'nopaging' => true,
										  
										  'order' => 'ASC'
										) );
									}else if($post_type=='proyectos_internos'){
										// Find connected pages
										$post_tag="Investigador-Proyecto de GrinUGR";
										$connected = new WP_Query( );
										
										 /* $connected = new WP_Query( array(
											  'connected_type' => 'investigadores_to_proyectos_internos',
											  'connected_items' => get_queried_object(),
											  'nopaging' => false,
											  'posts_per_page' => 4,
											  'order' => 'ASC'
											) );*/
											
									
										
										

									}else if($post_type=='centros'){
										// Find connected pages
										$post_tag="Investigador-Proyecto de GrinUGR";
										$connected = new WP_Query( array(
										  'connected_type' => 'investigadores_to_centros',
										  'connected_items' => get_queried_object(),
										  'nopaging' => false,
										  'posts_per_page' => 4,
										  'order' => 'ASC'
										) );

									}									
								
									// Display connected pages
									if ( $connected->have_posts() ) :
									?>
										<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>

											<div class="media" >
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
												<h4 class="media-heading"><span class="muted"><?=$post_tag?></span></h4>
												<h4 class="media-heading"><?php the_title(); ?></h4>
												<p><?php /*the_excerpt(); */?>
												<div class="clearfix"></div>
												<a href="<?php the_permalink(); ?>" class="btn btn-small btn-inverse"><?php _e("<!--:en-->See connection<!--:--><!--:es-->Ver conexión<!--:-->");?></a></p>
											  </div>
													
										
											</div>
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

										<?php 
										// Prevent weirdness
										wp_reset_postdata();

									endif;
									?>
									</div>
								</div>
							</div>
								 
								<script>
								$(function () {
								$('#myTab a:first').tab('show');
								})
								    $('#myTab a').click(function (e) {
									e.preventDefault();
									$(this).tab('show');
									})
								</script>
								
								
						<div style=" padding: 8px 0;margin-top:40px;" class="well">
							  <ul class="nav nav-list">
								
							
								<li class="nav-header"><?php _e("<!--:en-->MORE IN #GRINUGR<!--:--><!--:es-->MAS EN #GRINUGR<!--:-->");?></li>
								<?php
								$args=array(
									'menu'            => 'Menu Navegacion Entidad',
									'container'       => '',
									'menu_class'      => 'menu',
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '%3$s',
									'depth'           => 0,
									'walker'          => new description_walker()
								);
								
								wp_nav_menu($args);
								
								?>
								
							
								
								<li class="divider"></li>

								<?php if(qtrans_getLanguage()=='en'){ ?>
									<li><a href="/en/contacto/">Contact</a></li>
								<?php } ?>
								<?php if(qtrans_getLanguage()=='es') { ?>								
									<li><a href="/contacto/">Contacto</a></li>
								<?php } ?>
								
								
							  </ul>
						</div>
						
						
				
					
					
				
		

				</div>