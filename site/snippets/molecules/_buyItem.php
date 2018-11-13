<div class="buy-item__wrapper <? e($product->sold() == 'true', 'sold') ?>" >
    <div class="buy-item__content">
        <div class="buy-item__number">
            <h2><span class="strike-through"></span><?= $number ?></h2>
        </div>
        <button class="button buy <? e($product->sold() == 'true', 'sold') ?>" v-on:click="updateForm(<?= $number ?>)" data-base-url="<?= $page->url() ?>" data-number="<?= $number ?>" id="<?= $number ?>">Bestellen!</button>
    </div>
</div>



