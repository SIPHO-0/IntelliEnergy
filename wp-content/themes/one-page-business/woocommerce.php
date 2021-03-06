<?php
/**
 * The WooCommerce template file.
 * @package one-page-business
 */
get_header();
$one_page_business_sidebar_pos = get_theme_mod('woo_sidebar_position', 'right');
?>

<div id="content" class="site-content">

<?php if ( $one_page_business_sidebar_pos =='left' && is_active_sidebar( 'woocommerce-sidebar-1' ) ): ?>
	<aside id="secondary" class="sidebar widget-area col-xs-12 col-sm-4 col-md-3 col-lg-3" role="complementary">
			<?php dynamic_sidebar( 'woocommerce-sidebar-1' ); ?>
	</aside>
<?php endif; ?>

<div id="primary" class="content-area col-xs-12 col-sm-8 col-md-9 col-lg-9">
	<main id="main" class="site-main" role="main">
	<div class="entry-content">

			<?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>	
				<?php woocommerce_breadcrumb(); ?>	
			<?php endif; ?>		
	
			<?php woocommerce_content(); ?>

	</div>
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php if ( $one_page_business_sidebar_pos =='right' && is_active_sidebar( 'woocommerce-sidebar-1' ) ): ?>
	<aside id="secondary" class="sidebar widget-area col-xs-12 col-sm-4 col-md-3 col-lg-3" role="complementary">
			<?php dynamic_sidebar( 'woocommerce-sidebar-1' ); ?>
	</aside>
<?php endif; ?>


</div><!-- site content-->

<?php get_footer(); ?>
