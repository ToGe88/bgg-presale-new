<? snippet('header') ?>

<main>
    <article>
        
        <section id="stage">
            <div class="stage__content__wrapper wrapper">
                <div class="stage__content__holder">
                    <div class="stage__content__info">
                        <?= '<h1>'.$page->stageText().'</h1>' ?>
                    </div>
                    <div class="stage__content__promo">
                        <?= '<p class="promo-text">'.$page->stagePromo().'</p>' ?>
                    </div>
                    <div class="stage__content__image">
                        <?= thumb($page->stageImage()->toFile(), array('width' => 200)) ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="text">
            <div class="text__content__wrapper wrapper">
                <div class="text__content__holder">
                    <?= $page->description()->kt() ?>
                </div>
            </div>
        </section>
        <section id="buy">
            <div class="buy__content__wrapper wrapper">
                <div class="buy__content__holder">
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