<?php

$productGalleryWidth = blocksy_get_theme_mod( 'productGalleryWidth', 50 );

if ($productGalleryWidth !== 50) {
	$css->put(
		'.product-entry-wrapper',
		'--product-gallery-width: ' . $productGalleryWidth . '%'
	);
}

blocksy_output_spacing([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.product-entry-wrapper',
	'property' => 'border-radius',
	'value' => blocksy_get_theme_mod('product_image_border_radius',
		blocksy_spacing_value()
	)
]);

$gallery_columns = blocksy_expand_responsive_value(apply_filters(
	'blocksy:woocommerce:single-product:gallery:columns',
	[
		'desktop' => 1,
		'tablet' => 1,
		'mobile' => 1
	]
));

$gallery_columns_selectors = [
	'desktop' => '',
	'tablet' => '',
	'mobile' => ''
];

foreach ($gallery_columns_selectors as $device => $selector) {
	$gallery_columns_selectors[$device] = blocksy_assemble_selector(
		blocksy_mutate_selector([
			'selector' => blocksy_mutate_selector([
				'selector' => ['.woocommerce-product-gallery'],
				'operation' => 'suffix',
				'to_add' => '[data-flexy="no"]'
			]),
			'operation' => 'suffix',
			'to_add' => '.flexy-item:nth-child(n + ' . (intval($gallery_columns[$device]) + 1) . ')'
		])
	);
}

blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,

	'selector' => $gallery_columns_selectors,

	'variableName' => 'height',
	'variableType' => 'property',
	'value' => '1'
]);

// thumbnails
$product_thumbs_spacing = blocksy_get_theme_mod( 'product_thumbs_spacing', '15px' );

if ($product_thumbs_spacing !== '15px') {
	blocksy_output_responsive([
		'css' => $css,
		'tablet_css' => $tablet_css,
		'mobile_css' => $mobile_css,
		'selector' => '.product-entry-wrapper',
		'variableName' => 'thumbs-spacing',
		'unit' => '',
		'value' => $product_thumbs_spacing
	]);
}

blocksy_output_spacing([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.woocommerce-product-gallery .flexy-pills',
	'property' => 'border-radius',
	'value' => blocksy_get_theme_mod('product_thumbs_border_radius',
		blocksy_spacing_value()
	)
]);


// slider arrows
blocksy_output_colors([
	'value' => blocksy_get_theme_mod('slider_nav_arrow_color'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.woocommerce-product-gallery',
			'variable' => 'flexy-nav-arrow-color'
		],

		'hover' => [
			'selector' => '.woocommerce-product-gallery',
			'variable' => 'flexy-nav-arrow-hover-color'
		],
	],
]);

blocksy_output_colors([
	'value' => blocksy_get_theme_mod('slider_nav_background_color'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.woocommerce-product-gallery',
			'variable' => 'flexy-nav-background-color'
		],

		'hover' => [
			'selector' => '.woocommerce-product-gallery',
			'variable' => 'flexy-nav-background-hover-color'
		],
	],
]);


// lightbox button
blocksy_output_colors([
	'value' => blocksy_get_theme_mod('lightbox_button_icon_color'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.woocommerce-product-gallery__trigger',
			'variable' => 'lightbox-button-icon-color'
		],

		'hover' => [
			'selector' => '.woocommerce-product-gallery__trigger',
			'variable' => 'lightbox-button-icon-hover-color'
		],
	],
]);

blocksy_output_colors([
	'value' => blocksy_get_theme_mod('lightbox_button_background_color'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.woocommerce-product-gallery__trigger',
			'variable' => 'lightbox-button-background-color'
		],

		'hover' => [
			'selector' => '.woocommerce-product-gallery__trigger',
			'variable' => 'lightbox-button-hover-background-color'
		],
	],
]);
