<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer id="colophon" class="site-footer text-center  pb-3" role="contentinfo">


    <div class="row gx-0">
        <div class="col-12">
            <a href="https://www.cccfoundation.com.hk/" target="_blank">
                <img class="bottom-logo"
                    src="<?php echo get_template_directory_uri();?>/assets/images/bottom-logo-1.png" alt=""></a>
            <img class="bottom-logo" style="height:55px"
                src="<?php echo get_template_directory_uri();?>/assets/images/bottom-logo-2.png" alt="">
        </div>
    </div>
    Copyright &copy; <?php echo date('Y');?> 網絡時空百草園

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>