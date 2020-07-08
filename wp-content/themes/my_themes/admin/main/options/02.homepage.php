<?php
/**
 * Homepage functions.
 *
 * @package ThinkUpThemes
 */

/* ----------------------------------------------------------------------------------
	ENABLE SLIDER - HOMEPAGE & INNER-PAGES
---------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------
	ENABLE HOMEPAGE SLIDER
---------------------------------------------------------------------------------- */

// Content for slider layout - Standard
function thinkup_input_sliderhomepage() {

// Get theme options values.
$thinkup_homepage_sliderimage1_info  = thinkup_var ( 'thinkup_homepage_sliderimage1_info' );
$thinkup_homepage_sliderimage1_image = thinkup_var ( 'thinkup_homepage_sliderimage1_image', 'url' );
$thinkup_homepage_sliderimage1_title = thinkup_var ( 'thinkup_homepage_sliderimage1_title' );
$thinkup_homepage_sliderimage1_desc  = thinkup_var ( 'thinkup_homepage_sliderimage1_desc' );
$thinkup_homepage_sliderimage1_link  = thinkup_var ( 'thinkup_homepage_sliderimage1_link' );

$thinkup_homepage_sliderimage2_info  = thinkup_var ( 'thinkup_homepage_sliderimage2_info' );
$thinkup_homepage_sliderimage2_image = thinkup_var ( 'thinkup_homepage_sliderimage2_image', 'url' );
$thinkup_homepage_sliderimage2_title = thinkup_var ( 'thinkup_homepage_sliderimage2_title' );
$thinkup_homepage_sliderimage2_desc  = thinkup_var ( 'thinkup_homepage_sliderimage2_desc' );
$thinkup_homepage_sliderimage2_link  = thinkup_var ( 'thinkup_homepage_sliderimage2_link' );

$thinkup_homepage_sliderimage3_info  = thinkup_var ( 'thinkup_homepage_sliderimage3_info' );
$thinkup_homepage_sliderimage3_image = thinkup_var ( 'thinkup_homepage_sliderimage3_image', 'url' );
$thinkup_homepage_sliderimage3_title = thinkup_var ( 'thinkup_homepage_sliderimage3_title' );
$thinkup_homepage_sliderimage3_desc  = thinkup_var ( 'thinkup_homepage_sliderimage3_desc' );
$thinkup_homepage_sliderimage3_link  = thinkup_var ( 'thinkup_homepage_sliderimage3_link' );

$thinkup_homepage_sliderimage4_info  = thinkup_var ( 'thinkup_homepage_sliderimage4_info' );
$thinkup_homepage_sliderimage4_image = thinkup_var ( 'thinkup_homepage_sliderimage4_image', 'url' );
$thinkup_homepage_sliderimage4_title = thinkup_var ( 'thinkup_homepage_sliderimage4_title' );
$thinkup_homepage_sliderimage4_desc  = thinkup_var ( 'thinkup_homepage_sliderimage4_desc' );
$thinkup_homepage_sliderimage4_link  = thinkup_var ( 'thinkup_homepage_sliderimage4_link' );

$thinkup_homepage_sliderimage5_info  = thinkup_var ( 'thinkup_homepage_sliderimage5_info' );
$thinkup_homepage_sliderimage5_image = thinkup_var ( 'thinkup_homepage_sliderimage5_image', 'url' );
$thinkup_homepage_sliderimage5_title = thinkup_var ( 'thinkup_homepage_sliderimage5_title' );
$thinkup_homepage_sliderimage5_desc  = thinkup_var ( 'thinkup_homepage_sliderimage5_desc' );
$thinkup_homepage_sliderimage5_link  = thinkup_var ( 'thinkup_homepage_sliderimage5_link' );

	// Set output variable to avoid php errors
	$slide1_link = NULL;
	$slide2_link = NULL;
    $slide3_link = NULL;
    $slide4_link = NULL;
    $slide5_link = NULL;

	// Get url of featured images in slider pages
	$slide1_image_url = $thinkup_homepage_sliderimage1_image;
	$slide2_image_url = $thinkup_homepage_sliderimage2_image;
    $slide3_image_url = $thinkup_homepage_sliderimage3_image;
    $slide4_image_url = $thinkup_homepage_sliderimage4_image;
    $slide5_image_url = $thinkup_homepage_sliderimage5_image;

	// Get titles of slider pages
	$slide1_title = $thinkup_homepage_sliderimage1_title;
	$slide2_title = $thinkup_homepage_sliderimage2_title;
    $slide3_title = $thinkup_homepage_sliderimage3_title;
    $slide4_title = $thinkup_homepage_sliderimage4_title;
    $slide5_title = $thinkup_homepage_sliderimage5_title;

	// Get descriptions (excerpt) of slider pages
	$slide1_desc = $thinkup_homepage_sliderimage1_desc;
	$slide2_desc = $thinkup_homepage_sliderimage2_desc;
    $slide3_desc = $thinkup_homepage_sliderimage3_desc;
    $slide4_desc = $thinkup_homepage_sliderimage4_desc;
    $slide5_desc = $thinkup_homepage_sliderimage5_desc;

	// Get url of slider pages
	if( ! empty( $thinkup_homepage_sliderimage1_link ) ) {
		$slide1_link = get_permalink( $thinkup_homepage_sliderimage1_link );
	}
	if( ! empty( $thinkup_homepage_sliderimage2_link ) ) {
		$slide2_link = get_permalink( $thinkup_homepage_sliderimage2_link );
	}
	if( ! empty( $thinkup_homepage_sliderimage3_link ) ) {
		$slide3_link = get_permalink( $thinkup_homepage_sliderimage3_link );
	}
    if( ! empty( $thinkup_homepage_sliderimage3_link ) ) {
        $slide4_link = get_permalink( $thinkup_homepage_sliderimage4_link );
    }
    if( ! empty( $thinkup_homepage_sliderimage3_link ) ) {
        $slide5_link = get_permalink( $thinkup_homepage_sliderimage5_link );
    }

        ?>
            <div class="col-lg-6 order-lg-2">
                <div class="pt-recipe-item large-item">
                    <div class="pt-recipe-img set-bg" data-setbg="<?php echo esc_url( $slide3_image_url ); ?>">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <span><?php echo  $slide3_desc ; ?></span>
                        <h3><?php echo  $slide3_title ; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-1">
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="<?php echo esc_url( $slide1_image_url ); ?>">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4><?php echo  $slide1_title; ?></h4>
                    </div>
                </div>
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="<?php echo esc_url( $slide2_image_url ); ?>">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4><?php echo  $slide2_title; ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-3">
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="<?php echo esc_url( $slide4_image_url ); ?>">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4><?php echo  $slide4_title ; ?></h4>
                    </div>
                </div>
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="<?php echo esc_url( $slide5_image_url ); ?>">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4><?php echo  $slide5_title; ?></h4>
                    </div>
                </div>
            </div>
        <?php
}

// Add Slider - Homepage
function thinkup_input_sliderhome() {

// Get theme options values.
$thinkup_homepage_sliderswitch        = thinkup_var ( 'thinkup_homepage_sliderswitch' );
$thinkup_homepage_sliderimage1_image  = thinkup_var ( 'thinkup_homepage_sliderimage1_image', 'url' );
$thinkup_homepage_sliderimage2_image  = thinkup_var ( 'thinkup_homepage_sliderimage2_image', 'url' );
$thinkup_homepage_sliderimage3_image  = thinkup_var ( 'thinkup_homepage_sliderimage3_image', 'url' );
$thinkup_homepage_sliderimage4_image  = thinkup_var ( 'thinkup_homepage_sliderimage4_image', 'url' );
$thinkup_homepage_sliderimage5_image  = thinkup_var ( 'thinkup_homepage_sliderimage5_image', 'url' );


$thinkup_class_fullwidth = NULL;
$slide_image             = NULL;
$slider_default          = NULL;

	if ( is_front_page() ) {

		// Set default slider
		$slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_stylesheet_directory_uri() ) . '/images/slideshow/slide_demo1.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'experon' ) . '" /></li>';
		$slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo2.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'experon' ) . '" /></li>';
        $slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo3.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'experon' ) . '" /></li>';
        $slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo4.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'experon' ) . '" /></li>';
        $slider_default .= '<li><img src="' . esc_url( get_template_directory_uri() ) . '/images/transparent.png" style="background: url(' . esc_url( get_template_directory_uri() ) . '/images/slideshow/slide_demo5.png) no-repeat center; background-size: cover;" alt="' . esc_attr__( 'Demo Image', 'experon' ) . '" /></li>';

		if ( ( current_user_can( 'edit_theme_options' ) and empty( $thinkup_homepage_sliderswitch ) ) or $thinkup_homepage_sliderswitch == 'option1' ) {

			echo '<div id="slider"><div id="slider-core">';
			echo '<div class="rslides-container"><div class="rslides-inner"><ul class="slides">';
				echo $slider_default;
			echo '</ul></div></div>';
			echo '</div></div>';

		} else if ( $thinkup_homepage_sliderswitch == 'option2' ) {

			echo '';

		} else if ( $thinkup_homepage_sliderswitch == 'option3' ) {

			echo '';

		} else if ( $thinkup_homepage_sliderswitch == 'option4' ) {

			// Check if page slider has been set
			if(
			    empty( $thinkup_homepage_sliderimage1_image )
                and empty( $thinkup_homepage_sliderimage2_image )
                and empty( $thinkup_homepage_sliderimage3_image )
                and empty( $thinkup_homepage_sliderimage4_image )
                and empty( $thinkup_homepage_sliderimage5_image )
            ) {

				echo '<div id="slider"><div id="slider-core">';
				echo '<div class="rslides-container"><div class="rslides-inner"><ul class="slides">';
					echo $slider_default;
				echo '</ul></div></div>';
				echo '</div></div>';

			} else {
				echo '<section class="page-top-recipe">',
                        '<div class="container">',
                            '<div id="slider" class="row">';
                                thinkup_input_sliderhomepage();
				echo '</div>',
                    '</div>',
                    '</section>';

			}
		}
	}
}

//----------------------------------------------------------------------------------
//	ENABLE HOMEPAGE CONTENT
//----------------------------------------------------------------------------------

function thinkup_input_homepagesection() {

// Get theme options values.
$thinkup_homepage_sectionswitch   = thinkup_var ( 'thinkup_homepage_sectionswitch' );
$thinkup_homepage_section1_icon   = thinkup_var ( 'thinkup_homepage_section1_icon' );
$thinkup_homepage_section1_title  = thinkup_var ( 'thinkup_homepage_section1_title' );
$thinkup_homepage_section1_desc   = thinkup_var ( 'thinkup_homepage_section1_desc' );
$thinkup_homepage_section1_link   = thinkup_var ( 'thinkup_homepage_section1_link' );
$thinkup_homepage_section1_url    = thinkup_var ( 'thinkup_homepage_section1_url' );
$thinkup_homepage_section1_button = thinkup_var ( 'thinkup_homepage_section1_button' );

$thinkup_homepage_section2_icon   = thinkup_var ( 'thinkup_homepage_section2_icon' );
$thinkup_homepage_section2_title  = thinkup_var ( 'thinkup_homepage_section2_title' );
$thinkup_homepage_section2_desc   = thinkup_var ( 'thinkup_homepage_section2_desc' );
$thinkup_homepage_section2_link   = thinkup_var ( 'thinkup_homepage_section2_link' );
$thinkup_homepage_section2_url    = thinkup_var ( 'thinkup_homepage_section2_url' );
$thinkup_homepage_section2_button = thinkup_var ( 'thinkup_homepage_section2_button' );

$thinkup_homepage_section3_icon   = thinkup_var ( 'thinkup_homepage_section3_icon' );
$thinkup_homepage_section3_title  = thinkup_var ( 'thinkup_homepage_section3_title' );
$thinkup_homepage_section3_desc   = thinkup_var ( 'thinkup_homepage_section3_desc' );
$thinkup_homepage_section3_link   = thinkup_var ( 'thinkup_homepage_section3_link' );
$thinkup_homepage_section3_url    = thinkup_var ( 'thinkup_homepage_section3_url' );
$thinkup_homepage_section3_button = thinkup_var ( 'thinkup_homepage_section3_button' );

$thinkup_homepage_section4_icon   = thinkup_var ( 'thinkup_homepage_section4_icon' );
$thinkup_homepage_section4_title  = thinkup_var ( 'thinkup_homepage_section4_title' );
$thinkup_homepage_section4_desc   = thinkup_var ( 'thinkup_homepage_section4_desc' );
$thinkup_homepage_section4_link   = thinkup_var ( 'thinkup_homepage_section4_link' );
$thinkup_homepage_section4_url    = thinkup_var ( 'thinkup_homepage_section4_url' );
$thinkup_homepage_section4_button = thinkup_var ( 'thinkup_homepage_section4_button' );

$thinkup_homepage_section5_icon   = thinkup_var ( 'thinkup_homepage_section5_icon' );
$thinkup_homepage_section5_title  = thinkup_var ( 'thinkup_homepage_section5_title' );
$thinkup_homepage_section5_desc   = thinkup_var ( 'thinkup_homepage_section5_desc' );
$thinkup_homepage_section5_link   = thinkup_var ( 'thinkup_homepage_section5_link' );
$thinkup_homepage_section5_url    = thinkup_var ( 'thinkup_homepage_section5_url' );
$thinkup_homepage_section5_button = thinkup_var ( 'thinkup_homepage_section5_button' );

	// Set default values for icons
	if ( empty( $thinkup_homepage_section1_icon ) ) $thinkup_homepage_section1_icon = __( 'fa fa-thumbs-up', 'experon' );
	if ( empty( $thinkup_homepage_section2_icon ) ) $thinkup_homepage_section2_icon = __( 'fa fa-desktop', 'experon' );
    if ( empty( $thinkup_homepage_section3_icon ) ) $thinkup_homepage_section3_icon = __( 'fa fa-gears', 'experon' );
    if ( empty( $thinkup_homepage_section4_icon ) ) $thinkup_homepage_section4_icon = __( 'fa fa-gears', 'experon' );
    if ( empty( $thinkup_homepage_section5_icon ) ) $thinkup_homepage_section4_icon = __( 'fa fa-gears', 'experon' );

	// Set default values for titles
	if ( empty( $thinkup_homepage_section1_title ) ) $thinkup_homepage_section1_title = __( 'Step 1 &#45; Theme Options', 'experon' );
	if ( empty( $thinkup_homepage_section2_title ) ) $thinkup_homepage_section2_title = __( 'Step 2 &#45; Setup Slider', 'experon' );
    if ( empty( $thinkup_homepage_section3_title ) ) $thinkup_homepage_section3_title = __( 'Step 3 &#45; Create Homepage', 'experon' );
    if ( empty( $thinkup_homepage_section4_title ) ) $thinkup_homepage_section4_title = __( 'Step 4 &#45; Display Homepage', 'experon' );
    if ( empty( $thinkup_homepage_section5_title ) ) $thinkup_homepage_section5_title = __( 'Step 5 &#45; SEO Website', 'experon' );

	// Set default values for descriptions
	if ( empty( $thinkup_homepage_section1_desc ) ) 
	$thinkup_homepage_section1_desc = __( 'To begin customizing your site go to Appearance &#45;&#62; Customizer and select Theme Options. Here&#39;s you&#39;ll find custom options to help build your site.', 'experon' );

	if ( empty( $thinkup_homepage_section2_desc ) ) 
	$thinkup_homepage_section2_desc = __( 'To add a slider go to Theme Options &#45;&#62; Homepage and choose page slider. The slider will use the page title, excerpt and featured image for the slides.', 'experon' );

	if ( empty( $thinkup_homepage_section3_desc ) ) 
	$thinkup_homepage_section3_desc = __( 'To add featured content go to Theme Options &#45;&#62; Homepage (Featured) and turn the switch on then add the content you want for each section.', 'experon' );

    if ( empty( $thinkup_homepage_section3_desc ) )
    $thinkup_homepage_section4_desc = __( 'To add featured content go to Theme Options &#45;&#62; Homepage (Featured) and turn the switch on then add the content you want for each section.', 'experon' );

    if ( empty( $thinkup_homepage_section3_desc ) )
    $thinkup_homepage_section5_desc = __( 'To add featured content go to Theme Options &#45;&#62; Homepage (Featured) and turn the switch on then add the content you want for each section.', 'experon' );

    // Get page names for links
	if ( ! empty( $thinkup_homepage_section1_url ) ) {
		$thinkup_homepage_section1_link = $thinkup_homepage_section1_url;
	} else if ( ! empty( $thinkup_homepage_section1_link ) ) {
		$thinkup_homepage_section1_link = get_permalink( $thinkup_homepage_section1_link );
	}

	if ( ! empty( $thinkup_homepage_section2_url ) ) {
		$thinkup_homepage_section2_link = $thinkup_homepage_section2_url;
	} else if ( ! empty( $thinkup_homepage_section2_link ) ) {
		$thinkup_homepage_section2_link = get_permalink( $thinkup_homepage_section2_link );
	}

	if ( ! empty( $thinkup_homepage_section3_url ) ) {
		$thinkup_homepage_section3_link = $thinkup_homepage_section3_url;
	} else if ( ! empty( $thinkup_homepage_section3_link ) ) {
		$thinkup_homepage_section3_link = get_permalink( $thinkup_homepage_section3_link );
	}

    if ( ! empty( $thinkup_homepage_section4_url ) ) {
        $thinkup_homepage_section4_link = $thinkup_homepage_section4_url;
    } else if ( ! empty( $thinkup_homepage_section4_link ) ) {
        $thinkup_homepage_section4_link = get_permalink( $thinkup_homepage_section4_link );
    }

    if ( ! empty( $thinkup_homepage_section5_url ) ) {
        $thinkup_homepage_section5_link = $thinkup_homepage_section5_url;
    } else if ( ! empty( $thinkup_homepage_section5_link ) ) {
        $thinkup_homepage_section5_link = get_permalink( $thinkup_homepage_section5_link );
    }

	// Get button text
	if ( empty( $thinkup_homepage_section1_button ) )
		$thinkup_homepage_section1_button = __( 'Read More', 'experon' );

	if ( empty( $thinkup_homepage_section2_button ) )
		$thinkup_homepage_section2_button = __( 'Read More', 'experon' );

	if ( empty( $thinkup_homepage_section3_button ) )
		$thinkup_homepage_section3_button = __( 'Read More', 'experon' );

    if ( empty( $thinkup_homepage_section4_button ) )
        $thinkup_homepage_section4_button = __( 'Read More', 'experon' );

    if ( empty( $thinkup_homepage_section5_button ) )
        $thinkup_homepage_section5_button = __( 'Read More', 'experon' );

	// Output featured content areas
	if ( is_front_page() ) {
		if ( ( current_user_can( 'edit_theme_options' ) and empty( $thinkup_homepage_sectionswitch ) ) or $thinkup_homepage_sectionswitch == '1' ) {

		echo '<div id="section-home"><div id="section-home-inner">';

			echo '<article class="section1 one_third">',
					'<div class="services-builder style1">',
					'<div class="iconimage">';
					if ( empty( $thinkup_homepage_section1_icon ) ) {
						echo '<i class="' . esc_attr( $thinkup_homepage_section1_icon ) . ' fa-2x fa-inverse"></i>';
					} else {
						if ( ! empty( $thinkup_homepage_section1_link ) ) {
							echo '<a href="' . esc_url( $thinkup_homepage_section1_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section1_icon ) . ' fa-2x fa-inverse"></i></a>';
						} else {
							echo '<i class="' . esc_attr( $thinkup_homepage_section1_icon ) . ' fa-2x fa-inverse"></i>';
						}
					}
			echo	'</div>',
					'<div class="iconmain">',
					'<h3>' . esc_html( $thinkup_homepage_section1_title ) . '</h3>' . wpautop( do_shortcode( wp_strip_all_tags( esc_html( $thinkup_homepage_section1_desc ) ) ) );
					if ( ! empty( $thinkup_homepage_section1_link ) ) {
						echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section1_link ) . '">' . esc_html( $thinkup_homepage_section1_button ) . '</a></p>';
					}
			echo	'</div>',
					'</div>',
				'</article>';
			echo '<article class="section2 one_third">',
					'<div class="services-builder style1">',
					'<div class="iconimage">';
					if ( empty( $thinkup_homepage_section2_icon ) ) {
						echo '<i class="' . esc_attr( $thinkup_homepage_section2_icon ) . ' fa-2x fa-inverse"></i>';
					} else {
						if ( ! empty( $thinkup_homepage_section2_link ) ) {
							echo '<a href="' . esc_url( $thinkup_homepage_section2_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section2_icon ) . ' fa-2x fa-inverse"></i></a>';
						} else {
							echo '<i class="' . esc_attr( $thinkup_homepage_section2_icon ) . ' fa-2x fa-inverse"></i>';
						}
					}
			echo	'</div>',
					'<div class="iconmain">',
					'<h3>' . esc_html( $thinkup_homepage_section2_title ) . '</h3>' . wpautop( do_shortcode( wp_strip_all_tags( esc_html( $thinkup_homepage_section2_desc ) ) ) );
					if ( ! empty( $thinkup_homepage_section2_link ) ) {
						echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section2_link ) . '">' . esc_html( $thinkup_homepage_section2_button ) . '</a></p>';
					}
			echo	'</div>',
					'</div>',
				'</article>';

			echo '<article class="section3 one_third">',
					'<div class="services-builder style1">',
					'<div class="iconimage">';
					if ( empty( $thinkup_homepage_section3_icon ) ) {
						echo '<i class="' . esc_attr( $thinkup_homepage_section3_icon ) . ' fa-2x fa-inverse"></i>';
					} else {
						if ( ! empty( $thinkup_homepage_section3_link ) ) {
							echo '<a href="' . esc_url( $thinkup_homepage_section3_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section3_icon ) . ' fa-2x fa-inverse"></i></a>';
						} else {
							echo '<i class="' . esc_attr( $thinkup_homepage_section3_icon ) . ' fa-2x fa-inverse"></i>';
						}
					}
			echo	'</div>',
					'<div class="iconmain">',
					'<h3>' . esc_html( $thinkup_homepage_section3_title ) . '</h3>' . wpautop( do_shortcode( wp_strip_all_tags( esc_html( $thinkup_homepage_section3_desc ) ) ) );
				if ( ! empty( $thinkup_homepage_section3_link ) ) {
					echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section3_link ) . '">' . esc_html( $thinkup_homepage_section3_button ) . '</a></p>';
				}
			echo	'</div>',
					'</div>',
				'</article>';

            echo '<article class="section4 one_third">',
                    '<div class="services-builder style1">',
                    '<div class="iconimage">';
            if ( empty( $thinkup_homepage_section4_icon ) ) {
                    echo '<i class="' . esc_attr( $thinkup_homepage_section4_icon ) . ' fa-2x fa-inverse"></i>';
            } else {
                if ( ! empty( $thinkup_homepage_section4_link ) ) {
                    echo '<a href="' . esc_url( $thinkup_homepage_section4_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section4_icon ) . ' fa-2x fa-inverse"></i></a>';
                } else {
                    echo '<i class="' . esc_attr( $thinkup_homepage_section4_icon ) . ' fa-2x fa-inverse"></i>';
                }
            }
            echo	'</div>',
                    '<div class="iconmain">',
                    '<h3>' . esc_html( $thinkup_homepage_section4_title ) . '</h3>' . wpautop( do_shortcode( wp_strip_all_tags( esc_html( $thinkup_homepage_section4_desc ) ) ) );
            if ( ! empty( $thinkup_homepage_section4_link ) ) {
                    echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section4_link ) . '">' . esc_html( $thinkup_homepage_section4_button ) . '</a></p>';
            }
            echo	'</div>',
                '</div>',
            '</article>';

            echo '<article class="section5 one_third last">',
                    '<div class="services-builder style1">',
                    '<div class="iconimage">';
            if ( empty( $thinkup_homepage_section5_icon ) ) {
                    echo '<i class="' . esc_attr( $thinkup_homepage_section5_icon ) . ' fa-2x fa-inverse"></i>';
            } else {
                if ( ! empty( $thinkup_homepage_section5_link ) ) {
                    echo '<a href="' . esc_url( $thinkup_homepage_section5_link ) . '"><i class="' . esc_attr( $thinkup_homepage_section5_icon ) . ' fa-2x fa-inverse"></i></a>';
                } else {
                    echo '<i class="' . esc_attr( $thinkup_homepage_section5_icon ) . ' fa-2x fa-inverse"></i>';
                }
            }
            echo	'</div>',
                    '<div class="iconmain">',
                '<h3>' . esc_html( $thinkup_homepage_section5_title ) . '</h3>' . wpautop( do_shortcode( wp_strip_all_tags( esc_html( $thinkup_homepage_section5_desc ) ) ) );
            if ( ! empty( $thinkup_homepage_section5_link ) ) {
                echo '<p class="iconurl"><a class="" href="' . esc_url( $thinkup_homepage_section5_link ) . '">' . esc_html( $thinkup_homepage_section5_button ) . '</a></p>';
            }
            echo	'</div>',
                '</div>',
            '</article>';
		echo '<div class="clearboth"></div></div></div>';
		}
	}
}


/* ----------------------------------------------------------------------------------
	CALL TO ACTION - INTRO
---------------------------------------------------------------------------------- */

function thinkup_input_ctaintro() {

// Get theme options values.
$thinkup_homepage_introswitch        = thinkup_var ( 'thinkup_homepage_introswitch' );
$thinkup_homepage_introstyle         = thinkup_var ( 'thinkup_homepage_introstyle' );
$thinkup_homepage_introaction        = thinkup_var ( 'thinkup_homepage_introaction' );
$thinkup_homepage_introactionteaser  = thinkup_var ( 'thinkup_homepage_introactionteaser' );
$thinkup_homepage_introactiontext1   = thinkup_var ( 'thinkup_homepage_introactiontext1' );
$thinkup_homepage_introactionlink1   = thinkup_var ( 'thinkup_homepage_introactionlink1' );
$thinkup_homepage_introactionpage1   = thinkup_var ( 'thinkup_homepage_introactionpage1' );
$thinkup_homepage_introactioncustom1 = thinkup_var ( 'thinkup_homepage_introactioncustom1' );

	if ( $thinkup_homepage_introswitch == '1' and is_front_page() and ! empty( $thinkup_homepage_introaction ) ) {

		// Determine style for call to action
		if ( empty( $thinkup_homepage_introstyle ) or $thinkup_homepage_introstyle == 'option1' ) {
			$style      = 'style1';
			$class      = NULL;
			$wrap_start = NULL;
			$wrap_end   = NULL;
		} else if ( $thinkup_homepage_introstyle == 'option2' ) {
			$style      = 'style2';
			$class     = ' one_third last';
			$wrap_start = '<div class="action-message two_third">';
			$wrap_end   = '</div>';
		}

		echo '<div id="introaction" class="' . esc_attr( $style ) . '"><div id="introaction-core">';

			echo $wrap_start;

			echo '<div class="action-text">',
				 '<h3>' . esc_html( $thinkup_homepage_introaction ) . '</h3>',
				 '</div>';

			echo '<div class="action-teaser">',
				 wpautop( esc_html( $thinkup_homepage_introactionteaser ) ),
				 '</div>';

			echo $wrap_end;

			if ( ( !empty( $thinkup_homepage_introactionlink1) and $thinkup_homepage_introactionlink1 !== 'option3' ) ) {

				// Set default value of buttons to "Read more"
				if( empty( $thinkup_homepage_introactiontext1 ) ) { $thinkup_homepage_introactiontext1 = __( 'Read More', 'experon' ); }
				
				echo '<div class="action-link' . $class . '">';
					// Add call to action button 1
					if ( $thinkup_homepage_introactionlink1 == 'option1' ) {
						echo '<a class="themebutton" href="' . esc_url( get_permalink( $thinkup_homepage_introactionpage1 ) ) . '">',
						esc_html( $thinkup_homepage_introactiontext1 ),
						'</a>';
					} else if ( $thinkup_homepage_introactionlink1 == 'option2' ) {
						echo '<a class="themebutton" href="' . esc_url( $thinkup_homepage_introactioncustom1 ) . '">',
						esc_html( $thinkup_homepage_introactiontext1 ),
						'</a>';
					}
				echo '</div>';
			}

		echo '</div></div>';
	}
}


?>