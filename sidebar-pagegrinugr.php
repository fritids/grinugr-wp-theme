<?php global $post_id; ?>			
			<div id="pagesidebar" class="fluid-sidebar sidebar span4" role="complementary">
						
						
						<div style=" padding: 8px 0;" class="well">
							  <ul class="nav nav-list nav-sidebar-page">
								
								<li class="nav-header"><?php _e("<!--:en-->KNOW THE PROJECT<!--:--><!--:es-->CONOCE EL PROYECTO<!--:-->");?></li>
															
								
								<?php
								$args=array(
									'menu'            => 'Menu Navegacion SobreGrinUgr',
									'container'       => '',
									'menu_class'      => 'menu',
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '%3$s',
									'depth'           => 0,
									'walker'          => ''
								);
								
								wp_nav_menu($args);
								
								?>
								<li class="divider"></li>
								<?php if(qtrans_getLanguage()=='en'){ ?>
									<li class="nav-header">DIGITAL BANK</li>
									<li><a href="/en/centros/">Centers</a></li>
									<li><a href="/en/proyectos/">Digital Projects</a></li>
									<li><a href="/en/proyectos_internos/">Own Projects</a></li>
									<li><a href="/en/investigadores/">Researchers</a></li>
									<li class="divider"></li>
									<li><a href="/en/identificacion-de-proyectos-digitales/">Add your case</a></li>
								<?php } ?>
								<?php if(qtrans_getLanguage()=='es') { ?>
											<li class="nav-header">BANCO DIGITAL</li>
											<li><a href="/centros/">Centros</a></li>
											<li><a href="/proyectos/">Proyectos Digitales</a></li>
											<li><a href="/proyectos_internos/">Proyectos Propios</a></li>
											<li><a href="/investigadores/">Investigadores</a></li>
											<li class="divider"></li>
											<li><a href="/identificacion-de-proyectos-digitales/">Añade tu caso</a></li>
									
								<?php } ?>									
								<li class="divider"></li>
								
								<li class="nav-header"><?php _e("<!--:en-->IN OUR BLOG<!--:--><!--:es-->EN NUESTRO BLOG<!--:-->");?></li>
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
									foreach($categories as $category) { 
											//print_r($category);
											if (in_array($category->cat_ID, $cats)or $nombre==$category->name) {  //comprobamos si la categoría que toca en el bucle es alguna del post
												echo '<li class="active"><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}else{
												echo '<li><a href="/'.$category->slug.'/">'.$category->name.'</a></li>';
											}	
									}
								?>
								
								<li class="divider"></li>
								<?php if(qtrans_getLanguage()=='en') {?>
									<li><a href="/en/contacto/">Contact</a></li>
								<?php } ?>
								<?php if(qtrans_getLanguage()=='es') {?>
									<li><a href="/contacto/">Contacto</a></li>
								<?php } ?>
								
							  </ul>
						</div>
						
						
					
					
					
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php //dynamic_sidebar( 'sidebar1' ); ?>
						
					 
					
					

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>