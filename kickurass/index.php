<?php

/**
 */

get_header(); the_post(); 
?>


			<a href="javascript:location.reload(true)">
				<img src="<?php echo(get_bloginfo('template_url')); ?>/images/arrow_left.png" alt="left arrow" id="left_arrow" />
			</a>
			<div id="container">
				<div id="phrases">
					<h2><?php echo $images[1][$randImage]; ?><h3>
				</div>
				<div id="imageHolder">
					<img src="<?php echo $images[0][$randImage]; ?>" alt="Kick Ass Image" />
				</div>
			</div>
			<a href="javascript:location.reload(true)">
				<img src="<?php echo(get_bloginfo('template_url')); ?>/images/arrow_right.png" alt="right arrow" id="right_arrow" />
			</a>
		</div>

	</body>
</html>