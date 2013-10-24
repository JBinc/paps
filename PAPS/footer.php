<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div><!-- #main .wrapper -->
<footer id="footer" role="contentinfo">
	<div id="footer-sidebar" class="secondary container clearfix">
        <div id="footer-sidebar1" class="footer-item">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
            }
            ?>
        </div>
        <div id="footer-sidebar2" class="footer-item">
            <?php
            if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
            }
        ?>
        </div>
    </div>

</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>