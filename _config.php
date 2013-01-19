<?php

define('MODULE_MINICART_DIR', basename(dirname(__FILE__)));

DataObject::add_extension('SiteTree', 'MiniCart');

ShortcodeParser::get()->register('mini_cart_item', array('MiniCart', 'MiniCartItemShortcodeHandler'));

// --------------------------------------------------------------------------------
// below this line, you may comment out and move into mysite/_config.php
// --------------------------------------------------------------------------------

// Your PayPal Email Address
MiniCart::set_business_email('email@example.com');

// Currenty Code
MiniCart::set_currency_code('USD');

// Transaction Success Page
MiniCart::set_return_url('https://example.com/page?success');

// Transaction Canceled Page
MiniCart::set_cancel_return_url('https://example.com/page?cancel');

// MiniCart Customizations and Localization
// All optional, only use what you need
MiniCart::set_cart_config(array(

	// Localization
	'strings' => array(
		'button' => 'Checkout',
		'subtotal' => 'Subtotal',
		'shipping' => 'does not include shipping &amp; tax'
	),
	
	// The edge of the page the cart should pin to. Set to left or right.
	'displayEdge' => 'right',
	
	// Distance from the edge the cart should appear.
	'edgeDistance' => '50px',
	
	// The base path of your website to set the cookie to (useful for shared website hosting)
	'cookiePath' => '/',
	
	// The number of days to keep the cart data
	'cartDuration' => 30,
	
	// Boolean to determine if the cart should "peek" when it's hidden with items.
	'peekEnabled' => true,
	
	// The PayPal URL to use if you are accessing sandbox or another version of the PayPal website.
	'paypalURL' => 'https://www.paypal.com/cgi-bin/webscr',
	
	// The base URL to the visual assets
	'assetURL' => MODULE_MINICART_DIR . '/vendor/minicart/'
	
));