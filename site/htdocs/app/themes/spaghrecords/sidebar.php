<div id="secondary" role="complementary">
<?php 
// the query
$the_query = new WP_Query( 'pagename=accueil' ); ?>

<?php if ( $the_query->have_posts() ) : ?>


  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  	<div class="text-right"><?php the_content(); ?></div>
  <?php endwhile; ?>
  <!-- end of the loop -->


  <?php wp_reset_postdata(); ?>

<?php endif; ?></div><!-- #secondary -->
