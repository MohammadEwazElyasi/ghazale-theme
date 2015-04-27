<?php
/**
 * @package sh_ghazale
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">
        <div class="article-separator">
            <div class="article-separate-line">
            </div>
        </div>

        <?php
        if (has_post_thumbnail()) {
            echo '<div class="small-index-thumbnail clear">';
            echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'sh-ghazale') . get_the_title() . '" rel="bookmark">';
            echo the_post_thumbnail('index-thumb');
            echo '</a>';
            echo '</div>';
        }
        ?>
	<header class="entry-header">
        <?php
        if(is_sticky()){
            echo '<i class="fa fa-bookmark sticky-post"></i>';
        }
        ?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php sh_ghazale_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt();
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sh_ghazale' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


        <footer class="entry-footer continue-reading">
            <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'sh_ghazale') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
            <?php edit_post_link( __( 'Edit', 'sh_ghazale' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-footer -->
    </div><!-- .index-box -->
</article><!-- #post-## -->
