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
    <input type="hidden" name="return" value="<?= $page->url() ?>" id="return">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="cancel_return" value="<?= $page->url() ?>/#cancelled">
    <!-- Provide a drop-down menu option field. -->
    <input type="hidden" name="shipping" value="Versand">Versandoptionen <br />
    <select name="shipping">
        <option value="0.00">Ich hole auf der Feier ab! – 0.00 <?= $currency->value() ?></option>
        <option value="<?= $shipping->value() ?>">Ich will's geschickt bekommen! – <?= $shipping->value() ?> <?= $currency->value() ?></option>
    </select> <br />

    <button name="Submit" id="submit" class="btn-submit">Gude lass bestellen!</button>

</form>