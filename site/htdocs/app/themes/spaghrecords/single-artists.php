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

<article class="artist">
	<header class="page-header text-right">
        <h1><?php the_title(); ?></h1>
        <h2><?php echo get_the_term_list($post->ID, 'from', '', ' &amp; ' , ''); ?></h2>
    </header>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
		<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-thumbnail')); ?>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <?php the_content(); ?>

<!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>
 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>
 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
    </div>   
</article>
<?php get_footer(); ?>