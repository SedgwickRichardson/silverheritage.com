<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header();
?> 
    <!-- Callout -->
    <div class="callout" id="roulette" data-stellar-background-ratio="0.5" data-stellar-horizontal-offset="50">
      
    </div>
    <!-- /Callout -->

  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <?
            $id = get_ID_by_slug("about");
            $post = get_post($id);
            ?>
            <h3><?=$post->post_title?></h3>
            <p class="lead"><?=$post->post_content?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
    
    
    <!-- Callout -->
    <div class="callout" id="casino" data-stellar-background-ratio="0.5" data-stellar-horizontal-offset="50" data-stellar-vertical-offset="-100">
      
    </div>
    <!-- /Callout -->
        
  
    <!-- Intro -->
    <div id="operations-projects" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <?
            $id = get_ID_by_slug("operations-projects");
            $post = get_post($id);
            ?>
            <h3><?=$post->post_title?></h3>
            <p class="lead"><?=$post->post_content?></p>
          </div>
        </div>
       
        <?
					$args = array( 'numberposts' => -1, 'post_type' => 'project', 'post_status' => 'publish', 'order' => 'ASC', 'orderby' => 'menu_order');
					$results = get_posts( $args );
					$i = 0;
					foreach( $results as $result ) {
						$thumb = wp_get_attachment_image_src ( get_post_meta($result->ID, 'thumbnail_image', true), "full");
						if ($i == 0 || $i == 2) :
						  print '<div class="row">';
						endif;
					?>
              <div class="col-md-4 col-sm-6 project_link <? if ($i == 0 || $i == 2) : ?>col-md-offset-2<? endif; ?>" id="<?=$result->ID?>">
                <h4><?=get_post_meta($result->ID, 'country', true)?></h4>
                <strong><?=$result->post_title?></strong>
                <div class="image-wrap">
                  <? if ($thumb[0]) : ?>
                    <img src="<?=$thumb[0]?>" width="<?=$thumb[1]?>" height="<?=$thumb[2]?>" />
                  <? else : ?>
                    <img src="http://placehold.it/500x313">
                  <? endif; ?>
                  <span class="more"><p>View more details<p></span>
                </div>
              </div>
          <?
  					if ($i == 1 || $i == 3) :
  					  print '</div>';
  					endif;

            $i++;
          }
          ?>
        
     
      </div>
    </div>
    <!-- /Intro -->  
  
    <!-- Callout -->
    <div class="callout" id="cheers" data-stellar-background-ratio="0.5" data-stellar-horizontal-offset="50" data-stellar-vertical-offset="-300">
      
    </div>
    <!-- /Callout -->  
  
   <!-- Intro -->
    <div id="team" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <?
            $id = get_ID_by_slug("team");
            $post = get_post($id);
            ?>
            <h3><?=$post->post_title?></h3>
            <p class="lead"><?=$post->post_content?></p>

            <? if (!is_mobile()) : ?>
              <section class="team-slider">
                <?
  								$args = array( 'numberposts' => -1, 'post_type' => 'team', 'post_status' => 'publish', 'order' => 'ASC', 'orderby' => 'menu_order');
  								$results = get_posts( $args );
  								foreach( $results as $result ) {
  								?>
    								<div class="slide">
                      <p class="lead">
                        <strong><?=$result->post_title?></strong>
                        <em><?=get_post_meta($result->ID, 'title', true)?></em>
                        <?=$result->post_content?>
                      </p>
                    </div>
  								<?
  								}
  								?>
              </section>
            <? else : ?>
              <div class="panel-group" id="accordion">
                <?
								$args = array( 'numberposts' => -1, 'post_type' => 'team', 'post_status' => 'publish', 'order' => 'ASC', 'orderby' => 'menu_order');
								$results = get_posts( $args );
								$i = 0;
								foreach( $results as $result ) {
								?>
              
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="expand-link" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>">
                          <span class="info">
                            <strong><?=$result->post_title?></strong>
                            <em><?=get_post_meta($result->ID, 'title', true)?></em>
                          </span>
                          <i class="fa fa-caret-down fa-2x"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse<?=$i?>" class="panel-collapse collapse">
                      <div class="panel-body">
                       <p><?=$result->post_content?></p>
                      </div>
                    </div>
                  </div>
                
                <? 
                $i++;
                } 
                ?>
                
            <? endif; ?>
              </div>
            
            
            
          </div>
           
        </div>
      </div>
    </div>
    <!-- /Intro -->
    
   <!-- Intro -->
    <div id="contact" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Contact</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-2">
            <p class="lead">
              <strong>General Info:</strong>
              <a href="mailto:info@silverheritagegroup.com">info@silverheritagegroup.com</a>
              <em>Tel: <a class="tellink" href="tel:+85221101684">(852) 2110 1684</a></em>
              <em>Fax: (852) 8169 2896</em>
            </p>
            <p class="lead">
              <strong>Sales:</strong>
              <a href="mailto:info@silverheritagegroup.com">sales@silverheritagegroup.com</a>
              <em>Tel: <a class="tellink" href="tel:+85221101684">(852) 2110 1684</a></em>
              <em>Fax: (852) 8169 2896</em>
            </p>
          </div>
          <div class="col-md-5">
          <?=do_shortcode('[contact-form-7 id="27" title="Contact form 1"]');?>
          
          </div>
        </div>
        
      </div>
    </div>
    <!-- /Intro -->   
   
<section id="lightbox">
  <div class="lightbox-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 lightbox-content text-center">
          <i class="fa fa-times-circle fa-2x close-top"></i>
          <div id="ajax">
          </div>
           <i class="fa fa-times-circle fa-2x close-bottom visible-xs"></i>
        </div>
      </div>
    </div>
  </div>
</section>  

    
     
<?php get_footer(); ?>
