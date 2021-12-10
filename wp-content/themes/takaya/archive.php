<?php get_header(); ?>

<?php // 投稿のスラッグを取得
 $page = get_post( get_the_ID() ); $slug = $page->post_name; 
?>

<!--MV-->
<section id="com-wrap-mv" class="anime <?php echo $slug; ?>">
	<h2 class="ttl">Blog</h2>
</section>
<!--MV-->

<div class="box-flex"> 
<article id="wrap-blog" class="archive">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<section class="box-blog">
    <h3 class="ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="date"><time datetime="<?php echo get_the_date('c') ?>"><?php echo get_the_date('Y.m.d') ?></time></div>
    <?php /*
    <div class="category"><?php the_category(); ?></div>
    <div class="tag"><?php the_tags(''); ?></div>
    */?>
    <div class="txt"><?php the_excerpt(); ?></div>
</section>
<?php endwhile; else: ?>
<div>記事がありません。</div>
<?php endif; ?>

</article>

<?php get_sidebar(); ?>

<?php echo paginate(array(
	'prev_text' => '<img src="'.get_theme_file_uri('assets/img/common/icon-arrow-blog.svg').'" width="8" height="15" alt="前のページ">',
	'next_text' => '<img src="'.get_theme_file_uri('assets/img/common/icon-arrow-blog.svg').'" width="8" height="15" alt="次のページ">',
)); ?>

</div>

<?php
get_footer();
