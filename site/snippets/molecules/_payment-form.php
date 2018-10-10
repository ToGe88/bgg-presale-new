<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="_payment-form">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="pumuckl.ink@ok.de">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="Orte & Begegnungen Nummer <?= $number ?>" id="item_name">
    <input type="hidden" name="item_number" value="number-<?= $number ?>" id="item_number">
    <input type="hidden" name="amount" value="<?= $price->value() ?>">
    <input type="hidden" name="currency_code" value="<?= $currency->value() ?>">

    <!-- Provide a drop-down menu option field. -->
    <input type="hidden" name="on1" value="Versand">Versandoptionen <br />
    <select name="shipping">
        <option value="Select Shipping">-- Select Type --</option>
        <option value="0.00">Ich hole auf der Feier ab!</option>
        <option value="<?= $shipping->value() ?>">Ich will's geschickt bekommen!</option>
    </select> <br />

    <!-- Display the payment button. -->
    <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="Buy Now">

    <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>