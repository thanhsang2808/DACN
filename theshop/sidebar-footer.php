<?php
/**
 *
 * @package TheShop
 */
?>

	<?php
	// Set widget areas classes based on user choice.
		$theshop_widget_areas = get_theme_mod( 'footer_widget_areas', '3' );
	if ( $theshop_widget_areas == '3' ) {
		$theshop_cols = 'col-md-4';
	} elseif ( $theshop_widget_areas == '2' ) {
		$theshop_cols = 'col-md-6';
	} else {
		$theshop_cols = 'col-md-12';
	}
	?>

	<div id="sidebar-footer" class="footer-widgets" role="complementary">
		<div class="container">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div class="sidebar-column <?php echo esc_attr( $theshop_cols ); ?>">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<div class="sidebar-column <?php echo esc_attr( $theshop_cols ); ?>">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<div class="sidebar-column <?php echo esc_attr( $theshop_cols ); ?>">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
