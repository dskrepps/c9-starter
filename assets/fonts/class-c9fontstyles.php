<?php

/**
 * C9 font styles.
 *
 * @package c9
 */
class C9FontStyles
{
	/**
	 * Gets font settings based on defaults and generates code.-arrow-up
	 */
	public static function render($font_array)
	{
		$heading_font    = $font_array['c9_heading_font'];
		$subheading_font = $font_array['c9_subheading_font'];
		$body_font       = $font_array['c9_body_font'];

		//assign CSS name of font based on selected font in customizer
		$c9fonts = array(
			''																	=> '',
			'Abel'                												=> 'Abel',
			'Bebas+Neue'          												=> 'Bebas Neue',
			'Lato:wght@100,300,400,400italic,700,900'   						=> 'Lato',
			'Lobster'             												=> 'Lobster',
			'Merriweather:wght@300,400,700,900,400italic,700italic'        		=> 'Merriweather',
			'Montserrat:wght@300,400,700,900,400italic,700italic'				=> 'Montserrat',
			'Muli'                												=> 'Muli',
			'Nunito:wght@300,400,700,900,400italic,700italic'              		=> 'Nunito',
			'Open+Sans:wght@300,400,700,800,400italic,700italic'           		=> 'Open Sans',
			'Open+Sans+Condensed:wght@300,700' 									=> 'Open Sans Condensed',
			'Oswald:wght@200,300,400,400italic,700'              				=> 'Oswald',
			'Playfair+Display:wght@400,700,900,400italic,700italic'    			=> 'Playfair Display',
			'Poppins:wght@300,400,700,900,400italic,700italic'             		=> 'Poppins',
			'PT+Sans:wght@400,700,400italic,700italic'             				=> 'PT Sans',
			'PT+Serif:wght@400,700,400italic,700italic'            				=> 'PT Serif',
			'Quicksand:wght@300;400;700'           								=> 'Quicksand',
			'Raleway:wght@300,400,700,900,400italic,700italic'             		=> 'Raleway',
			'Roboto:wght@300,400,700,900,400italic,700italic'              		=> 'Roboto',
			'Roboto+Condensed:wght@300,400,700,400italic,700italic'    			=> 'Roboto Condensed',
			'Roboto+Slab:wght@300,400,700,900'         							=> 'Roboto Slab',
			'Sen:wght@400,700,800'                 								=> 'Sen',
			'Source+Sans+Pro:wght@300,400,700,900,400italic,700italic'     		=> 'Source Sans Pro',
			'Work+Sans:wght@200,300,400,700,900,400italic,700italic'           	=> 'Work Sans',
		);

		//make the font label human readable so it'll work in css
		foreach ($c9fonts as $c9key => $c9value) {
			// echo "<h1>set: " . $body_font . "body font key: " . $c9key . " body font value:" . $c9value . "</h1>";
			if ($body_font == $c9key) {
				$body_font = $c9value;
			}
		}

		//make the font label human readable so it'll work in css
		foreach ($c9fonts as $c9key => $c9value) {

			if ($subheading_font == $c9key) {
				$subheading_font = $c9value;
			}
		}
		//make the font label human readable so it'll work in css
		foreach ($c9fonts as $c9key => $c9value) {

			if ($heading_font == $c9key) {
				$heading_font = $c9value;
			}
		}

?>
		.c9-site-title,
		.c9.site .h1,
		.c9.site .h2,
		.c9.site .h3,
		.c9.site .h4,
		.c9.site .h5,
		.c9.site .h6,
		.c9.site h1,
		.c9.site h2,
		.c9.site h3,
		.c9.site h4,
		.c9.site h5,
		.c9.site h6,
		.editor-styles-wrapper h1,
		.editor-styles-wrapper h2,
		.editor-styles-wrapper h3,
		.editor-styles-wrapper h4,
		.editor-styles-wrapper h5,
		.editor-styles-wrapper h6
		.entry-content blockquote:before,
		.c9-h,
		.c9-h.h,
		.c9-txl,
		.display-1,
		.display-2,
		.display-3,
		.display-4,
		.display-5,
		.display-6,
		.header-navbar .navbar .nav .search,
		.page-search-results nav .pagination .page-item .page-link,
		.c9.woocommerce nav.woocommerce-pagination ul li span,
		.c9.woocommerce nav.woocommerce-pagination ul li .page-numbers,
		.woocommerce .site-main .woocommerce-breadcrumb,
		.archive nav .pagination .page-item .page-link,
		.blog nav .pagination .page-item .page-link,
		.single .navigation .nav-previous a,
		.single .navigation .nav-next a,
		.header-navbar .search #s,
		.c9 .c9-toggles.is-style-default .c9-toggles-item-heading .c9-toggles-toggle-label,
		.editor-styles-wrapper .c9-toggles.is-style-default .c9-toggles-item-heading .c9-toggles-toggle-label,
		.editor-post-title__block .editor-post-title__input {
		font-family: <?php echo esc_html($heading_font); ?>, helvetica, sans-serif;
		}

		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
		.text-muted,
		.c9 .c9-sh,
		.c9 .text-muted,
		.c9 .c9-heading .c9-h .text-muted,
		.c9 .c9-heading .c9-sh .text-muted,
		.c9 .c9-heading .c9-txl .text-muted,
		.c9-heading.section-heading >.c9-sh {
		font-family: <?php echo esc_html($subheading_font); ?>, helvetica, sans-serif;
		}
		<?php if (!empty($body_font)) { ?>
			:root,
			body,
			body .is-root-container,
			body .editor-styles-wrapper .is-root-container,
			.c9 .wp-block-pullquote,
			.c9 .wp-block-pullquote blockquote p,
			.c9 #wrapper-footer,
			.wp-block-table tr td,
			.btn,
			.btn:visited,
			.entry-content button,
			.entry-content input[type="button"],
			.entry-content input[type="reset"],
			.entry-content input[type="submit"],
			.wp-block-button__link,
			.wp-block-file__button,
			.wp-block-file .wp-block-file__button,
			#mc_embed_signup input[type="email"],
			.c9 input[type="text"],
			.c9 input[type="email"],
			.c9 input[type="url"],
			.c9 input[type="password"],
			.c9 input[type="tel"],
			.c9 textarea,
			#fullscreensearch input[type="search"],
			.c9 .gform_wrapper label.gfield_label,
			.c9 .gform_wrapper legend.gfield_label,
			.c9 .gform_wrapper input[type="text"],
			.c9 .gform_wrapper input[type="password"],
			.c9 .gform_wrapper input[type="tel"],
			.c9 .gform_wrapper textarea,
			.c9 .gform_button.button,
			.c9 .entry-content,
			.navbar,
			.navbar ul li .dropdown-item,
			.navbar ul li a {
			font-family: <?php echo esc_html($body_font); ?>, helvetica, sans-serif;
			}
<?php
		} //end checking for body_font setting
	} //end render function

	/**
	 * Regex powered CSS minifier
	 */
	public static function minify_css($css)
	{
		// some of the following functions to minimize the css-output are directly taken
		// from the awesome CSS JS Booster: https://github.com/Schepp/CSS-JS-Booster
		// all credits to Christian Schaefer: http://twitter.com/derSchepp
		// remove comments
		$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
		// backup values within single or double quotes
		preg_match_all('/(\'[^\']*?\'|"[^"]*?")/ims', $css, $hit, PREG_PATTERN_ORDER);
		for ($i = 0; $i < count($hit[1]); $i++) {
			$css = str_replace($hit[1][$i], '##########' . $i . '##########', $css);
		}
		// remove traling semicolon of selector's last property
		$css = preg_replace('/;[\s\r\n\t]*?}[\s\r\n\t]*/ims', "}\r\n", $css);
		// remove any whitespace between semicolon and property-name
		$css = preg_replace('/;[\s\r\n\t]*?([\r\n]?[^\s\r\n\t])/ims', ';$1', $css);
		// remove any whitespace surrounding property-colon
		$css = preg_replace('/[\s\r\n\t]*:[\s\r\n\t]*?([^\s\r\n\t])/ims', ':$1', $css);
		// remove any whitespace surrounding selector-comma
		$css = preg_replace('/[\s\r\n\t]*,[\s\r\n\t]*?([^\s\r\n\t])/ims', ',$1', $css);
		// remove any whitespace surrounding opening parenthesis
		$css = preg_replace('/[\s\r\n\t]*{[\s\r\n\t]*?([^\s\r\n\t])/ims', '{$1', $css);
		// remove any whitespace between numbers and units
		$css = preg_replace('/([\d\.]+)[\s\r\n\t]+(px|em|pt|%)/ims', '$1$2', $css);
		// shorten zero-values
		$css = preg_replace('/([^\d\.]0)(px|em|pt|%)/ims', '$1', $css);
		// constrain multiple whitespaces
		$css = preg_replace('/\p{Zs}+/ims', ' ', $css);
		// remove newlines
		$css = str_replace(array("\r\n", "\r", "\n"), '', $css);
		// Restore backupped values within single or double quotes
		for ($i = 0; $i < count($hit[1]); $i++) {
			$css = str_replace('##########' . $i . '##########', $hit[1][$i], $css);
		}
		return $css;
	}
}
