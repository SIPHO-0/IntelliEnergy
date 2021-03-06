<?php 
$one_page_business_email= get_theme_mod('header_email', '');
$one_page_business_address= get_theme_mod('header_address', '');
$one_page_business_tel= get_theme_mod('header_telephone', '');

if ($one_page_business_email !='' || $one_page_business_address !='' || $one_page_business_tel !='' || (has_nav_menu( 'social' ))  )  {
?>

<div class="contact-ribbon col-xs-12">
  <div class="container">
    <div class="row">
	
	
      <div class="col-sm-8 contact-info-container">
        <div class="contact-info">
          <?php if($one_page_business_tel): ?>
          <span class="phone"> <i class="fa fa-phone"></i> <span><?php echo esc_html($one_page_business_tel); ?></span> </span>
          <?php endif; ?>
          <?php if($one_page_business_address): ?>
          <span class="address col-xs-hide"> <i class="fa fa-map-marker"></i> <span><?php echo esc_html($one_page_business_address); ?></span> </span>
          <?php endif; ?>
          <?php if($one_page_business_email): ?>
          <span class="email"> <i class="fa fa-envelope-o"></i> <a class="tel-link" href="mailto:<?php echo esc_attr( antispambot( $one_page_business_email ) ); ?>" ><?php echo esc_html($one_page_business_email); ?></a> </span>
          <?php endif; ?>
        </div>
      </div>
	  
      <div class="col-sm-4 col-xs-12 social-navigation-container">
        <?php if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation menu-social-container" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'one-page-business' ); ?>">
          <?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							)
						);
					?>
        </nav>
        <!-- .social-navigation -->
        <?php endif; ?>
      </div>
	  
    </div>
  </div>
</div>
<?php
}