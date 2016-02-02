<?php

class MiniCart extends Object
{

    /**
     * @config
     */
    private static $paypal_url = 'https://www.paypal.com/cgi-bin/webscr';

    /**
     * @config
     */
    private static $paypal_sandbox_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';

    /**
     * @config
     */
    private static $currency_code_options = array(
        'AUD' => 'Australian Dollar (AUD)',
        'BRL' => 'Brazilian Real (BRL)',
        'CAD' => 'Canadian Dollar (CAD)',
        'CZK' => 'Czech Koruna (CZK)',
        'DKK' => 'Danish Krone (DKK)',
        'EUR' => 'Euro (EUR)',
        'HKD' => 'Hong Kong Dollar (HKD)',
        'HUF' => 'Hungarian Forint (HUF)',
        'ILS' => 'Israeli New Sheqel (ILS)',
        'JPY' => 'Japanese Yen (JPY)',
        'MYR' => 'Malaysian Ringgit (MYR)',
        'MXN' => 'Mexican Peso (MXN)',
        'NOK' => 'Norwegian Krone (NOK)',
        'NZD' => 'New Zealand Dollar (NZD)',
        'PHP' => 'Philippine Peso (PHP)',
        'PLN' => 'Polish Zloty (PLN)',
        'GBP' => 'Pound Sterling (GBP)',
        'RUB' => 'Russian Ruble (RUB)',
        'SDG' => 'Singapore Dollar (SDG)',
        'SEK' => 'Swedish Krona (SEK)',
        'CHF' => 'Swiss Franc (CHF)',
        'TWD' => 'Taiwan New Dollar (TWD)',
        'THB' => 'Thai Baht (THB)',
        'TRY' => 'Turkish Lira (TRY)',
        'USD' => 'U.S. Dollar (USD)',
    );

    public static function getMiniCartConfig()
    {
        $settings = new ArrayData(array(
            'Strings' => new ArrayData(array(
                'Button' => addslashes(_t('MiniCartStrings.Button', 'Check Out with <img src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.1/paypal_65x18.png" width="65" height="18" alt="PayPal" />')),
                'ButtonAlt' => addslashes(_t('MiniCartStrings.ButtonAlt', 'Checkout')),
                'Subtotal' => _t('MiniCartStrings.Subtotal', 'Subtotal:'),
                'Discount' => _t('MiniCartStrings.Discount', 'Discount:'),
                'Empty' => _t('MiniCartStrings.Empty', 'Your shopping cart is empty')
            ))
        ));

        return $settings->renderWith('MiniCartConfig');
    }

    public static function get_form_action()
    {
        $test_mode = SiteConfig::current_site_config()->MiniCartTestMode;
        $paypal_url = Config::inst()->get('MiniCart', 'paypal_url');
        $sandbox_url = Config::inst()->get('MiniCart', 'paypal_sandbox_url');

        return ($test_mode) ? $sandbox_url : $paypal_url;
    }

    public static function get_business_email()
    {
        return SiteConfig::current_site_config()->MiniCartEmail;
    }

    public static function get_currency_code_options()
    {
        return Config::inst()->get('MiniCart', 'currency_code_options');
    }

    public static function get_currency_code()
    {
        $code = SiteConfig::current_site_config()->MiniCartCurrency;

        return ($code) ? $code : 'USD';
    }

    public static function get_return_page()
    {
        $page = SiteConfig::current_site_config()->MiniCartReturnPage();

        return ($page && $page->exists()) ? $page->AbsoluteLink() : '?ppsuccess=1';
    }

    public static function get_cancel_page()
    {
        $page = SiteConfig::current_site_config()->MiniCartCancelPage();

        return ($page && $page->exists()) ? $page->AbsoluteLink() : '?ppcancel=1';
    }

}
