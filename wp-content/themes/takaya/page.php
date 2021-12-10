<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()) : the_post();?>

<section class="ttl">

<?php if ( is_page( 'menu' ) || is_page( 'takeout' ) ): ?>
	<h2 class="pagettl blue">
<?php elseif ( is_page( 'sengyo' ) ): ?>
	<h2 class="pagettl red bgwhite">
<?php else: ?>
	<h2 class="pagettl red">
<?php endif;?>
<div class="inner"><span><?php the_title(); ?></span></div></h2>

</section>

<?php the_content();?>
<?php endwhile; endif;?>

<?php
get_footer();
