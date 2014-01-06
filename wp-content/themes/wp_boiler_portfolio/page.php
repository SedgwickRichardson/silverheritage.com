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
<div class="container">

  <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Silver Heritage</h1>
        <h2>Asia's Regional Gaming Operator</h2>
      </div>
      <nav class="collapse navbar-collapse" role="navigation">
		  <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>   
      </nav>
    </div>
   
    <!-- Callout -->
    <div class="callout" id="roulette">
      
    </div>
    <!-- /Callout -->

  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>About</h3>
            <p class="lead">SHL is fast becoming a major regional gaming operations business in Asia-Pacific, with equity ownership in casino licenses and licensed operations, and significant scale projects in Nepal (Indian gaming market), Vietnam (International gaming market) and The Philippines (Domestic gaming market). The Company also operates more than 1,000 electronic table gaming and slot machines across the region, on long-term revenue share contracts with licensed casinos. </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
    
    
    <!-- Callout -->
    <div class="callout" id="casino">
      
    </div>
    <!-- /Callout -->
        
  
    <!-- Intro -->
    <div id="operations-projects" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Operations & Projects</h3>
            <p class="lead">Silver Heritage are developing some of the most exciting gaming projects globally today. Developed with first mover advantage and sustainable competitive market advantages the company is perfectly poised for rapid expansion in the world's largest gaming market: Asia Pacific. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2">
            <h4>India</h4>
            <strong>Tiger Palace Resort & Casino</strong>
            <img src="assets/img/silverheritage-india-tigerresort.jpg" alt="silverheritage-india-tigerresort" width="293" height="184" />
          </div>
          <div class="col-md-4">
            <h4>India</h4>
            <strong>Tiger Palace Resort & Casino</strong>
            <img src="assets/img/silverheritage-india-tigerresort.jpg" alt="silverheritage-india-tigerresort" width="293" height="184" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2">
            <h4>India</h4>
            <strong>Tiger Palace Resort & Casino</strong>
            <img src="assets/img/silverheritage-india-tigerresort.jpg" alt="silverheritage-india-tigerresort" width="293" height="184" />
          </div>
          <div class="col-md-4">
            <h4>India</h4>
            <strong>Tiger Palace Resort & Casino</strong>
            <img src="assets/img/silverheritage-india-tigerresort.jpg" alt="silverheritage-india-tigerresort" width="293" height="184" />
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->  
  
    <!-- Callout -->
    <div class="callout" id="cheers">
      
    </div>
    <!-- /Callout -->  
  
   <!-- Intro -->
    <div id="team" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Team</h3>
            <p class="lead">Silver Heritage has built its reputation as one of the region's most respected gaming groups, by careful management from a world-class Board of Directors and a highly experienced Asia based casino professionals. </p>
            <p class="lead"><strong>Mike Bolsover</strong>
<i>Chief Executive Officer</i>
Mike was born in Hong Kong and educated in England and the United States before returning to Asia to live in 2001. He has more than 15 years experience in the Asian gaming industry, initially establishing new markets for online operator Victor Chandler in South Korea and Malaysia before co-founding Silver Heritage with Tim Shepherd in 2004. Mike directs the corporate strategy and operations of the business from Hong Kong and is a member of the Board of Directors. Mike has a BBA in Finance and Marketing from the Roberto C. Goizueta Business School, at Emory University in Atlanta GA, USA.</p>
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
            <p class="lead">Silver Heritage has built its reputation as one of the region's most respected gaming groups, by careful management from a world-class Board of Directors and a highly experienced Asia based casino professionals. </p>
            <p class="lead"><strong>Mike Bolsover</strong>
<i>Chief Executive Officer</i>
Mike was born in Hong Kong and educated in England and the United States before returning to Asia to live in 2001. He has more than 15 years experience in the Asian gaming industry, initially establishing new markets for online operator Victor Chandler in South Korea and Malaysia before co-founding Silver Heritage with Tim Shepherd in 2004. Mike directs the corporate strategy and operations of the business from Hong Kong and is a member of the Board of Directors. Mike has a BBA in Finance and Marketing from the Roberto C. Goizueta Business School, at Emory University in Atlanta GA, USA.</p>
          </div>
           
        </div>
      </div>
    </div>
    <!-- /Intro -->   
   
   
</div><!-- end .container -->
    
     
<?php get_footer(); ?>
