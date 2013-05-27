<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div class="jumbotron masthead jumbo-fold" style="display: block; height: auto; padding-top: 40px; padding-bottom: 40px;">
  <div class="container">
    <h1>GRIN<span class="black-title">UGR</span> <span class="jumbo-subtitle">
	<?php _e("<!--:en-->is a co-laboratory about digital culture in social sciences and human studies<!--:-->
	<!--:es-->es un co-laboratorio sobre cultura digital en ciencias sociales y humanidades<!--:-->"); ?></span></h1>    
	<p style="display:none;"><?php _e("<!--:en-->Welcome to Learning and Research Group on Internet proposed at the University of Granada with the aim of exchanging experiences, from an interdisciplinary perspective, peer institution and additionally other researchers and teachers beyond. The initiative has been welcomed with great enthusiasm shown interest having more than 100 members of our community. This is a challenge but also highlights the enormous potential at hand to generate innovative ideas in varied and diverse disciplines, both in research and in new ways of learning. <!--:-->
	<!--:es-->Bienvenido al Grupo de Aprendizaje e Investigación en Internet propuesto en la Universidad de Granada con el objetivo de intercambiar experiencias, desde una perspectiva interdisciplinar, entre compañeros de la institución y adicionalmente otros investigadores y profesores de fuera de ella. La iniciativa ha sido acogida con un gran entusiasmo habiendo mostrado su interés más de 100 miembros de nuestra comunidad. Esto supone un reto pero también subraya el enorme potencial que tenemos entre manos para generar ideas innovadoras en las más variadas y diversas disciplinas, tanto en investigación como en nuevas formas de aprendizaje.<!--:-->"); ?></p>
	
	<?php if(qtrans_getLanguage()=='en'){ ?>
		<a style="display:none;" href="/en/sobre-grinugr/" class="btn btn-inverse">Read more</a>
	<?php } ?>
	<?php if(qtrans_getLanguage()=='es') { ?>								
		<a style="display:none;" href="/sobre-grinugr/" class="btn btn-inverse">Saber más</a>
	<?php } ?>		
	
	
	<!--<p>Grupo de aprendizaje e investigación interdisciplinar que tiene por objetivo el intercambio de experiencias e ideas, vinculadas al empleo de Internet. ¿Quieres conocer los proyectos dentro de GrinUGR?</p>-->
   
      <!--<a onclick="" class="btn btn-inverse" href="#">Ver #GrinMAP</a>-->
	      <!--<div class="input-append">
				<form action="<?php echo home_url( '/' ); ?>" method="get" style="margin-bottom:0px;">
				<input class="span2 input-calltoaction" id="search" name="s" value="<?php the_search_query(); ?>" type="text">
				<div class="btn-group">
					<button class="btn btn-inverse">Buscar</button>
					
					<!--<button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
					Buscar en
					<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Proyectos</a></li>
						<li><a href="#">Centros</a></li>
						<li><a href="#">Investigadores</a></li>
						<li><a href="#">Blog</a></li>
						<li class="divider"></li>
						<li><a href="#">Todo GrinUGR</a></li>
					</ul>
				</div>
				</form>
			</div>-->
  
    <ul class="masthead-links">
	 
	<?php if(qtrans_getLanguage()=='en'){ ?>
		<li><a onclick="" href="/en/centros/">Centers</a></li>
		<li><a onclick="" href="/en/proyectos/">Projects</a></li>
		<li><a href="/en/investigadores/">Researchers</a></li>
	<?php } ?>
	<?php if(qtrans_getLanguage()=='es') { ?>								
		<li><a onclick="" href="/centros/">Centros</a></li>
		<li><a onclick="" href="/proyectos/">Proyectos</a></li>
		<li><a onclick="" href="/investigadores/">Investigadores</a></li>
									
	<?php } ?>		
	    <li><?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->"); ?> GrinUGR</li>
 
    </ul>
  </div>
</div>
<div class="bs-docs-social">
  <div class="container-fluid home-container">
  
	<div class="pull-right" style="margin: 8px 16px -20px 160px;"><?php get_search_form( $echo ); ?> </div>
	
         <?php //llamamos a los iconos de redes sociales
				
				echo get_social_icons('pull-right');
			   ?>
   </div>
  
  
    <!--<ul class="bs-docs-social-buttons">
      <li class="mensaje-btn"><span class="mensaje-band">Conoce el proyecto <strong>#GrinUGR</strong></span></li>
	  <li><span class="down-icon"></span></li>
	  
	  <li><a target="_blank" href="http://www.facebook.com/GrinUGR" title="Facebook" id="fb-btn" class="fb-btn"><span class="fb-icon"></span></a></li>
	  <li><a target="_blank" href="http://twitter.com/grinugr" title="Twitter" id="tw-btn" class="tw-btn"><span class="tw-icon"></span></a></li>
	  <li><a target="_blank" href="https://groups.google.com/forum/?hl=es&fromgroups#!forum/grinugr-cshd" title="Grupo de Google" id="gp-btn" class="gp-btn"><span class="gp-icon"></span></a></li>
	  <!--<li><a target="_blank" href="" id="in-btn" class="in-btn"><span class="in-icon"></span></a></li>
	  <li><a target="_blank" href="http://www.scoop.it/t/ciencias-sociales-y-humanidades-digitales-grinugr" title="Scoop.it" id="it-btn" class="it-btn"><span class="it-icon"></span></a></li>
	  <!--<li><a target="_blank" href="" id="yt-btn" class="yt-btn"><span class="yt-icon"></span></a></li>
	  <li><a target="_blank" href="" title="Flickr" id="flickr-btn" class="flickr-btn"><span class="flickr-icon"></span></a></li>
	  <li><a target="_blank" href="" title="Github" id="github-btn" class="github-btn"><span class="github-icon"></span></a></li>
	  <li><a target="_blank" href="" title="Mendeley" id="mendeley-btn" class="mendeley-btn"><span class="mendeley-icon"></span></a></li>
	  <li><a target="_blank" href="" title="Wikispaces"  id="wikispaces-btn" class="wikispaces-btn"><span class="wikispaces-icon"></span></a></li>
	  <li><a target="_blank" href="" title="Feed de Blog"  id="rss-btn" class="rss-btn"><span class="rss-icon"></span></a></li>
	  <li><a target="_blank" href="" title="Feed de Banco Digital"  id="rss-btn" class="rss-btn"><span class="rss2-icon"></span></a></li>
	  
	 
	 </ul>
	 -->
   </div>
</div>   
<div class="container-fluid home-container">			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8" role="main">

					<ul class="thumbnails">
					
					 <?php //bloque Para Categoría Novedades GRINUGR
					
					//si id de evento es distinto de cero, es que hay un evento chedkeado
				    $id_evento = get_last_event();
					 wp_reset_query();
					//echo 'debug '.$id_evento;
					
					$paged=1;
					
					$args=array(
						'posts_per_page' =>1,
						'paged' => $paged,
						'post__not_in'=>array($id_evento)
						);
					
					$the_query = new WP_Query( $args ); 
					//print_r($the_query);
					?>
					<?php while ( $the_query->have_posts() ) :
								$the_query->the_post();
								$categories=get_the_category();
																
						
						?>
							<li class="span6">
								<?php $cat_slug=get_cat_slug($categories[0]->term_id)?>
								<h3 class="titulo-destacado-categorias"><span class="red-square"></span><span><?php echo $categories[0]->name; ?></span><a class="ver-todas-lnk" href="<?=$cat_slug ?>"> <?php _e("<!--:en-->See all&raquo;<!--:--><!--:es-->Ver todo&raquo;<!--:-->"); ?></a></h3>
								
								<div class="thumbnail categoria-destacada">
									<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									
									<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																					  [1] => width
																					  [2] => height */
									?>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">	
										<div class="img-destacada" style="background-position:center;background-image: url('<?php echo $image[0]; ?>');"></div>
									</a>
									<?php endif; ?>
									
								  <div class="caption">
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="meta"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("<!--:en-->by <!--:--><!--:es-->por <!--:-->", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
									<?php the_excerpt(); ?>
									<p><a class="btn" href="<?php the_permalink(); ?>"><?php _e("<!--:en-->Read more<!--:--><!--:es-->Leer más<!--:-->"); ?></a></p>
								  </div>
								</div>
								
							  </li>
					  <?php endwhile; ?>
					  <?php wp_reset_query();?>
					  <?php 
					  //chequeamos la existencia de post_evento
					  if($id_evento!=0){
						
						$post_evento = get_post( $id_evento ); //obtenemos el post
						$evento_slug=get_cat_slug(12);
						/*echo "<pre>";
						print_r($post_evento);
						echo "</pre>";*/
						
						?>
						
						<li class="span6 well well-evento-destacado">
							
								<h3 class="titulo-destacado-categorias" ><i class="icon-calendar-big"></i><?php _e("<!--:en-->FEATURED EVENT<!--:--><!--:es-->EVENTO DESTACADO<!--:-->"); ?></span><a class="ver-todas-lnk" href="<?=$evento_slug?>"><?php _e("<!--:en-->See all&raquo;<!--:--><!--:es-->Ver todos&raquo;<!--:-->"); ?></a></h3>
								
								<div class="thumbnail categoria-destacada">
									<?php if (has_post_thumbnail( $post_evento->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_evento->ID ), 'single-post-thumbnail' ); ?>
									
									<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																					  [1] => width
																					  [2] => height */
									?>
									<a href="<?=$evento_slug?>/<?=$post_evento->post_name?>/" title="Ver evento">	
										<div class="img-destacada" style="background-position:center;background-image: url('<?php echo $image[0]; ?>');"></div>
									</a>
									<?php endif; ?>
									
								  <div class="caption">
									<h3><a href="<?=$evento_slug?>/<?=$post_evento->post_name?>/" rel="bookmark" title="Ver evento"><?=$post_evento->post_title?></a></h3>
									<p class="meta"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el<!--:-->", "bonestheme"); ?> <time datetime="<?=date("Y-m-j",strtotime($post_evento->post_date))?>" pubdate><?php echo date("d M, Y",strtotime($post_evento->post_date)); ?></time> <?php _e("<!--:en-->by<!--:--><!--:es-->por<!--:-->", "bonestheme"); ?> <?php $userid = $post_evento->post_author; $userdata = get_userdata($userid); echo '<a href="/author/'.$userdata->user_nicename.'/">'.$userdata->display_name.'</a>'; ?> <span class="amp"></span> <?php _e("<!--:en-->in <!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <a href="<?=$evento_slug?>"><?php _e("<!--:en-->Events<!--:--><!--:es-->Eventos<!--:-->"); ?></a></p>
									<p><?=$post_evento->post_excerpt?></p>
									<p><a class="btn btn-inverse" href="<?=$evento_slug?>/<?=$post_evento->post_name?>/"><?php _e("<!--:en-->Read more<!--:--><!--:es-->Leer más<!--:-->"); ?></a></p>
								  </div>
								</div>
								
						</li>
						
						<?php
						
						
					  }else{
					  
					  // si no es evento cargamos el post, modificando también el número de página
					  if($id_evento==0){
						
							$paged++;
							
						}
					  
					  $args=array(
						'posts_per_page' =>1,
						'paged' => $paged,
						'post__not_in'=>array($id_evento)
						);
					  $the_query = new WP_Query( $args ); //comprobamos si es un evento (categoría=12), si lo es, no mostramos con el loop
					//print_r($the_query);
					?>
					<?php while ( $the_query->have_posts() ) :
								$the_query->the_post();
								$categories=get_the_category();
								
								
						
						?>
							<li class="span6">
								<?php $cat_slug=get_cat_slug($categories[0]->term_id)?>
								<h3 class="titulo-destacado-categorias"><span class="red-square"></span><span><?php echo $categories[0]->name; ?></span><a class="ver-todas-lnk" href="<?=$cat_slug?>/"><?php _e("<!--:en-->See all&raquo;<!--:--><!--:es-->Ver todo&raquo;<!--:-->"); ?></a></h3>
								
								<div class="thumbnail categoria-destacada">
									<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									
									<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																					  [1] => width
																					  [2] => height */
									?>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">	
										<div class="img-destacada" style="background-position:center;background-image: url('<?php echo $image[0]; ?>');"></div>
									</a>
									<?php endif; ?>
									
								  <div class="caption">
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="meta"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("<!--:en-->by <!--:--><!--:es-->por <!--:-->", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
									<?php the_excerpt(); ?>
									<p><a class="btn" href="<?php the_permalink(); ?>"><?php _e("<!--:en-->Read more;<!--:--><!--:es-->Leer más<!--:-->"); ?></a></p>
								  </div>
								</div>
								
							  </li>
					  <?php endwhile; ?>
					   <?php wp_reset_query();?>
					  <?php
					  }
					  ?>
					 </ul>
				</div> 
				
				<div class="span4 widget-eventos">
					<h3 class="titulo-right-content"><i class="icon-calendar-big"></i><?php _e("<!--:en-->EVENTS PROGRAM<!--:--><!--:es-->PROGRAMA DE EVENTOS<!--:-->")?> <span class="green">GRIN</span>UGR
					<?php if(qtrans_getLanguage()=='en'){ ?>
						<a class="ver-todas-lnk" href="/en/eventos/">View Calendar&raquo;</a></h3>
					<?php } ?>
					<?php if(qtrans_getLanguage()=='es') { ?>								
						<a class="ver-todas-lnk" href="/eventos/">Ver Calendario&raquo;</a></h3>
					<?php } ?>	
					<div class="well">
						
						<div class="accordion acc-eventos" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">

										 <span class="label label-inverse">14-15<span class="middle-green">MAY</span></span><span class="acc-titulo-evento"><?php _e("<!--:en-->Hackaton Big Data & Data Journalism - ByM10<!--:--><!--:es-->Hackatón Big Data & Periodismo de Datos - ByM10<!--:-->")?></span>
									</a>
									<div class="clearfix"></div>
								</div>
								<div id="collapseOne" class="accordion-body collapse">
									<div class="accordion-inner">
										<?php _e("<!--:en-->Click here to view the program:<!--:--><!--:es-->Pincha aquí para ver el programa:<!--:-->")?> <a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html">http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html</a>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html" class="btn btn-small btn-inverse"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->")?></a></span>
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
										<span class="label label-inverse">16-17<span class="middle-green">MAY</span></span><span class="acc-titulo-evento"><?php _e("<!--:en-->X Blogs and Media Conference<!--:--><!--:es-->X Jornadas Blogs y Medios<!--:-->")?></span>
									</a>
									<div class="clearfix"></div>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">	
										<?php _e("<!--:en-->Click here to view the program:<!--:--><!--:es-->Pincha aquí para ver el programa:<!--:-->")?> <a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html">http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html</a>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><a href="http://blogsymediosgranada.blogspot.com.es/2013/05/programa-definitivo-de-la-decima.html" class="btn btn-small btn-inverse"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->")?></a></span>
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
										<span class="label label-inverse">21<span class="middle-green">MAY</span></span><span class="acc-titulo-evento"><?php _e("<!--:en-->GrinUGR with Pere Estupinya<!--:--><!--:es-->GrinUGR con Pere Estupinya<!--:-->")?></span>
									</a>
									<div class="clearfix"></div>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">	
										<?php _e("<!--:en-->Click here to view the program:<!--:--><!--:es-->Pincha aquí para ver el programa:<!--:-->")?> <a href="https://www.google.com/calendar/render?eid=czVtdWtnOGE4amNvZHI1aG44ajA5YXNmNmcgdjlyazExNWJ0ZXMzMG41N2VqanY4aDQ4MWNAZw&ctz=Europe/Madrid&pli=1&sf=true&output=xml">Detalles</a>
										<div class="clearfix"></div>
										<span class="flota-derecha10"><a class="btn btn-small btn-inverse" href="https://www.google.com/calendar/render?eid=czVtdWtnOGE4amNvZHI1aG44ajA5YXNmNmcgdjlyazExNWJ0ZXMzMG41N2VqanY4aDQ4MWNAZw&ctz=Europe/Madrid&pli=1&sf=true&output=xml"><?php _e("<!--:en-->+ Information<!--:--><!--:es-->+ Información<!--:-->")?></a></span>
									</div>
								</div>
							</div>
							
						</div>
						
					
					
					</div>	  
					<div class="clearfix"></div>
					<!--<span class="flota-derecha10"><button class="btn btn-info btn-large" type="button"><strong>Ver todos los eventos</strong></button></span>-->
					
					<h3 class="titulo-right-content"><i class="icon-envelop-big"></i><?php _e("<!--:en-->STAY<!--:--><!--:es-->MANTENTE<!--:-->")?> <span class="green">GR</span><?php _e("<!--:en-->INFORMED<!--:--><!--:es-->INFORMADO<!--:-->")?>
					<ul class="bs-docs-social-shares pull-right clearfix" style="margin-top:-10px">
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
								<input class="email-newsletter input-xlarge" name="email-newsletter" class="placeholder" id="inputIcon" type="text">
								 <a href="#" class="btn btn-inverse suscribir-newsletter"><?php _e("<!--:en-->Subscribe<!--:--><!--:es-->Suscribir<!--:-->")?></a>
							</div>	
							</div>	
							
							<label class="control-label-newsletter" for="inputIcon"><?php _e("<!--:en-->Receive blog news<!--:--><!--:es-->Recibir novedades del blog<!--:-->")?></label>
										
							<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input class="email-novedades input-xlarge" name="email-novedades" class="placeholder" id="inputIcon" type="text">
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
										<input type="checkbox" id="option-privacidad" value="option-privacidad" /> <?php _e("<!--:en-->I accept the<!--:--><!--:es-->Acepto la<!--:-->")?> <a href="/politicas-de-privacidad/"><?php _e("<!--:en-->privacy policy<!--:--><!--:es-->política de privacidad<!--:-->")?></a>
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
						
					
					
					
				</div><!--fin de span4 columna de eventos y proyectos propios-->
				
				<div class="clearfix"></div>
				<div class="row-fluid">
				<div class="span8">
					 <ul class="thumbnails">
					 
					  <?php //bloque Para Categoría Novedades Proyectos
					
					//capturamos la categoría que queremos mostrar
					//$set_category=9;
					//definimos query para categoría limitada a un post
					//$cat_slug=get_cat_slug($set_category);//obtenemos la categoría
					//$the_query = new WP_Query( 'posts_per_page=1&cat='.$set_category );
					$paged++;
					 $args=array(
						'posts_per_page' =>1,
						'paged' => $paged,
						'post__not_in'=>array($id_evento)
						);
					  $the_query = new WP_Query( $args );   //comprobamos si es un evento (categoría=12), si lo es, no mostramos con el loop
					//print_r($the_query);
					?>
					  <?php while ( $the_query->have_posts() ) :
								$the_query->the_post();
								$categories=get_the_category();
								
								
								//La categoría debe ser una, en caso de ser más de una solo mostramos la primera por cuestiones de diseño
								
						?>
								  <li class="span6">
								  <?php $cat_slug=get_cat_slug($categories[0]->term_id)?>
									<h3 class="titulo-destacado-categorias"><span class="red-square"></span><span><?php echo $categories[0]->name; ?></span><a class="ver-todas-lnk" href="<?=$cat_slug?>/"><?php _e("<!--:en-->See all&raquo;<!--:--><!--:es-->Ver todo&raquo;<!--:-->"); ?></a></h3>
									
									<div class="thumbnail categoria-destacada">
									
										<?php 
										
										if (has_post_thumbnail( $post->ID ) ): ?>
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
										
										<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																						  [1] => width
																						  [2] => height */
										?>
									  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">	
									  <div class="img-destacada" style="background-position:center;background-image: url('<?php echo $image[0]; ?>');"></div>
									  </a>
										<?php endif; ?>
										
									  <div class="caption">
										<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
										<p class="meta"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("<!--:en-->by <!--:--><!--:es-->por <!--:-->", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
										<?php the_excerpt(); ?>
										<p><a class="btn" href="<?php the_permalink(); ?>"><?php _e("<!--:en-->Read more<!--:--><!--:es-->Leer más <!--:-->"); ?></a></p>
									  </div>
									</div>
									
								  </li>
					  
					  <?php 
						
					  endwhile; ?>
					   <?php wp_reset_query();?>
					  
					  
					  
					  
					    <?php 
						
						//Último bloque con post
					$paged++;
					
					 $args=array(
						'posts_per_page' =>1,
						'paged' => $paged,
						'post__not_in'=>array($id_evento)
						);
					  $the_query = new WP_Query( $args );   //comprobamos si es un evento (categoría=12), si lo es, no mostramos con el loop
					//print_r($the_query);
					?>
					  <?php while ( $the_query->have_posts() ) :
								$the_query->the_post();
								$categories=get_the_category();
								
								
								//La categoría debe ser una, en caso de ser más de una solo mostramos la primera por cuestiones de diseño
								
						?>
								  <li class="span6">
									<?php $cat_slug=get_cat_slug($categories[0]->term_id)?>
								<h3 class="titulo-destacado-categorias"><span class="red-square"></span><span><?php echo $categories[0]->name; ?></span><a class="ver-todas-lnk" href="<?=$cat_slug ?>"> <?php _e("<!--:en-->See all&raquo;<!--:--><!--:es-->Ver todo&raquo;<!--:-->"); ?></a></h3>
									
									<div class="thumbnail categoria-destacada">
									
										<?php 
										
										if (has_post_thumbnail( $post->ID ) ): ?>
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
										
										<?php /*echo "DEBUG <br/>"; print_r($image);*/ /*     [0] => url
																						  [1] => width
																						  [2] => height */
										?>
									  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">	
									  <div class="img-destacada" style="background-position:center;background-image: url('<?php echo $image[0]; ?>');"></div>
									  </a>
										<?php endif; ?>
										
									  <div class="caption">
										<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
										<p class="meta"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("<!--:en-->by <!--:--><!--:es-->por <!--:-->", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("<!--:en-->in<!--:--><!--:es-->en<!--:-->", "bonestheme"); ?> <?php the_category(', '); ?>.</p>					
										<?php the_excerpt(); ?>
										<p><a class="btn" href="<?php the_permalink(); ?>"><?php _e("<!--:en-->Read more<!--:--><!--:es-->Leer más <!--:-->"); ?></a></p>
									  </div>
									</div>
									
								  </li>
					  
					  <?php 
						
					  endwhile; ?>
					   <?php wp_reset_query();?>
					  
					
					</ul>
					<div class="clearfix"></div>
					<div style="max-width: 400px; margin: 40px auto;" class="well">
						<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/blog/" class="btn btn-large btn-block">View Blog entries</a>
						<?php } ?>
						<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/blog/" class="btn btn-large btn-block">Ver entradas en el Blog </a>			
									
						<?php } ?>		
						
					</div>
					
					<div class="clearfix"></div>
				
					
				</div> <!-- end #main -->
				
				
				
				<div class="span4">
				
					<h3 class="titulo-right-content"><i class="icon-grinugr-net"></i><?php _e("<!--:en-->OWN PROJECTS<!--:--><!--:es-->PROYECTOS PROPIOS <!--:-->"); ?> <span class="green">GRIN</span>UGR
					<?php if(qtrans_getLanguage()=='en'){ ?>
						<a class="ver-todas-lnk" href="/en/proyectos_internos/">See all&raquo;</a></h3>
					<?php } ?>
					<?php if(qtrans_getLanguage()=='es') { ?>
						<a class="ver-todas-lnk" href="/proyectos_internos/">Ver todos&raquo;</a></h3>			
									
					<?php } ?>	
					
					<div class="well proyecto-propio">
						<?php //sacar un centro destacado que se indique por algún método
						$id_custom_post=get_destacados_grinugr('proyectos_internos',true);
						$custom_post = get_post( $id_custom_post );
						/*echo "<pre>";
						print_r($custom_post);
						echo "</pre>";*/
						
						?>
						<div class="media">
						   <?php
						   if (has_post_thumbnail( $custom_post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $custom_post->ID ), 'large' );
							
						   ?>
						 <?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos_internos/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/proyectos_internos/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
											
						<?php } ?>	 
						  
							<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
						  </a>
						  <?php endif; ?>
						  <div class="media-body">
							<h4 class="media-heading"><span class="muted">
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos_internos/" title="Ver todos los Proyectos"><strong>Own projects&raquo;</strong></a></span></h4>
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/proyectos_internos/" title="Ver todos los Proyectos"><strong><Proyectos propios&raquo;</strong></a></span></h4>		
											
							<?php } ?>	
							
							<h4 class="media-heading"><?=$custom_post->post_title?></h4>
							<p><?=$custom_post->post_excerpt?>
							<div class="clearfix"></div>
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos_internos/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Info Project</a></p>
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/proyectos_internos/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Info Proyecto</a></p>
											
							<?php } ?>	 
							
						  </div>
						  
						  
						</div>
						<div class="clearfix"></div>
					</div><!--fin del well de proyectos propios-->
					
				
				
				
					<h3 class="titulo-right-content"><i class="icon-birrete-big"></i><?php _e("<!--:en-->IN OUR<!--:--><!--:es-->EN NUESTRO <!--:-->"); ?> <span class="green"><?php _e("<!--:en-->DIGITAL<!--:--><!--:es-->BANCO <!--:-->");?></span> <?php _e("<!--:en-->BANK<!--:--><!--:es-->DIGITAL <!--:-->");?><!--<a class="ver-todas-lnk" href="#">Ver todo&raquo;</a>--></h3>
					
					<div class="well destacados-grinugr">
						
						<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/identificacion-de-proyectos-digitales/" class="btn btn-inverse btn-medium btn-block"><i class="icon-pencil icon-white"></i><strong>Add your event by filling out our form</strong></a>
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/identificacion-de-proyectos-digitales/" class="btn btn-inverse btn-medium btn-block"><i class="icon-pencil icon-white"></i><strong>Añade tu caso rellenando nuestro formulario </strong></a>
											
						<?php } ?>		
						
						<!--<hr/>-->
						<?php //sacar un centro destacado que se indique por algún método
						$id_custom_post=get_destacados_grinugr('centros',true);
						$custom_post = get_post( $id_custom_post );
						/*echo "<pre>";
						print_r($custom_post);
						echo "</pre>";*/
						
						?>
						<div class="media">
						   <?php
						   if (has_post_thumbnail( $custom_post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $custom_post->ID ), 'large' );
							
						   ?>
						   	<?php if(qtrans_getLanguage()=='en'){ ?>
								 <a href="/en/centros/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
								<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
								</a>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								 <a href="/centros/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
								<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
								</a>
											
							<?php } ?>	
						   
						 
						  <?php endif; ?>
						  <div class="media-body">
							<h4 class="media-heading"><span class="muted">
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/centros/" title="Ver todos los Centros">Centros&raquo; </a></span></h4>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/centros/" title="Ver todos los Centros">Centers&raquo;</a></span></h4>
											
							<?php } ?>	
							
							<h4 class="media-heading"><?=$custom_post->post_title?></h4>
							<p><?=$custom_post->post_excerpt?>
							<div class="clearfix"></div>
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/centros/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Center Info</a></p>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/centros/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Info Centro</a></p>
											
							<?php } ?>
							
						  </div>
						  		
					
						</div>
						
						 <!--<div class="flota-derecha10">
						  <span class="label label-important"><a href="#">GrinUGR</a></span>
						  <span class="label label-important"><a href="#">Fernando Trujillo</a></span>
						  <span class="label label-important"><a href="#">Esteban Romero</a></span>
						  <span class="label label-important"><a href="#">Design Thinking</a></span>	
						 </div>	-->	
						<div class="clearfix"></div>
						<!--<hr class="bs-docs-separator">-->
						
						<?php //sacar un investigador destacado que se indique por algún método
						
						$id_custom_post=get_destacados_grinugr('investigadores',true);
						$custom_post = get_post( $id_custom_post );
						/*echo "<pre>";
						print_r($destacado);
						echo "</pre>";*/
						
						?>
						<div class="media">
						  <?php
						   if (has_post_thumbnail( $custom_post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $custom_post->ID ), 'large' );
							
						   ?>
						 <?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/investigador/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
								<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
								</a>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/investigador/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
								<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
								</a>
											
							<?php } ?>
						 
						  <?php endif; ?>
						  <div class="media-body">
							<h4 class="media-heading"><span class="muted">
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/investigadores/" title="Ver todos los Investigadores">Researcher&raquo;</a></span></h4>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/investigadores/" title="Ver todos los Investigadores">Investigadores&raquo; </a></span></h4>
											
							<?php } ?>
							
							<h4 class="media-heading"><?=$custom_post->post_title?></h4>
							<p><?=$custom_post->post_excerpt?>
							<div class="clearfix"></div>
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/investigadores/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Researcher Info</a></p>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/investigadores/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Info Investigador </a></p>
											
							<?php } ?>
							
							
						  </div>
						  
						  	
						</div>
						
						<!--<div class="flota-derecha10">
							<span class="label label-important"><a href="#">Oxford Internet Centre</a></span>
						    <span class="label label-important"><a href="#">Design Thinking</a></span>	
						  </div> 	-->
						<div class="clearfix"></div>
						<!--<hr class="bs-docs-separator">-->
						
						<?php //sacar un proyecto destacado que se indique por algún método
						$id_custom_post=get_destacados_grinugr('proyectos',true);
						$custom_post = get_post( $id_custom_post );
						/*echo "<pre>";
						print_r($post_centro);
						echo "</pre>";*/
						
						?>
						<div class="media">
						   <?php
						   if (has_post_thumbnail( $custom_post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $custom_post->ID ), 'large' );
							
						   ?>
						   <?php if(qtrans_getLanguage()=='en'){ ?>
								 <a href="/en/proyecto-digital/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
							<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
						  </a>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								 <a href="/proyecto-digital/<?=$custom_post->post_name?>/" class="img-circle custom-post-thumb pull-left" style="background-image:url('<?php echo $image[0]; ?>');">
							<!--<img data-src="holder.js/120x120" class="img-circle" alt="120x120" style="width: 120px; height: 120px;" src="<?php echo $image[0]; ?>">-->
							
						  </a>
											
							<?php } ?>
						
						  <?php endif; ?>
						  <div class="media-body">
							<h4 class="media-heading"><span class="muted">
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos/" title="Ver todos los Proyectos">Projects&raquo;</a></span></h4>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/proyectos/" title="Ver todos los Proyectos">Proyectos&raquo; </a></span></h4>
											
							<?php } ?>
							
							<h4 class="media-heading"><?=$custom_post->post_title?></h4>
							<p><?=$custom_post->post_excerpt?>
							<div class="clearfix"></div>
							<?php if(qtrans_getLanguage()=='en'){ ?>
								<a href="/en/proyectos/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Project Info</a></p>
								
							<?php } ?>
							<?php if(qtrans_getLanguage()=='es') { ?>
								<a href="/proyectos/<?=$custom_post->post_name?>/" class="btn btn-small btn-inverse">Info Proyecto </a></p>>
											
							<?php } ?>
							
							
						  </div>
						  
						  
						</div>
						
						<!--<div class="flota-derecha10">
							<span class="label label-important"><a href="#">Oxford Internet Centre</a></span>
							<span class="label label-important"><a href="#">Cristobal Cobo</a></span>	
						   </div>-->
						  
						<div class="clearfix"></div>
						
						
						
					</div>
				</div>	
				</div><!--fin row fluid-->
				
				
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
		</div>  <!--end #container -->	
		
		<?php //Espacio para redes sociales ?>
		<div class="row-contenidos-sociales row-fluid">
			<div class="container-fluid home-container">
				<div class="span12">
				<div class="span9">
					<h3 class="titulo-contenido-social-content"><i class="icon-redo-big"></i><span class="colored">GRIN</span>UGR <?php _e("<!--:en-->CURATED CONTENT<!--:--><!--:es-->CURATED CONTENT <!--:-->");?></h3>
					
					
					<?php
					include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
					$feed = fetch_rss('http://www.scoop.it/t/ciencias-sociales-y-humanidades-digitales-grinugr/rss.xml'); // specify feed url
					
					
					$items = array_slice($feed->items, 0, 3); // specify first and last item
					
					?>
					
					<ul class="media-list curated-list">
						<?php if (!empty($items)) : ?>
						<?php foreach ($items as $item) : ?>
						<?php 
						/*echo "<pre>";
						print_r($item); 
						echo "</pre>";*/
						?>
						
						<li class="well media span4 curated-item">
							  
							  <div class="media-body curated-content-body">
								<h4 class="media-heading"><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h4>
								<h6 class="muted"><?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->");?><?php echo date('d/m/Y', strtotime($item['pubdate'])); ?>. <strong><?php _e("<!--:en-->Source<!--:--><!--:es-->Fuente<!--:-->");?> » </strong><a href="<?php echo $item['dc']['source']; ?>"><?php echo $item['source']; ?></a></h6>
								<div class="curated-description">
									<?php 
									$saltos_linea = array("<br/>","<br />","<br>");
									$description = str_replace($saltos_linea," ", $item['description']);
									echo $description; 
									?>
									<div class="clearfix"></div>
								</div>
							  </div>
							  <span class="pull-right">
							  <a href="http://www.scoop.it" class="scoopit-button" scit-position="none" scit-url="<?php echo $item['link']; ?>" >Scoop.it</a><script type="text/javascript" src="http://www.scoop.it/button/scit.js"></script>
							  </span>	 
						</li>
						
						<?php endforeach; ?>
						<?php endif; ?>
						<div class="clearfix"></div>
					</ul>
					<div class="clearfix"></div>
					<span class="pull-right space-bottom5"><a class="btn btn-link btn-large" href="http://www.scoop.it/t/ciencias-sociales-y-humanidades-digitales-grinugr"><?php _e("<!--:en-->View profile<!--:--><!--:es-->Ver perfil<!--:-->");?> Scoop.it</a></span>

					
				</div>
				
				<!--<div class="span3">
					<h3 class="titulo-contenido-social-content">PUBLICACIONES <span class="colored">GOOGLE PLUS</span></h3>
					<?php //feed de gplus ?>
					
					<?php
					include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
					$feed = fetch_rss('http://gplusrss.com/rss/feed/5ef56a8ef7165882ea0bc9f539f71567517794b8d001c'); // specify feed url
					$items = array_slice($feed->items, 0, 2); // specify first and last item
					?>

					<?php if (!empty($items)) : ?>
					<ul class="gplus-list well">
					<?php foreach ($items as $item) : ?>
					<?php 
						/*echo "<pre>";
						print_r($item); 
						echo "</pre>";*/
						?>

							<li><h4><a class="gplus-title" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h4>
								<?php if(strcmp($item['title'],$item['description'])!=0){/*si no son iguales saco el campo descripción*/ echo $item['description']; }?>
								
								<h6 class="muted">
								<?php
								$time_difference = current_time('timestamp') -  strtotime($item['published']);
								/*echo "DEBUG: <BR/>";
								echo $time_difference.'<br/>';*/
								if($time_difference <86400) {
									 echo 'Publicado hace '.human_time_diff( strtotime($item['pubdate']), current_time('timestamp'));
								}else{
									echo "Publicado el ".date('d/m/Y', strtotime($item['pubdate']));
								}
								?>
								</h6>
								
								<a class="link-publicacion" href="<?php echo $item['link']; ?>">Ver publicación &raquo;</a>
								<div class="clearfix"></div>
							</li>

					<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<div class="clearfix"></div>
					<span class="pull-right space-bottom5"><a class="btn btn-link btn-large" herf="">Ver perfil GPlus</a></span>
				</div>-->
				
				<div class="span3">
					<h3 class="titulo-contenido-social-content"><?php _e("<!--:en-->LASTS<!--:--><!--:es-->ÚLTIMOS <!--:-->");?> <span class="colored">TWEETS</span></h3>
					<?php
					include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
					$feed = fetch_rss('http://search.twitter.com/search.atom?q=from%3AGrinUGR'); // specify feed url
					$items = array_slice($feed->items, 0, 3); // specify first and last item
					?>

					<?php if (!empty($items)) : ?>
					<ul class="tweet-list well">
					<?php foreach ($items as $item) : ?>
					<?php 
						/*echo "<pre>";
						print_r($item); 
						echo "</pre>";*/
						?>

					<li><!--<a href="<?php echo $item['link']; ?>"></a>--><p><?php echo $item['atom_content']; ?></p>
						<h6 class="muted">
						<?php
						$time_difference = current_time('timestamp') -  strtotime($item['published']);
						/*echo "DEBUG: <BR/>";
						echo $time_difference.'<br/>';*/
						if($time_difference <86400) {?>
							<?php _e("<!--:en-->Posted ago<!--:--><!--:es-->Publicado hace <!--:-->");?>
							<?php echo human_time_diff( strtotime($item['published']), current_time('timestamp'));
						}else{?>
							<?php _e("<!--:en-->Posted in<!--:--><!--:es-->Publicado el <!--:-->");?>
							<?php echo date('d/m/Y', strtotime($item['published']));
						}
						?>
						<a class="pull-right" href="<?=$item['link']?>"><?php _e("<!--:en-->View in Twitter<!--:--><!--:es-->Ver en Twitter <!--:-->");?></a>
						</h6>
					</li>

					<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<div class="clearfix"></div>
					<span class="pull-right space-bottom5"><a class="btn btn-link btn-large" href="https://twitter.com/grinugr"><?php _e("<!--:en-->View profile Twitter<!--:--><!--:es-->Ver perfil Twitter <!--:-->");?></a></span>
				</div>
				
				</div> <!--fin span12-->
			</div> <!--Fin segundo container fluid-->
		</div><!--Fin row de redes sociales-->
		
<?php get_footer(); ?>