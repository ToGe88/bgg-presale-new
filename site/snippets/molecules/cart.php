<? $availableItems = $site->index()->filterBy('sold', 'false');
    // echo $availableItems; 
?>
<div id="cart">
    Lass mal Nummer <span id="cart__item-number"><?= $availableItems->first()->prodIndex(); ?></span> bestellen!

    <? snippet('molecules/_payment-form', array('price' => $page->buyPrice(), 'number' => 1, 'shipping' => $page->buyShipping(), 'currency' => $page->buyCurrency()))?>
</div>
