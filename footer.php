			<div class="bs-docs-social footer-position">
			  <div class="container">
			   
			   <?php //llamamos a los iconos de redes sociales
				
				//echo get_social_icons();
				
			   ?>
			   <ul class="bs-docs-social-buttons">
			   <!--<li class="mensaje-btn"><span class="mensaje-band">Conoce el proyecto <strong>#GrinUGR</strong></span></li>
				  <li><span class="down-icon"></span></li>-->
				  <li><a target="_blank" href="http://www.facebook.com/GrinUGR" title="Facebook" id="fb-btn" class="fb-btn"><span class="fb-icon"></span></a></li>
				  <li><a target="_blank" href="http://twitter.com/grinugr" title="Twitter" id="tw-btn" class="tw-btn"><span class="tw-icon"></span></a></li>
				  <li><a target="_blank" href="https://groups.google.com/forum/?hl=es&fromgroups#!forum/grinugr-cshd" title="Grupo de Google" id="gp-btn" class="gp-btn"><span class="gp-icon"></span></a></li>
				  <!--<li><a target="_blank" href="" id="in-btn" class="in-btn"><span class="in-icon"></span></a></li>-->
				  <li><a target="_blank" href="http://www.scoop.it/t/ciencias-sociales-y-humanidades-digitales-grinugr" title="Scoop.it" id="it-btn" class="it-btn"><span class="it-icon"></span></a></li>
				   <li><a target="_blank" href="http://www.flickr.com/groups/grinugr" title="Flickr" id="flickr-btn" class="flickr-btn"><span class="flickr-icon"></span></a></li>
				  <!--<li><a target="_blank" href="" title="Github" id="github-btn" class="github-btn"><span class="github-icon"></span></a></li>-->
				  <li><a target="_blank" href="http://www.mendeley.com/groups/3230031/ciencias-sociales-y-humanidades-digitales-grinugr/" title="Mendeley" id="mendeley-btn" class="mendeley-btn"><span class="mendeley-icon"></span></a></li>
				  <li><a target="_blank" href="http://grinugr.wikispaces.com/" title="Wikispaces"  id="wikispaces-btn" class="wikispaces-btn"><span class="wikispaces-icon"></span></a></li>
				  <li><a target="_blank" href="" title="Feed de Blog"  id="rss-btn" class="rss-btn"><span class="rss-icon"></span></a></li>
				  <li><a target="_blank" href="" title="Feed de Banco Digital"  id="rss-btn" class="rss-btn"><span class="rss2-icon"></span></a></li>
				</ul>  
			   </div>
			</div> 
			<footer role="contentinfo">
				<div class="container-fluid <?php /*if (is_front_page() ){ */?>home-container<?php /*} */?>">
					<div id="inner-footer" class="clearfix">
					  
					  <div id="widget-footer" class="clearfix row-fluid">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
						<?php endif; ?>
						
						<div id="nav_menu-4" class="widget span3 widget_nav_menu">
							<h4 class="widgettitle"><?php _e("<!--:en-->MORE INFORMATION<!--:--><!--:es-->MÁS INFORMACIÓN<!--:-->");?></h4>
								<?php bones_footer_links('Mas info Menu'); ?>
								
						</div>
						<div id="nav_menu-2" class="widget span3 widget_nav_menu">
							<h4 class="widgettitle"> <?php _e("<!--:en-->PROJECT #GRINUGR<!--:--><!--:es-->PROYECTO #GRINUGR<!--:-->");?></h4>							
							<?php bones_footer_links('Menu Widget Proyecto'); ?>
						</div>
						
						
						<!--<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
						<?php endif; ?>-->
						
						<?php 
							// Widget Flickr
							include_once(ABSPATH . WPINC . '/class-simplepie.php');// path to include script
							include_once( ABSPATH . WPINC . '/feed.php' );
							$feed = fetch_feed("http://api.flickr.com/services/feeds/photos_public.gne?id=81796684@N00&tags=grinugr&lang=es-us&format=rss_200"); // specify feed url
							
							?>
	<div class="widget span3">
		<h4 class="widgettitle"><?php _e("<!--:en-->FLICKR GROUP<!--:--><!--:es-->GRUPO DE FLICKR<!--:-->") ?></h4>
		<div id ="photo">			
		<?php foreach ($feed->get_items(0,12) as $item): ?>  
        
            <?php  
                if ($enclosure = $item->get_enclosure()) {  
                    $img = image_from_description($item->get_description());  
                    $thumb_url = select_image($img, 0);  
                    echo '<a class="pull-left" href="'. $item->get_link() .'"><img class="media-object" id="photo_' . $i . '" src="' . $thumb_url . '" /></a>'."\n";  
					
                }  
            ?>  
            
		<?php endforeach; ?>  
		</div>						
						
						
						
						
						
		<div class="clearfix"></div>				
		<a href="http://www.flickr.com/groups/grinugr" class="btn btn-link btn-inverse pull-right" style="margin-right:15px;"><?php _e("<!--:en-->See on Flickr<!--:--><!--:es-->Ver en Flickr<!--:-->") ?></a>
	</div>
	
	<?php /*if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
						<?php endif; */?>
						<div class="clearfix"></div>		
						<hr/>
						<nav class="clearfix">
							<?php //bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
							<ul class="menu" id="menu-footer-legal">
								<li class="menu-item"><a href="/sitemap/">Sitemap</a></li>
								<li class="menu-item"><a href="/politicas-de-privacidad/"><?php _e("<!--:en-->Privacy Policy<!--:--><!--:es-->Políticas de privacidad<!--:-->") ?></a></li>
								<li class="menu-item"><a href="/condiciones-de-uso/"><?php _e("<!--:en-->Terms of use<!--:--><!--:es-->Condiciones de uso<!--:-->") ?></a></li>
								
								
							</ul>
						</nav>
						
						
				
						
						
					</div> <!-- end #inner-footer -->
				</div>
			</footer> <!-- end footer -->
		<?php if (!is_front_page() ){  //si2?>
				</div>  <!--end #container -->
		<?php } ?>	
	
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>