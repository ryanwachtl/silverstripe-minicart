<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<fieldset>
		<input type="hidden" name="cmd" value="_cart" />
		<input type="hidden" name="add" value="1" />
		<input type="hidden" name="business" value="$Business" />
		<input type="hidden" name="item_name" value="$ItemName" />
		<input type="hidden" name="amount" value="$Amount" />
		<input type="hidden" name="currency_code" value="$CurrencyCode" />
		<input type="hidden" name="return" value="$Return" />
		<input type="hidden" name="cancel_return" value="$Cancel" />
		<p><strong>$ItemName</strong><br />${$Amount}</p>
		<input type="submit" name="submit" value="$Button" class="button" />
	</fieldset>
</form>