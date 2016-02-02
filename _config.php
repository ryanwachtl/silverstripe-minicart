<?php

define('MODULE_MINICART_DIR', basename(dirname(__FILE__)));

ShortcodeParser::get('default')->register('minicart_item', array('MiniCartPageExtension', 'MiniCartItemShortCode'));
