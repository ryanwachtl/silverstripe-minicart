<?php

class MiniCartSiteConfig extends DataExtension
{

    private static $db = array(
        'MiniCartEmail' => 'Text',
        'MiniCartCurrency' => 'Text',
        'MiniCartTestMode' => 'Boolean'
    );

    private static $has_one = array(
        'MiniCartReturnPage' => 'SiteTree',
        'MiniCartCancelPage' => 'SiteTree'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Minicart',
            new TextField('MiniCartEmail', _t('MiniCartSettings.PAYPAL_EMAIL', 'PayPal Email'))
        );
        $fields->addFieldToTab(
            'Root.Minicart',
            $this->getCurrencyField()
        );
        $fields->addFieldToTab(
            'Root.Minicart',
            new TreeDropdownField('MiniCartReturnPageID', _t('MiniCartSettings.CHECKOUT_COMPLETE_PAGE_LABEL', 'Choose a page to show after completing checkout'), 'SiteTree')
        );
        $fields->addFieldToTab(
            'Root.Minicart',
            new TreeDropdownField('MiniCartCancelPageID', _t('MiniCartSettings.CHECKOUT_CANCEL_PAGE_LABEL', 'Choose a page to show after canceling checkout'), 'SiteTree')
        );
        $fields->addFieldToTab(
            'Root.Minicart',
            new CheckboxField('MiniCartTestMode', _t('MiniCartSettings.TEST_MODE', 'Use PayPal Sandbox'))
        );
    }

    /**
     * @return DropdownField
     */
    protected function getCurrencyField()
    {
        $field = DropdownField::create('MiniCartCurrency', _t('MiniCartSettings.CURRENCY', 'Currency'));
        $field->setSource(MiniCart::get_currency_code_options());
        $field->setEmptyString('--- Select currency code ---');

        return $field;
    }

}
