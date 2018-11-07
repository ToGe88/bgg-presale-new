<? if($number = get('number')) {
    echo $number;
    $element = page('products')->children()->findBy('prodIndex', $number);
    echo $element->sold();
    if($element->sold() != 'true') {
        echo 'Im trying!';
        try {
            page($element)->update(array(
                'sold' => 'true',
            ), 'de');
            echo 'The book was sold.';
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
} ?>