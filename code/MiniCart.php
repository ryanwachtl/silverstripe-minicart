<?php

class MiniCart extends DataExtension
{
    
    protected static $business_email = "labs-feedback-minicart@paypal.com";
    
    protected static $currency_code = "USD";
    
    protected static $return_url = "https://minicart.paypal-labs.com/?success";
    
    protected static $cancel_return_url = "https://minicart.paypal-labs.com/?cancel";
    
    protected static $cart_config = array();
    
    
    
    public static function set_business_email($email)
    {
        self::$business_email = $email;
    }
    
    public static function set_currency_code($code)
    {
        self::$currency_code = $code;
    }
    
    public static function set_return_url($url)
    {
        self::$return_url = $url;
    }
    
    public static function set_cancel_return_url($url)
    {
        self::$cancel_return_url = $url;
    }
    
    public static function set_cart_config($config)
    {
        if (!is_array($config)) {
            return;
        }
        self::$cart_config = $config;
    }
    
    protected function getCartCustomizations()
    {
        $config = self::$cart_config;
        
        if ($config && is_array($config)) {
            return Convert::array2json($config);
        }
        
        return;
    }
    
    public static function MiniCartItemShortcodeHandler($attributes, $content = null, $parser = null)
    {
        if (empty($attributes['name']) || empty($attributes['price'])) {
            return;
        }
        $item_name = $attributes['name'];
        $item_price = $attributes['price'];
        $button = (!empty($content)) ? $content : 'Add to cart';
        
        $data = new ArrayData(
            array(
                'ItemName' => $item_name,
                'Amount' => $item_price,
                'Button' => $button,
                'Business' => self::$business_email,
                'CurrencyCode' => self::$currency_code,
                'Return' => self::$return_url,
                'Cancel' => self::$cancel_return_url
            )
        );
        
        return $data->renderWith('MiniCartItem');
    }
    
    public function ViewCart($button = 'View your cart')
    {
        $data = new ArrayData(
            array(
                'Business' => self::$business_email,
                'Button' => $button
            )
        );
        
        return $data->renderWith('ViewCart');
    }
    
    public function contentcontrollerInit($controller)
    {
        $minicart_js_path = '/vendor/MiniCart/dist/minicart.min.js';
        if (Director::isDev()) {
            $minicart_js_path = '/vendor/MiniCart/dist/minicart.js';
        }
        Requirements::javascript(MODULE_MINICART_DIR . $minicart_js_path);
        Requirements::customScript('PAYPAL.apps.MiniCart.render(' . $this->getCartCustomizations() . ');', 'minicart');
    }
}
