<div class="footer">
    <p class="copy">Copyright 2012. All Right Reserved MonkeeThemes.</p>
    <?php wp_nav_menu( array(
        'theme_location' => 'footer_menu',
        'container_class' => 'ftrmenu',
        'menu_class' => ''
    ) ); ?>

</div>
</div>
<!-- FlexSlider -->
<script type="text/javascript">
    $(function(){
        $( "#accordion" ).accordion();
        $( "#tabs" ).tabs();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
