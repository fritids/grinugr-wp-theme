<?php
/*
Template Name: Listado de autores
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
							
							<h2>List of authors:</h2>
							<ul>
								<?php wp_list_authors(); ?>
							</ul>
							
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