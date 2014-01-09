<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
  
	<!-- Footer -->
	<footer>
	  <div class="container">
	    <div class="row">
	      <div class="col-md-6 col-md-offset-3 text-center">
	        <div class="top-scroll">
	          <a href="#toptop" class="tooltips"  data-placement="bottom" title="back to top"><i class="fa fa-arrow-up scroll fa-2x"></i></a>
	        </div>
	        <hr>
	        <p>Copyright &copy; Silver Heritage Limited 2014</p>
	      </div>
	    </div>
	  </div>
	</footer>
	<!-- /Footer -->
  <script type=text/javascript>
  var mobile = false;
  <? if (is_mobile()) { ?>
    mobile = true;    
  <? } ?>
  </script>
  <?php wp_footer(); ?>
     
  </body>
</html>
