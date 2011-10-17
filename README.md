## Overview

 SilverStripe module for integrating the PayPal [Mini Cart](https://github.com/jeffharrell/MiniCart). Requires SilverStripe 2.4.x

## Installation ##

 * Unpack contents into a module_minicart folder
 * Adjust settings as needed in _config.php
 * Run `/dev/build`

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