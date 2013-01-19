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
MiniCart::set_cart_config(array(
	'strings' => array(
		'button' => 'Checkout',
		'subtotal' => 'Subtotal',
		'shipping' => 'does not include shipping &amp; tax'
	)
));