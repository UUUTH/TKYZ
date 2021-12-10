<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!--
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
-->
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/destyle.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/common.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
<?php if ( is_front_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/index.css">
<?php elseif ( is_post_type_archive('post') or is_singular('post') or is_home() or is_archive() or is_category() or is_tag() or is_search() ): ?>
<?php elseif ( is_page( 'reserve' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/reserve.css">
<?php elseif ( is_page( 'menu' ) || ( is_page( 'takeout' ) ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/menu.css">
<?php elseif ( is_page( 'commitment' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/commitment.css">
<?php elseif ( is_page( 'about' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/about.css">
<?php elseif ( is_page( 'sengyo' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/sengyo.css">
<?php endif; ?>
<?php if ( is_page( 'takeout' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/takeout.css">
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="a-pagetop">
<?php wp_body_open(); ?>

<!--HEADER-->
<header>
<div class="header-inner">
    <div class="box-header">
        <div class="box-logo">
            <h1 class="ttl">
                <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png" alt="たかや鮨"></a></div>
            </h1>
        </div>
        <nav>
            <div id="nav-toggle">
                <div><span></span><span></span><span></span></div>
            </div>
            <ul class="nav-header">
                <li class="sp"><a href="<?php echo esc_url( home_url() ); ?>">TOP</a></li>
                <li><a href="<?php echo esc_url( home_url( 'reserve' ) ); ?>">ご予約</a></li>
                <li><a href="<?php echo esc_url( home_url( 'menu' ) ); ?>">お店メニュー</a></li>
                <li><a href="<?php echo esc_url( home_url( 'takeout' ) ); ?>">テイクアウト</a></li>
                <li><a href="<?php echo esc_url( home_url( 'commitment' ) ); ?>">こだわり</a></li>
                <li><a href="<?php echo esc_url( home_url( 'about' ) ); ?>">たかや鮨と梵天丸のこと</a></li>
            </ul>
        </nav>
    </div>
</div>
</header>
<!--HEADER--> 

<?php // 投稿のスラッグを取得
 $page = get_post( get_the_ID() ); $slug = $page->post_name; 
?>
<main class="<?php echo $slug; ?>">