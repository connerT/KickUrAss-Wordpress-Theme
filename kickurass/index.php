<?php

/**
 */

get_header(); the_post(); 
?>


			<div id="container">
				<div id="phrases">
					<h2><?php echo $images[1][$randImage]; ?><h3>
				</div>
				<div id="imageHolder">
					<img src="<?php echo $images[0][$randImage]; ?>" alt="Kick Ass Image" />
				</div>
			</div>

	</body>
</html>