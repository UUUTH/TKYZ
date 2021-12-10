<?php get_header(); ?>

<!--MV-->
<section id="com-wrap-mv" class="anime <?php echo $slug; ?>">
	<h2 class="ttl">Blog</h2>
</section>
<!--MV-->

<div class="box-flex">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<article id="wrap-blog" class="single">
	<section class="box-blog">
		<h3 class="ttl"><?php the_title(); ?></h3>
		<div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
		<?php /*
    <div class="category"><?php the_category(); ?></div>
    <div class="tag"><?php the_tags(''); ?></div>
    */?>
		<div class="txt"><?php the_content(); ?></div>
	</section>
	</article>
	<?php endwhile; else: ?>
	<div>記事がありませんでした。</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>

<!--PAGER-->
<nav id="wrap-pager" class="single">
<ul class="nav-pager">
<?php
  //リファラを取得
  $referer = wp_get_referer();

  //リファラのURLから記事IDを取得
  $referer_post_id = url_to_postid($referer);

  //条件によって、戻り先のリンクを変更する
  if($referer && $referer != home_url('/') && !$referer_post_id) {
    //特定のアーカイブページから来た場合
    echo '<li class="prev"><a href="'. $referer .'"><img src="http://uuuth.me/mirailabo/wp-content/themes/mirailab/assets/img/common/icon-arrow-blog.svg" width="8" height="15" alt="" />一覧へ戻る</a></li>';
  } else {
    //それ以外の場合
    echo '<li class="prev"><a href="'. home_url('/blog/') .'"><img src="http://uuuth.me/mirailabo/wp-content/themes/mirailab/assets/img/common/icon-arrow-blog.svg" width="8" height="15" alt="" />一覧へ戻る</a></li>';
  }
?>
	</ul>
</nav>
<!--PAGER-->

</div>

<?php
get_footer();
