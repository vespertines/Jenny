<?php wp_footer(); ?>
<footer>
    <?php
    // $post = get_page_by_title('footer', OBJECT, 'page');
    // $post_id = $post->ID;
    // $footer_background = get_field('footer_background', $post_id);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery/dist/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script>
    window.onorientationchange = function() { location.reload() };
    </script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-142321015-1','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
