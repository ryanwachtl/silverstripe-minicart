## Overview

 SilverStripe module that adds the PayPal [Mini Cart](https://github.com/jeffharrell/MiniCart) to your SilverStripe Pages. Requires SilverStripe 3.0.x

## Installation ##

 * cd ~/Sites/yourSilverStripeProject/
 * git clone https://github.com/ryanwachtl/silverstripe-mini-cart-module.git minicart
 * Adjust settings as needed in _config.php
 * Run `/dev/build`
 
## Composer ##
 
`composer require rywa/silverstripe-minicart dev-master`

## Settings ##

Place the following settings in your `mysite/_config.php` file and update it with your information:

- Your PayPal Email Address `MiniCart::set_business_email('email@example.com');`
- Currenty Code `MiniCart::set_currency_code('USD');`
- Transaction Success Page `MiniCart::set_return_url('https://example.com/page?success');`
- Transaction Canceled Page `MiniCart::set_cancel_return_url('https://example.com/page?cancel');`
- MiniCart Customizations and Localization (All optional, only use what you need):

```

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
        'assetURL' => MODULE_MINICART_DIR . '/vendor/MiniCart/'
     ));

```

## Use ##

 To add an "add to cart" button to a page insert the following shortcode, replacing the values for `name` and `price`.

 `[mini_cart_item name="ITEM NAME" price="0.00"]`

 or

 `[mini_cart_item name="ITEM NAME" price="0.00"]Add To Cart[/mini_cart_item]`

 if you want to customize the button text.

 You can also place a "View your cart" button into your templates with the `$ViewCart` placeholder. Optionally, pass some alternate text to use for the button. 

 example: `$ViewCart(View Basket)`

## Links ##

 * [PayPal Mini Cart](https://minicart.paypal-labs.com/) on PayPal Labs
 * [SilverStripe CMS](http://www.silverstripe.org/)

## License ##

	Copyright (c) 2011, Ryan Wachtl
	All rights reserved.

	Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

	Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
	
	Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
	
	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
