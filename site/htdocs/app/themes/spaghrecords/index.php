<?php
if ( is_home() ) :
	get_header( 'home' );
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header();
endif;
?>
    <!-- Boucle -->
    <?php
    $args = array( 'post_type' => 'releases', 'posts_per_page' => 100 , 'order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php the_permalink();?>" class="thumbnail"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a>
        </div>
    <?php endwhile;?>  
<?php get_footer(); ?>