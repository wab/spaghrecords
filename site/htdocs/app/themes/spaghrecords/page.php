<?php
if ( is_home() ) :
	get_header( 'home' );
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header();
endif;
?>
        <!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header class="page-header text-right">
	<h1><?php the_title(); ?></h1>
</header>
    <?php the_content(); ?>
<!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>
 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>
 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php get_footer(); ?>