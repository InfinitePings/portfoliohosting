<?php
/**
 * Title: Banner Block
 * Slug: freelance-portfolio/banner-block
 * Categories: banner
 * Block Types: core/template-part/banner
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"has-background"} -->
<div class="wp-block-group has-background"><!-- wp:columns {"align":"wide","className":"slider-banner","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide slider-banner" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"40%","className":"banner-main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top banner-main" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:image {"id":12,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"slider-img","style":{"color":[]}} -->
<figure class="wp-block-image size-full slider-img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/slider-image.png" alt="" class="wp-image-12" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"slider-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"62px","fontStyle":"normal","fontWeight":"900","letterSpacing":"1px"}},"textColor":"base","fontFamily":"outfit"} -->
<h2 class="wp-block-heading slider-short-heading has-base-color has-text-color has-link-color has-outfit-font-family" style="font-size:62px;font-style:normal;font-weight:900;letter-spacing:1px"><?php echo esc_html('Ethan Craft','freelance-portfolio'); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"enabled":false},"id":11,"sizeSlug":"full","linkDestination":"custom","className":"slide-img"} -->
<figure class="wp-block-image size-full slide-img"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/video.png" alt="" class="wp-image-11"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","className":"slider-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top slider-content" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:60%"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/slider-right.png","id":30,"dimRatio":50,"customOverlayColor":"#373737","isUserOverlayColor":false,"minHeight":575,"minHeightUnit":"px","contentPosition":"center left","className":"banner-content","style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left banner-content" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);min-height:575px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#373737"></span><img class="wp-block-cover__image-background wp-image-30" alt="" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/slider-right.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","className":"is-slide-heading","style":{"typography":{"textTransform":"capitalize","fontSize":"38px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"base","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-text-align-left is-slide-heading has-base-color has-text-color has-nunito-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0;font-size:38px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html('Showcasing Creativity,  ','freelance-portfolio'); ?><br><?php echo esc_html('Passion, and Unique Visual ','freelance-portfolio'); ?><br><?php echo esc_html('Stories','freelance-portfolio'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#8c93a6"}}},"color":{"text":"#8c93a6"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"nunito"} -->
<p class="has-text-color has-link-color has-nunito-font-family" style="color:#8c93a6;font-size:14px;font-style:normal;font-weight:500"><?php echo esc_html('We Specialize in Growing Your Company, No Matter How Small the Start."','freelance-portfolio'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slide-btn"} -->
<div class="wp-block-buttons slide-btn"><!-- wp:button {"textColor":"base","className":"theme-btn","style":{"color":{"background":"#262626"},"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","fontSize":"14px"}},"fontFamily":"nunito"} -->
<div class="wp-block-button has-custom-font-size theme-btn has-nunito-font-family" style="font-size:14px;font-style:normal;font-weight:700;text-transform:capitalize"><a class="wp-block-button__link has-base-color has-text-color has-background wp-element-button" href="#" style="background-color:#262626;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px"><?php echo esc_html('Get Started','freelance-portfolio'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->