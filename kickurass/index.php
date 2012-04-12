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
			<div id="phrase2">This will be replaced</div>
			<div id="container">
				<div id="phrases">
					<h2 id="phrase"><?php echo $randPhrase; ?></h2>
				</div> <!--/phrases-->
				<div id="imageHolder">
					<img src="<?php echo $randImage ?>" alt="Kick Ass Image" />
				</div> <!--/imageHolder-->
				<div id="kickUrAss">
					<h2 id="assKicking">...or I will kick your ass!</h2>
				</div> <!--/kickUrAss-->
				<input type="text" id="imageSource" readonly="readonly" onclick="SelectAll('imageSource');" value="Source of Image"/>
			</div> <!--/container-->

<?php get_footer(); ?>
		
