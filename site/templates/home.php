<? snippet('header') ?>

<main>
    <article>
        <section id="cancelled">
        </section>
        <? if($number = get('number')): ?>
            <section id="thanks">
                <div class="thanks__content">
                    Danke, dass du <em>Orte & Begegnungen Nummer <?= $number ?></em> bestellt hast.
                    Alles Weitere per Mail.
                    <button v-on:click="closeOverlay()">Zurück</button>
                </div>
            </section>
        <? endif ?>

        <section id="stage">
            <div class="stage__content__wrapper wrapper">
                <div class="stage__content__title">
                    <h1>Orte & <br/>
                    Begegnungen</h1>
                </div>
                <div class="stage__content__holder">
                    <div class="stage__content__info">
                    </div>
                    <div class="stage__content__promo">
                        <?= '<p class="promo-text">'.$page->stagePromo().'</p>' ?>
                    </div>
                </div>
                <div class="stage__content__image">
                    <?= thumb($page->stageImage()->toFile(), array('width' => 2000)) ?>
                </div>
            </div>
        </section>
        <section id="jumpmarks">
            <div class="jumpmarks__content__wrapper wrapper">
                <ul class="jumpmarks__list">
                    <li class="jumpmarks__item">
                        <a href="#info">Info</a>
                    </li>
                    <li class="jumpmarks__item">
                        <a href="#preview">Preview</a>
                    </li>
                    <li class="jumpmarks__item">
                        <a href="#buy">Vorbestellen</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="info">
            <div class="text__content__wrapper wrapper wrapper--small">
                <div class="text__content__holder">
                    <h4>Info</h4>
                    <?= $page->description()->kt() ?>
                </div>
            </div>
        </section>

        <section id="preview">
            <div class="preview__content__wrapper wrapper wrapper--small">
                <h4>Preview</h4>
                <iframe src="https://e.issuu.com/anonymous-embed.html?u=louisefortune7&d=issuu_test_document" width="944" height="500" frameborder="0" allowfullscreen="true"></iframe>
            </div>
        </section>

        <section id="buy">
            <div class="buy__content__wrapper wrapper">
                <div class="buy__content__holder">
                    <h4>Vorbestellen</h4>
                    <?  $index = 1; 
                        foreach($site->index()->findBy('uid', 'products')->children() as $product) {
                            snippet('molecules/_buyItem', array('product' => $product, 'number' => $index, 'price' => $page->buyPrice()));
                            $index++;
                        };
                    ?>
                    
                </div>
            </div>
        </section>

        <section id="buy-form">
            <? snippet('molecules/cart', array('price' => $page->buyPrice(), 'number' => 1, 'shipping' => $page->buyShipping(), 'currency' => $page->buyCurrency())) ?>
        </section>
    </article>
</main>

<? snippet('footer') ?>