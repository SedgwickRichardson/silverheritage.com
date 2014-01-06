<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); 
?>
<div id="main-content" role="main" class="container home-content">
  <div class="row">
    <div class="span9">
      <?php while ( have_posts() ) : the_post(); ?>
        
        <div class="single-content">
	        <h1><?php the_title(); ?></h1>
	        <figure class="hero"><?php the_post_thumbnail("hero"); ?></figure>

          <?php the_content();?>
        </div>
      <?php endwhile; ?>
    </div>
    
	  <div class="span3">
	      <section id="sidebar">
	        <?php dynamic_sidebar("default-sidebar"); ?>
	      </section>
	  </div>
  </div>

</div>

<?php get_footer(); ?>