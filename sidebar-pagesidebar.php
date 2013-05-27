<?php global $post_id; ?>			
			<div id="pagesidebar" class="fluid-sidebar sidebar span4" role="complementary">
						
						
						<div style=" padding: 8px 0;" class="well">
							  <ul class="nav nav-list nav-sidebar-page">
								
								<li class="nav-header"><?php _e("<!--:en-->MORE IN #GRINUGR<!--:--><!--:es-->MÁS EN #GRINUGR<!--:-->");?></li>
															
								
								<?php
								$args=array(
									'menu'            => 'Menu Paginas',
									'container'       => '',
									'menu_class'      => 'menu',
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '%3$s',
									'depth'           => 0,
									'walker'          => new description_walker()
								);
								
								wp_nav_menu($args)
								
								?>
								
								<li class="divider"></li>
								
								<li class="nav-header"><?php _e("<!--:en-->iN OUR BLOG<!--:--><!--:es-->IN NUESTRO BLOG<!--:-->");?></li>
								<!--<li class="active"><a href="#">Home</a></li>-->
								 
								
								<?php
									$prueba=(get_the_category($post_id->ID));
									if($prueba){
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
											if (in_array($category->cat_ID, $cats)or $nombre==$category->name) {  //comprobamos si la categoría que toca en el bucle es alguna del post
												echo '<li class="active"><a href="/en/'.$category->slug.'/">'.$category->name.'</a></li>';
											}else{
												echo '<li><a href="/en/'.$category->slug.'/">'.$category->name.'</a></li>';
											}	
										}
									 } 
									if(qtrans_getLanguage()=='es') { 								
										foreach($categories as $category) { 
											//print_r($category);
											if (in_array($category->cat_ID, $cats)or $nombre==$category->name) {  //comprobamos si la categoría que toca en el bucle es alguna del post
												echo '<li class="active"><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}else{
												echo '<li><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}	
										}
									 } 
									
									
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
						
						
						<!--PRÓXIMOS EVENTOS-->
					<div class="widget-eventos widget-eventos-sidebar">
					<h3 class="titulo-right-content"><i class="icon-calendar-big"></i><?php _e("<!--:en-->SCHEDULE OF EVENTS<!--:--><!--:es-->PROGRAMA DE EVENTOS<!--:-->");?> <span class="green">GRIN</span>UGR</h3>
					<div class="well">
						
						<div class="accordion acc-eventos" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">

										 <span class="label label-inverse">14-15<span class="middle-green">MAY</span></span><span class="acc-titulo-evento"><?php _e("<!--:en-->Hackathon Big Data & Data Journalism - BYM10<!--:--><!--:es-->Hackatón Big Data & Periodismo de Datos - ByM10<!--:-->");?></span>
										 <div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseOne" class="accordion-body collapse">
									<div class="accordion-inner">
										<?php _e("<!--:en-->Click here to view the program<!--:--><!--:es-->Pincha aquí para ver el programa:<!--:-->");?> <a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html">http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html</a>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html" class="btn btn-small btn-inverse"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->");?></a></span>
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
										<span class="label label-inverse">16-17<span class="middle-green">MAY</span></span><span class="acc-titulo-evento"><?php _e("<!--:en-->X Blog and Media Conference<!--:--><!--:es-->X Jornadas Blogs y Medios<!--:-->");?></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">	
										<?php _e("<!--:en-->Click here to view the program<!--:--><!--:es-->Pincha aquí para ver el programa<!--:-->");?> <a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html">http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html</a>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html" class="btn btn-small btn-inverse"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->");?></a></span>
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
										<span class="label label-inverse">21<span class="middle-green">MAY</span></span><span class="acc-titulo-evento"><?php _e("<!--:en-->GrinUGR with Pere Estupinya<!--:--><!--:es-->GrinUGR con Pere Estupinya<!--:-->");?></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">	
										<?php _e("<!--:en-->For more details click here<!--:--><!--:es-->PPara más detalles pincha aqui<!--:-->");?> <a href="https://www.google.com/calendar/render?eid=czVtdWtnOGE4amNvZHI1aG44ajA5YXNmNmcgdjlyazExNWJ0ZXMzMG41N2VqanY4aDQ4MWNAZw&ctz=Europe/Madrid&pli=1&sf=true&output=xml"><?php _e("<!--:en-->Details<!--:--><!--:es-->Detalles<!--:-->");?></a>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><a class="btn btn-small btn-inverse" href="https://www.google.com/calendar/render?eid=czVtdWtnOGE4amNvZHI1aG44ajA5YXNmNmcgdjlyazExNWJ0ZXMzMG41N2VqanY4aDQ4MWNAZw&ctz=Europe/Madrid&pli=1&sf=true&output=xml"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->");?></a></span>
									</div>
								</div>
							</div>
							
						</div>
						
					
					
					</div>	
					<span class="pull-right">
					<?php if(qtrans_getLanguage()=='en'){ ?>
						<a href="/en/eventos/" class="btn btn-link">Go to Events Calendar &raquo;</a></span>	
					<?php } ?>
					<?php if(qtrans_getLanguage()=='es') { ?>								
						 <a href="/eventos/" class="btn btn-link">Ir al Calendario de Eventos &raquo;</a></span>	
					<?php } ?>	
					
					</div>
					<div class="clearfix"></div>
					<!--PROXIMOS EVENTOS-->
					
					
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>
						
					
					
					

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>