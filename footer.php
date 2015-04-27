<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sh_ghazale
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php get_sidebar('footer'); ?>
		<div class="site-info">
            <?php printf( __( 'Copyright &copy; %s %s. All Rights Reserved.', 'sh-ghazale' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( '<i class="fa fa-cloud"></i> Designed By: %1$s', 'sh_ghazale' ), '<a href ="https://github.com/ghsh88">Ghazale</a>'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
