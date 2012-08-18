<?php

define('MODULE_MINICART_DIR', 'module_minicart');

DataObject::add_extension('SiteTree', 'MiniCart');

ShortcodeParser::get()->register('mini_cart_item', array('MiniCart', 'MiniCartItemShortcodeHandler'));

// Your PayPal Email Address
MiniCart::set_business_email("email@example.com");

// Currenty Code
MiniCart::set_currency_code("USD");

// Transaction Success Page
MiniCart::set_return_url("https://example.com/page?success");

// Transaction Canceled Page
MiniCart::set_cancel_return_url("https://example.com/page?cancel");