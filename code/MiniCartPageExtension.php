<?php

class MiniCartPageExtension extends DataExtension
{

    private static $casting = array(
        'MiniCartItemShortCode' => 'HTMLText'
    );

    public static function MiniCartItemShortCode($arguments, $content = null, $parser = null)
    {
        if (empty($arguments['name']) || empty($arguments['price'])) return;
        $item_name = $arguments['name'];
        $item_number = (isset($arguments['sku'])) ? $arguments['sku'] : null;
        $item_price = $arguments['price'];
        $button = (!empty($content)) ? $content : 'Add to cart';
        $data = ArrayData::create(
            array(
                'FormAction' => MiniCart::get_form_action(),
                'ItemName' => $item_name,
                'ItemNumber' => $item_number,
                'Amount' => $item_price,
                'Button' => $button,
                'Business' => MiniCart::get_business_email(),
                'CurrencyCode' => MiniCart::get_currency_code(),
                'Return' => MiniCart::get_return_page(),
                'Cancel' => MiniCart::get_cancel_page()
            )
        );

        return $data->renderWith('MiniCartItem');
    }

    public function ViewCartButton($button = 'View cart')
    {
        $config = SiteConfig::current_site_config();
        $data = new ArrayData(
            array(
                'Business' => $config->MiniCartEmail,
                'Button' => $button
            )
        );

        return $data->renderWith('ViewCartButton');
    }

    public function contentcontrollerInit($controller)
    {
        $minicart = (Director::isDev() || Director::isTest()) ? 'minicart.js' : 'minicart.min.js';
        $settings = MiniCart::getMiniCartConfig();
        $config = SiteConfig::current_site_config();
        Requirements::javascript(MODULE_MINICART_DIR . '/bower_components/minicart/dist/' . $minicart);
        Requirements::customScript('paypal.minicart.render(' . $settings . ');', 'minicart');
        // reset cart after successful checkout
        if (isset($_GET['ppsuccess']) || $this->owner->ID == $config->MiniCartReturnPageID) {
            Requirements::customScript('paypal.minicart.reset();', 'minicart_reset');
        }
    }

}
