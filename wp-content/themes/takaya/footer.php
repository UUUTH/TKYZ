</main><!-- main -->
<!--FOOTER-->
<footer>
    <div class="box-contact">
        <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo_foot.png" alt="たかや鮨"></a></div>
        <div class="address">
            <address>〒734-0015広島県広島市南区宇品御幸3丁目13-1</address><br>
            TEL：<a href="tel:0822513800" data-label="電話番号-フッター">082-251-3800</a><br>
            定休日：毎週 火曜日・水曜<br>
            営業時間：12:00-22:00<br>
            <a href="https://www.instagram.com/ujinatakaya/" target="_blank">インスタグラム@ujinatakaya</a>
        </div>
    </div>
</footer>
<!--FOOTER--> 

<!--PAGETOP-->
<div id="pagetop"><img src="<?php echo get_theme_file_uri('assets'); ?>/img/common/pagetop.png" width="52" height="52" alt="PAGETOP"/></div>
<!--PAGETOP--> 
<script src="<?php echo get_theme_file_uri('assets'); ?>/js/jquery.min.js"></script>
<?php if ( is_page( 'animation' ) ): ?>
<script src="<?php echo get_theme_file_uri('assets'); ?>/js/slick/slick.min.js"></script>
<script>
$(function(){
    //SP
    if (window.matchMedia( "(max-width: 896px)" ).matches) {
        //SLICK
        $(".slick").slick({
            arrows:true,
            prevArrow: '<button class="slide-arrow prev-arrow"></button>',
            nextArrow: '<button class="slide-arrow next-arrow"></button>',
            fade: true,
            pauseOnFocus: false,
            infinite: false
        })
    }
});
</script>
<?php endif; ?>
<script src="<?php echo get_theme_file_uri('assets'); ?>//js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>