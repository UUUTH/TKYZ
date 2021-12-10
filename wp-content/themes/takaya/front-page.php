<?php get_header(); ?>
<div class="slider">
<?php echo do_shortcode('[metaslider id="22"]'); ?>
</div>

<section class="bgYellow w1000">
<div class="mb20"><a href="<?php echo esc_url( home_url( 'reserve' ) ); ?>" class="btn btn_reserve bgRed fs34">ご予約はこちらから</a></div>
<div class="red fs23 mb60">電話でのご予約　TEL-<a href="tel:0822513800" data-label="電話番号-トップ">082-251-3800</a></div>

<div class="linkBoxWrapper flex left omisemenu">
    <div class="linkBox">
        <div class="ttl">お店メニュー</div>
        <div class="txt">持ち船梵天丸で釣ってきた新鮮なお魚で作ったお寿司、一品料理をどうぞ！</div>
        <div class="link"><a href="<?php echo esc_url( home_url( 'menu' ) ); ?>" class="btn red">詳しくは→</a></div>
    </div>
</div>
<div class="linkBoxWrapper flex right takeout">
    <div class="linkBox">
        <div class="ttl">テイクアウト</div>
        <div class="txt">季節の料理から定番までお店で食べられるメニューをテイクアウトで楽しんでください！</div>
        <div class="link"><a href="<?php echo esc_url( home_url( 'takeout' ) ); ?>" class="btn red">詳しくは→</a></div>
    </div>
</div>
<div class="mowaBox flex">
    <div class="left">
        <div class="ttl red">鮮魚の販売</div>
        <div class="txt red">持ち船梵天丸で釣った新鮮なお刺身、活魚を販売しています！</div>
        <div class="link"><a href="<?php echo esc_url( home_url( 'sengyo' ) ); ?>" class="btn red">詳しくは→</a></div>
    </div>
    <div class="right">
        <div class="imgBox"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/img_sengyo.png" alt="鮮魚の販売"></div>
    </div>
    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_fish002.png" alt=""></div>
</div>
<div class="icon fish1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_fish001.png" alt=""></div>
<div class="icon wave1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_wave.png" alt=""></div>
<div class="icon wave2"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_wave.png" alt=""></div>
<div class="icon wave3"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_wave.png" alt=""></div>
</section>

<section class="w1000">
<div class="squareBoxWrapper flex">
    <div class="squareBox">
        <div class="ttl red">たかや鮨のこだわり</div>
        <div class="imgBox"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/img_kodawari.png" alt="たかや鮨のこだわり"></div>
        <div class="link"><a href="<?php echo esc_url( home_url( 'commitment' ) ); ?>" class="btn red">詳しくは→</a></div>
    </div>
    <div class="squareBox">
        <div class="ttl red">たかや寿司と梵天丸のこと</div>
        <div class="imgBox"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/img_about.png" alt="たかや寿司と梵天丸のこと"></div>
        <div class="link"><a href="<?php echo esc_url( home_url( 'about' ) ); ?>" class="btn red">詳しくは→</a></div>
    </div>
    <div class="icon fish"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_fish003.png" alt=""></div>
    <div class="icon boat"><img src="<?php echo get_template_directory_uri() ?>/assets/img/index/bgicon_waveboat.png" alt=""></div>
</div>
</section>

<section class="w1000">
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11850.571702904681!2d132.45426709606483!3d34.360823489239785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355aa3cd532e4657%3A0xaf3dc4d166c99fed!2z44Gf44GL44KE6a6o!5e0!3m2!1sja!2sjp!4v1638789551206!5m2!1sja!2sjp" width="100%" height="353" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</section>

<?php
get_footer();
