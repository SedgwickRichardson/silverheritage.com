<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="search-page" role="main" class="container">
    <div class="row" id="innerpage-content">
    <div class="span9">

		<?php if ( have_posts() ) : ?>

      <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'hkust' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			  <?php 
			    $special_types = array(
            'curriculum' => 'program/curriculum',
            'location' => 'overview/global-classroom', 
            'faculty' => 'program/faculty-lecturers#faculty',
            'event' => 'events',
            'faq' => 'faq',
            'business-leaders' => 'program/faculty-lecturers#business-leaders'
          );
			    if(array_key_exists($post->post_type, $special_types)) {
              $permalink = '/' . $special_types[$post->post_type] . '/';
          } else {
            $permalink = get_permalink($post->ID);
          } 
			  ?>
			  <article id="post-<?php print $post->ID; ?>" class="media">
			    <h4><a href="<?php print $permalink;?>"><?php print $post->post_title; ?></a></h4>
				  <?php print $post->post_excerpt;?>
				</article>
			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'hkust' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'hkust' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>
	</div><!-- .span9 -->
      <div class="span3 hidden-phone">
          <section id="sidebar">
            <?php dynamic_sidebar("default-sidebar"); ?>
          </section>
      </div>
  </div> <!-- .row -->
<?php get_footer(); ?>