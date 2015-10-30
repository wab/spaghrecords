<?php
if ( is_home() ) :
	get_header( 'home' );
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header();
endif;
?>

<header class="page-header text-right">
	<h1>404</h1>
</header>

 <p>Sorry, no posts matched your criteria.</p>

<?php get_footer(); ?>