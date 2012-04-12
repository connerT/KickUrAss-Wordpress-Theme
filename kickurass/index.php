<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
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