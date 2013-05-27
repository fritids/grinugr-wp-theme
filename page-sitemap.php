<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
<div id="overview" class="jumbotron subhead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
	
	<?php 
		//cogemos el campo subtítulo
		
		$subtitulo=rwmb_meta( 'grinugr_subtitulo' , 'type=text' );
	?>
    <p class="lead"><?=$subtitulo?></p>
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
			<!--<div id="content" class="clearfix row-fluid">-->
			
				<div id="main" class="span8 blog-col-izquierda clearfix" role="main">
				<h2>Entradas del blog</h2>
					<?php 
				$meses=array_reverse(array("Enero"=>1,"Febrero"=>2,"Marzo"=>3,"Abril"=>4,"Mayo"=>5,"Junio"=>6,"Julio"=>7,"Agosto"=>8,"Septiembre"=>9,"Octubre"=>10,"Noviembre"=>11,"Diciembre"=>12));
				//echo date("Y");
				$year_tope=2011;
				?>
				
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
						'monthnum' =>$num_mes
					
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
					
					<h2>Entidades</h2>
					<hr/>

					
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
							
							<div id="custom-bg" style="width:96%; max-height:400px; height:<?=$image[2]?>px; background-position:top;background-image: url('<?php echo $image[0]; ?>'); background-size:cover;">

							</div>
							<?php endif; ?>
						
							<?php //the_post_thumbnail( 'wpbs-featured' ); ?>
							
							<!--<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>-->
							
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
					
					<?php //comments_template('',true); ?>
					
					
			
				</div> <!-- end #main -->
    <?php endwhile; ?>
	<?php endif; ?>
				<?php get_sidebar('pagesidebar'); // sidebar 2 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>