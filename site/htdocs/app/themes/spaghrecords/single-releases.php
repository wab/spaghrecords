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
<?php $artist = wp_get_object_terms ($post->ID, 'artist'); ?>
<?php $remixer = wp_get_object_terms($post->ID, 'remixer'); ?>
<?php $reference = wp_get_object_terms($post->ID, 'reference'); ?>
<?php $formats = wp_get_object_terms($post->ID, 'formats'); ?>
<?php $master = wp_get_object_terms($post->ID, 'master'); ?>
<article class="release">
    <header class="page-header text-right">
            <h1><?php the_title(); ?><br/>
            <small><?php foreach($artist as $termartist){echo $termartist->name; } ?></small></h1>
            <?php if(!empty($remixer)){?> <p>Remixed by <?php foreach($remixer as $termremixer){echo $termremixer->name; } ?></p><?php } ?>
    </header>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
		<?php the_post_thumbnail('medium', array('class' => 'img-responsive img-thumbnail')); ?>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    	<div class="data">
            <?php if(!empty($reference)){?>
            <?php foreach($reference as $termreference){?>
			<span class="label label-default"><?php echo $termreference->name; ?></span>
    		<?php } 
			} ?>
            
            <?php if(!empty($formats)){?>
            <?php foreach($formats as $termformats){?>
			<span class="label label-default"><?php echo $termformats->name; ?></span>
    		<?php } 
			} ?>
            
			<span class="label label-info"><?php echo types_render_field("release-date", array ("style" => "text")); ?></span>
            
            <?php if(!empty($master)){?>
            <?php foreach($master as $termmaster){?>
			<span class="label label-default"><?php echo $termmaster->name; ?></span>
    		<?php } 
			} ?>
        </div>

    <?php the_content(); ?>
        <a href="<?php echo types_render_field("beatport" , array('raw' => 'true')); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/beatport.jpg" alt="Télécharger sur Beaport" /></a>
        <a href="<?php echo types_render_field("juno" , array('raw' => 'true')); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/junodownload.jpg" alt="Télécharger sur Juno" /></a>
        <a href="<?php echo types_render_field("trackitdown" , array('raw' => 'true')); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/trackitdown.jpg" alt="Télécharger sur Trackitdown" /></a>
      </a>          
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