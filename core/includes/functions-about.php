<?php

/**
 * Title: About
 *
 * Description: Displays list of all CyberChimps theme linking to it's pro and free versions.
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

/** Add stylesheet and JS for upsell page. */
function cyberchimps_about_style() {
	/** Set template directory uri */
	$directory_uri = get_template_directory_uri();
	$suffix        = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'about-upsell_style', get_template_directory_uri() . '/core/includes/upsell/css/upsell' . $suffix . '.css' );
	wp_enqueue_style( 'about_style', get_template_directory_uri() . '/core/includes/css/about.css' );
}

/** Add upsell page to the menu. */
function cyberchimps_add_about() {
	$page = add_theme_page(
		'About Responsive',
		'About Responsive',
		'administrator',
		'cyberchimps-responsive',
		'cyberchimps_display_about'
	);

	add_action( 'admin_print_styles-' . $page, 'cyberchimps_about_style' );
}

//add_action( 'admin_menu', 'cyberchimps_add_about' );

/** Define markup for the upsell page. */
function cyberchimps_display_about() {
	/** Set template directory uri */
	$theme = wp_get_theme(); ?>
	<div class="about-container">
		<div>
			<h1 class="heading"><?php echo 'Responsive - ' . $theme['Version']; ?></h1>
			<a href='https://wordpress.org/support/theme/responsive/reviews/#new-post/' target="_blank" style='margin-top: 22px'  class="button button-primary"><?php _e( 'Leave a star rating', 'responsive' ); ?></a>
			<?php
				$directory_uri = get_template_directory_uri();
			?>
			</div>

		<div class="about-info">
			<span><img src="<?php echo $directory_uri; ?>/core/images/logo.png"></span>
			<?php
			printf(
				__(
					'<p>  is based on an intuitive foundation with a fluid grid system that automatically adapts your website to mobile devices including smartphones, tablets
 				and desktops so your website looks incredible on any device. This theme is aptly named Responsive Theme because that is the main focus of this theme, to make sure it is fully responsive and adapts to any device seamlessly.
				We understand the importance of WordPress responsive themes and have ensured all of our themes are truly suitable for all mobile devices',
					'responsive'
				)
			);
			?>
		</div>

		<div class="child-themes">
		<h2>Responsive Child Themes</h2>
		<table class="features-table">
		<tr>
		<td>Responsive Business</td>
		<td>Responsive Blog </td>
		</tr>
		<tr style="border-bottom:none;">
		<td><a href="https://cyberchimps.com/store/responsive-business/" target="_blank"><img  src="<?php echo $directory_uri; ?>/core/images/responsive_business.jpg"></a><a class="button button-primary buylink" target="_blank" href="https://cyberchimps.com/store/responsive-business/?utm_source=about">View Details</a></td>
		<td><a href="https://cyberchimps.com/store/responsive-blog/" target="_blank"><img src="<?php echo $directory_uri; ?>/core/images/responsive_blog.jpg"></a><a class="button button-primary buylink" target="_blank" href="https://cyberchimps.com/store/responsive-blog/?utm_source=about">View Details</a></td>
		</tr>
		</table>
		</div>
		<div class="features">
		<h2>Why upgrade to Pro?</h2>
			<table class="features-table">
			<thead>
			<tr>
				<th class=""></th>
				<th>Responsive</th>
				<th>Responsive Pro</th>
			</tr>
			<tr>
			<td class="feature">Responsive layout</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Custom header & background</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Custom Templates (9 page templates)</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Fluid Stackable Grid System</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Custom Templates (9 page templates)</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Custom Menus (4 Menus)</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Child Theme Friendly</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Theme options</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Custom Scripts for Header and Footer</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Widgetized (11 Widget areas)</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">BbPress and WooCommerce Compatible</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Ability to upload custom favicon, apple touch icon</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<tr>
			<td class="feature">Features area for home page</td>
			<td class="featureyes">3 features</td>
			<td class="featureno">Unlimited</td>
			</tr>
			<tr>
			<tr>
			<td class="feature">Testimonial element for home page</td>
			<td class="featureyes">1</td>
			<td class="featureno">Unlimited</td>
			</tr>
			<tr>
			<td class="feature">Team element for home page</td>
			<td class="featureyes">3 team members</td>
			<td class="featureno">Unlimited</td>
			</tr>
			<tr>
			<td class="feature">Ability to choose different Site-Wide layouts
				<p>Default,Full-width & Boxed</p> </td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Ready-to-use Color Schemes (Skins)</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Integrated SlideDeck Premium Plugin</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<tr>
			<td class="feature">Choice of 4 trendy Social Icon Sets</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Various options for blog post, single post, archive, search & 404 layouts</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<td class="feature">Typography</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>
			<tr>
			<td class="feature">High Priority Support via Helpdesk</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>
			<tr>

			</thead>
			</table>
		</div>
		<div class="buy">
		<a class="button button-primary buylink" target="_blank" href="http://cyberchimps.com/store/responsivepro/?utm_source=about">Buy Responsive Pro</a>
		</div>

	</div>
	<?php
}
