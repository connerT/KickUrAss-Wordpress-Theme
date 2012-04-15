<?php

/**
 * The main template file for kickurass.org.
 */

get_header(); the_post(); 

?>
	<div class="navBox">
	
	<div class="navNext">
	<a id="prev" href="#">
	<img src="<?php echo(get_bloginfo('template_url')); ?>/images/arrow_left.png" alt="left arrow" id="left_arrow" />
	</a>
	</div>
	
	<div class="main">	
	
		<?php for ($i=0; $i<$imageCount; $i++) { ?>

			<div id="container">

				<div id="phrases">
					<h2><?php echo $images[1][$i]; ?><h2>
				</div>
				<div id="imageHolder">
					<img src="<?php echo $images[0][$i]; ?>" alt="Kick Ass Image" />
				</div>
				<div id="kickUrAss">
					<h2 id="assKicking">...or I will kick your ass!</h2>
				</div> <!--/kickUrAss-->

			</div>

		<?php } ?>
	
	</div>	<!--end main div-->
	

	<div class="navPrev">
	<a id="next" href="#">
	<img src="<?php echo(get_bloginfo('template_url')); ?>/images/arrow_right.png" alt="right arrow" id="right_arrow" />
	</a>
	</div>

		
	</div> <!--end navBox-->
	

		

			
</body>
</html>