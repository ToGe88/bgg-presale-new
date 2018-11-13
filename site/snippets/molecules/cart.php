<? $availableItems = $site->index()->filterBy('sold', 'false'); ?>
<div class="close-icon__wrapper" v-on:click="removeActive()" >
    <div class="close-icon__content" id="cart__toggle">
        <span class="close-icon__line"></span>
        <span class="close-icon__line"></span>
    </div>
</div>
<div id="cart">
    <div class="cart__info">
        <h3>Nummer <span id="cart__item-number"><?= $availableItems->first()->prodIndex(); ?></span> bestellen!</h3>
    </div>

    <? snippet('molecules/_payment-form', array('price' => $page->buyPrice(), 'number' => 1, 'shipping' => $page->buyShipping(), 'currency' => $page->buyCurrency()))?>
</div>
