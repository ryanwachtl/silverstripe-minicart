
<form action="$FormAction" method="post"><!-- SiteConfig -->
    <fieldset>
        <input type="hidden" name="cmd" value="_cart" />
        <input type="hidden" name="add" value="1" />
        <input type="hidden" name="business" value="$Business" /><!-- SiteConfig -->
        <input type="hidden" name="item_name" value="$ItemName" /><!-- Shortcode -->
        <input type="hidden" name="item_number" value="$ItemNumber"><!-- Shortcode -->
        <input type="hidden" name="amount" value="$Amount" /><!-- Shortcode -->
        <input type="hidden" name="currency_code" value="$CurrencyCode" /><!-- SiteConfig -->
        <input type="hidden" name="return" value="$Return" /><!-- SiteConfig -->
        <input type="hidden" name="cancel_return" value="$Cancel" /><!-- SiteConfig -->
        <input type="submit" name="submit" value="$Button" class="button" /><!-- Shortcode -->
    </fieldset>
</form>
