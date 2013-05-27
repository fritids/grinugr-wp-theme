<?php global $post_id;?>			
			<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">
						
						<!--<?php get_search_form( $echo ); ?> -->
						<div style=" padding: 8px 0; margin-bottom:40px;" class="well">
							  <ul class="nav nav-list">
								<li class="nav-header"><?php _e("<!--:en-->SELECT CATEGORY BLOG<!--:--><!--:es-->SELECCIONA CATEGORÍA BLOG<!--:-->"); ?></li>
								<!--<li class="active"><a href="#">Home</a></li>-->
								 
								
								<?php
									$page = get_page_by_title( 'Blog' );
									$prueba=(get_the_category($post_id->ID));
									if(count($prueba)==1){
										$nombre=$prueba[0]->cat_name;
									}
									//cogemos las categorías del post actual
									$post_categories = wp_get_post_categories( $post_id );
									$cats = array();
									$nomcats=array();
																			
									foreach($post_categories as $c){
										$cat = get_category( $c );
										//print_r($cat);
										$cats[] = $cat->cat_ID;
										
									}
									
									//for each category, show 5 posts
									$cat_args=array(
									  'orderby' => 'name',
									  'order' => 'ASC'
									   );
									$categories=get_categories($cat_args);
									 if(qtrans_getLanguage()=='en'){ 
										foreach($categories as $category) { 
											//print_r($category);
											if ((in_array($category->cat_ID, $cats)or $nombre==$category->name) and $page->ID!=373) {  //comprobamos si la categoría que toca en el bucle es alguna del post
												echo '<li class="active"><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}else{
												echo '<li><a href="/en/'.$category->slug.'/">'.$category->name.'</a></li>';
											}	
										}
									 } 
									 if(qtrans_getLanguage()=='es') { 								
										foreach($categories as $category) { 
											//print_r($category);
											if ((in_array($category->cat_ID, $cats)or $nombre==$category->name) and $page->ID!=373) {  //comprobamos si la categoría que toca en el bucle es alguna del post
												echo '<li class="active"><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}else{
												echo '<li><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}	
										}
									 } 	
									
									
									
								?>
								<li class="divider"></li>
								<li class="nav-header"><?php _e("<!--:en-->OTHER SECTIONS<!--:--><!--:es-->OTRAS SECCIONES<!--:-->"); ?></li>
								<?php if(qtrans_getLanguage()=='en'){ ?>
									<li><a href="http://grinugr.org/en/eventos/">Calendar of Events</a></li>
									<li><a href="http://grinugr.org/en/proyectos_internos/gamificacion-de-wikipedia/">Gamification Project of Wikipedia</a></li>
									<li><a href="http://grinugr.org/en/proyectos/">Digital Projects</a></li>
									<li><a href="http://grinugr.org/en/centros/">Centers</a></li>
									<li><a href="http://grinugr.org/en/investigadores/">Researchers</a></li>
									<li class="divider"></li>
									<li><a href="http://grinugr.org/en/contacto/">Contact</a></li>
								<?php } ?>
								<?php if(qtrans_getLanguage()=='es') { ?>
									<li><a href="http://grinugr.org/eventos/">Calendario de Eventos</a></li>
									<li><a href="http://grinugr.org/proyectos_internos/gamificacion-de-wikipedia/">Proyecto Gamificación de Wikipedia</a></li>
									<li><a href="http://grinugr.org/proyectos/">Proyectos Digitales</a></li>
									<li><a href="http://grinugr.org/centros/">Centros</a></li>
									<li><a href="http://grinugr.org/investigadores/">Investigadores</a></li>
									<li class="divider"></li>
									<li><a href="http://grinugr.org/contacto/">Contacto</a></li>
									
								<?php } ?>		
								
							  </ul>
						</div>
						
						
						<!--Suscripción a newsletter-->	
					<h3 class="titulo-right-content"><i class="icon-envelop-big"></i><?php _e("<!--:en-->STAY<!--:--><!--:es-->MANTENTE<!--:-->"); ?> <span class="green">GR</span><?php _e("<!--:en-->INFORMED<!--:--><!--:es-->INFORMADO<!--:-->"); ?>
					<ul class="bs-docs-social-shares pull-right" style="margin-top:-10px">
							<li><a class="share-btn" title="Síguenos en Facebook" href="http://www.facebook.com/GrinUGR" target="_blank"><span class="fb-share"></span></a></li>
							<li><a class="share-btn" title="Síguenos en Twitter" href="https://twitter.com/grinugr" target="_blank"><span class="tw-share"></span></a></li>
						  </ul>		
					</h3>
					<div class="well" style="padding:6px 22px 6px" >
										
							<form id="newsletter-form01" name="newsletter-form" class="newsletter-form" action="/" style="margin-bottom:0px;" method="get">
							<div class="control-group-newsletter">
							<label class="control-label-newsletter" for="inputIcon"><?php _e("<!--:en-->Subscribe to Mailing List<!--:--><!--:es-->Suscripción a lista de correo<!--:-->")?></label>
										
							<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input class="email-newsletter input-medium" name="email-newsletter" class="placeholder" id="inputIcon" type="text">
								 <a href="#" class="btn btn-inverse suscribir-newsletter"><?php _e("<!--:en-->Subscribe<!--:--><!--:es-->Suscribir<!--:-->")?></a>
							</div>	
							</div>	
							
							<label class="control-label-newsletter" for="inputIcon"><?php _e("<!--:en-->Receive blog news<!--:--><!--:es-->Recibir novedades del blog<!--:-->")?></label>
										
							<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input class="email-novedades input-medium" name="email-novedades" class="placeholder" id="inputIcon" type="text">
								 <a href="#" class="btn btn-inverse suscribir-novedades"><?php _e("<!--:en-->Subscribe<!--:--><!--:es-->Suscribir<!--:-->")?></a>
							</div>	
							</div>
							
							<!--<div class="control-fluid" style="margin-left:74px">
										<label class="checkbox inline">
										<input type="checkbox" id="option-lista" value="option-lista" checked="checked"/> <strong>Suscribirme a lista de correo</strong>
										</label>
										<label class="checkbox">
										<input type="checkbox" id="option-novedades" value="option-novedades" checked="checked"/> <strong>Recibir novedades del blog</strong>
										</label>
										
							</div>	-->
							<div class="clearfix"></div>								
							<hr/>
							<div class="control-fluid">
								<label class="checkbox pull-left" style="margin-top:0px;">
										<input type="checkbox" id="option-privacidad" value="option-privacidad" /><?php _e("<!--:en-->I accept the<!--:--><!--:es-->Acepto la<!--:-->")?> <a href="/politicas-de-privacidad/"><?php _e("<!--:en-->privacy policy<!--:--><!--:es-->política de privacidad<!--:-->")?></a>
										</label>	
								<!--<a href="#" class="btn btn-inverse suscribir-newsletter pull-right">Suscribir</a>-->
								<!--<a class="btn btn-inverse boton-lanzar pull-right">Botón</a>-->
							</div>
							<div class="clearfix"></div>	
							
							</div>
							
							</form>
						
					
					
							
				

						
						 <!--<p class="muted">Suscripción a newsletter + posts to mail</p>-->
						</div>
						<?php 
								echo do_shortcode('[jetpack_subscription_form]'); 
								mailchimpSF_signup_form();
								
								response_mensajes(); //mensajes de respuesta
						?>
						
						
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>
						
	
					 <!--PRÓXIMOS EVENTOS-->
					<div class="widget-eventos widget-eventos-sidebar">
					<h3 class="titulo-right-content"><i class="icon-calendar-big"></i><?php _e("<!--:en-->EVENTS PROGRAM<!--:--><!--:es-->PROGRAMA DE EVENTOS<!--:-->")?> <span class="green">GRIN</span>UGR</h3>
					<div class="well">
						
						<div class="accordion acc-eventos" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
										 <span class="label label-inverse">11<span class="middle-green">ABR</span></span><span class="acc-titulo-evento pull-right"><?php _e("<!--:en-->GrinUGR 17 + Starter GrinUGR Granada: “Gamification and Entrepreneurship”<!--:--><!--:es-->GrinUGR 17 + Iniciador Granada: “Gamificación & Emprendimiento”<!--:-->")?></span>
										 <div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseOne" class="accordion-body collapse">
									<div class="accordion-inner">
										<strong><?php _e("<!--:en-->On Thursday, April 11 at 19:00<!--:--><!--:es-->El jueves 11 de abril a las 19:00 horas<!--:-->")?></strong><?php _e("<!--:en-->hold a joint meeting GrinUGR + Starter Granada entitled 'Gamification & Entrepreneurship' with Sergio Jimenez (@ gamkt) and Daniel Vecino (@ MrVecino). The venue will be the Auditorium of the Faculty of Science of Labour.<!--:--><!--:es-->celebraremos una reunión conjunta GrinUGR + Iniciador Granada titulada 'Gamificación & Emprendimiento' con Sergio Jiménez (@gamkt) y Daniel Vecino (@MrVecino). El lugar será el Salón de Actos de la Facultad de Ciencias de Trabajo.<!--:-->")?> 
										<div class="clearfix"></div>
										<span class="flota-derecha10"><button class="btn btn-small btn-inverse" type="button"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->")?></button></span>
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
										<span class="label label-inverse">14<span class="middle-green">MAR</span></span><span class="acc-titulo-evento pull-right"><?php _e("<!--:en-->“Entrepreneurs on the Internet: business accelerator, startups and ...<!--:--><!--:es-->“Emprendedores en Internet: aceleradoras de negocios, startups y ...<!--:-->")?></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">	
										<?php _e("<!--:en-->Anim pariatur cliche...<!--:--><!--:es-->Anim pariatur cliche...<!--:-->")?>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><button class="btn btn-small btn-inverse" type="button"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->")?></button></span>
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
										<span class="label label-inverse">25<span class="middle-green">FEB</span></span><span class="acc-titulo-evento pull-right"><?php _e("<!--:en-->PinkSlipParty in Granada: networking event for unemployed<!--:--><!--:es-->PinkSlipParty en Granada: evento de networking para desempleados<!--:-->")?></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">	
										<?php _e("<!--:en-->Anim pariatur cliche...<!--:--><!--:es-->Anim pariatur cliche...<!--:-->")?>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><button class="btn btn-small btn-inverse" type="button"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->")?></button></span>
									</div>
								</div>
							</div>
							
						</div>
						
					
					
					</div>	
					<span class="pull-right"><a href="#" class="btn btn-link"><?php _e("<!--:en-->Go to Events Calendar &raquo;<!--:--><!--:es-->Ir al Calendario de Eventos &raquo;<!--:-->")?></a></span>	
					</div>
					

					<!--PROXIMOS EVENTOS-->
					
					

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>