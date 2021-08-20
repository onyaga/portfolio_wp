<?php get_template_part('temp/global-footer'); ?>


<?php
//IE読み込みscript
$ua = $_SERVER['HTTP_USER_AGENT'];
if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')) : ?>
<script>objectFitImages();</script>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<?php wp_footer(); ?>
</body>
</html>