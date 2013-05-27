<?php get_header(); ?>
	<div id="overview" class="jumbotron subhead">
  <div class="container">
    <h1><?php/* _e("Entradas por:", "bonestheme");*/ ?>
						<?php 
							// If google profile field is filled out on author profile, link the author's page to their google+ profile page
							$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
							$google_profile = get_the_author_meta( 'google_profile', $curauth->ID );
							if ( $google_profile ) {
								echo '<a href="' . esc_url( $google_profile ) . '" rel="me">' . $curauth->display_name . '</a>'; 
						?>
						<?php 
							} else {
								echo get_the_author_meta('display_name', $curauth->ID);
							}
						?></h1>
    <p class="lead" style="font-size:15px;"><?php echo $curauth->description;?></p>
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
    
		<div class="pull-right" style="margin: 8px 16px -20px 40px;"><?php get_search_form( $echo ); ?> </div>
	
         <?php //llamamos a los iconos de redes sociales
				
				echo get_social_icons('pull-right');
			   ?>
		</div>
   </div>
</div> 
	<div class="container-fluid">
			
				<div id="main" class="span8 blog-col-izquierda clearfix" role="main">
				
				<?php 
				$meses=array_reverse(array("Enero"=>1,"Febrero"=>2,"Marzo"=>3,"Abril"=>4,"Mayo"=>5,"Junio"=>6,"Julio"=>7,"Agosto"=>8,"Septiembre"=>9,"Octubre"=>10,"Noviembre"=>11,"Diciembre"=>12));
				//echo date("Y");
				$year_tope=2011;
				?>
				<h2>Entradas</h2>
				<?php
				for($i=date("Y");$i>=$year_tope;$i--){
				?>
				<hr/>
				<h3 class="pull-right muted"><?=$i?></h3>
				<?php
				foreach($meses as $nombre_mes => $num_mes ){ 
				if(date("n")>=$num_mes){
				?>
				
				<h3><?=$nombre_mes;?> <?=$i?></h3>
				<article>
				<?php $args=array(
						'year' => 2013,
						'monthnum' =>$num_mes,
						'author' => $curauth->ID
						);
					  $the_query = new WP_Query( $args ); ?>
					
					<?php  while ($the_query->have_posts()) : $the_query->the_post(); ?> 
					
						<section class="post_content clearfix" itemprop="articleBody">
						
						
						<h4><i class="icon-pencil"></i> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>	
						<p class="meta pull-left"><?php _e("Publicado el", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j M, Y'); ?></time> <?php _e("por", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"></span> <?php _e("en", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						</section>
					<?php endwhile; ?>
					
					</article>
					
						<?php wp_reset_query(); wp_reset_postdata();
					}	
					}//fin for meses
					?>
					
					<?php
					}//fin for años
					?>
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>