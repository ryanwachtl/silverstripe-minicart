<?php

define('MODULE_MINICART_DIR', 'module_minicart');

DataObject::add_extension('SiteTree', 'MiniCart');

ShortcodeParser::get()->register('mini_cart_item', array('MiniCart', 'MiniCartItemShortcodeHandler'));

MiniCart::set_business_email("me@example.com");
MiniCart::set_currency_code("USD");
MiniCart::set_return_url("https://example.com/page?success");
MiniCart::set_cancel_return_url("https://example.com/page?cancel");