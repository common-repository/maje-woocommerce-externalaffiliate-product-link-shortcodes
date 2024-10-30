=== WooCommerce: External/Affiliate Product Link Shortcode ===
Contributors: majemedia
Tags: woocommerce, affiliate links, external products, link from pages
Requires at least: 4.5.2
Tested up to: 5.3
Stable tag: 1.1.5
Requires PHP: 5.6
WC requires at least: 2.6
WC tested up to 3.8.1
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Link directly to your external or affiliate products

== Description ==

Link to your external/affiliate WooCommerce products from other places with a shortcode instead of pushing your visitors to the product page first.

For some usage examples see Frequently Asked Questions

== Frequently Asked Questions ==

* `product_id` (required): The ID of your product

    `[wc_external_link product_id='241']Link Text[/wc_external_link]`

* `new_window`: exclude for same window opening or set to 'true' if you want the link to open in a new window

    `[wc_external_link product_id='241' new_window='true']Link Text[/wc_external_link]`

* `link_title`: exclude for none or set to whatever you want your visitor to see when they mouseover the link

    `[wc_external_link product_id='241' link_title='This shows when I hover over the link']Link Text[/wc_external_link]`

* `link_rel`: exclude for none or set to one of the types [from here](https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types)

    `[wc_external_link product_id='241' link_rel='author']Link Text[/wc_external_link]`

* `params`:

    See Examples in link below: add in your url variables (does not add ? or prefixed & to an extension of already in place product variables). This appends to the product url entered into the product.

If you leave product_id blank the link will be '#' (same page).

[Usage and extending examples can be found here](https://majemedia.com/plugins/woocommerce-external-product-link-shortcodes)

=== Contribute! ===

[Github project](https://github.com/MajeMediaLLC/Maje_WooCommerce_External_Product_Link_Shortcodes)

== Screenshots ==
1. Shows Block builder usage example

== Installation ==
1. Have WooCommerce installed and activated
2. Add this plugin or upload the .zip file (downloaded from here)
3. Activate plugin

== Changelog ==
= 1.1.5 =
* Bumped tested to for WP core and WC

= 1.1.4 =
* Changed displayed title of plugin WordPress.org repo

= 1.1.3 =
* Tested against WordPress 5.2.2
* Tested against WooCommerce 3.6.5
* Added assets folder with banner and icon
* Added screenshot of shortcode
* Updated readme and README instructions

= 1.1.2 =
* Tested against WordPress 4.9 in all the places

= 1.1.1 =
* Tested against WordPress 4.9
* Tested against WooCommerce 3.2.4
* Updated readme for wordpress.org with specific usage examples to avoid bad copy/pasting

= 1.1.0 =
* Fixed params and updated documentation
* Tested against WordPress 4.8.3

= 1.0.4 =
* Tested against WordPress 4.7

= 1.0.3 =
* Tested against WordPress 4.6.1

= 1.0.2: =
* Added params argument to shortcode

= 1.0.1: =
* Updated tested to WordPress version.

= 1.0.0: =
* Created plugin