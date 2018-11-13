<script>
    var cart = new Vue({
        el: '#buy',
        data: {
            number: 1
        },
        mounted: function() {
            this.disableSold();
        },
        methods: {
            updateForm: function (number) {
                changeFields(number);
                activateCart();

                function changeFields(number) {
                    let formSelector = document.querySelector('#_payment-form');
                    formSelector.querySelector('#item_name').value = 'Orte & Begegnungen Nummer '+number;
                    formSelector.querySelector('#item_number').value = 'number-'+number;
                    
                    const numberValue = formSelector.querySelector('#return').value;

                    if(numberValue.includes('number')) {
                        const valueArray = numberValue.split('/');
                        valueArray.pop();
                        valueArray.push('?number='+number);
                        formSelector.querySelector('#return').value = valueArray.join('/');
                    } else {
                        const valueArray = numberValue.split('/');
                        valueArray.push('?number='+number);
                        formSelector.querySelector('#return').value = valueArray.join('/');
                    }

                    let cartSelector = document.querySelector('#cart');
                    cartSelector.querySelector('#cart__item-number').innerHTML = number;
                };

                function activateCart() {
                    const buyForm = document.querySelector('#buy-form');
                    buyForm.classList.add('active');
                }
            },
            disableSold: function () {
                const soldItemsButtons = document.querySelectorAll('button.sold');
                const buttonsArray = Array.from(soldItemsButtons);
                buttonsArray.forEach((element) => {
                    element.setAttribute('disabled', true);
                })
            },
        },

    });
    var cart = new Vue({ 
        el: '#buy-form',
        methods: {
            removeActive: function () {
                const toggle = document.querySelector('#cart__toggle');
                const cart = document.querySelector('#buy-form');
                cart.classList.remove('active');
            },
        }
    });
    if (document.querySelector('#thanks')) {
        var thanks = new Vue({
            el: '#thanks',
            methods: {
                closeOverlay: () => {
                    const thanksOverlay = document.querySelector('#thanks');
                    thanksOverlay.style.display = 'none';
                }
            }
        })
    }
    
</script>
<script>

    // Smooth Scroll to Anchor
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        var headerHeight = $('#jumpmarks').height() + 60;
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 100
        }, 750);
    });
    
    //Header Scroll
    var didScroll;
    var lastScrollTop = 0;
    var delta = 10;
    var navbarHeight = $('#jumpmarks').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled(navbarHeight);
            didScroll = false;
        }
    }, 250);

    function hasScrolled(navbarHeight) {
        
        var st = $(this).scrollTop();

        if ($(this).scrollTop() > window.innerHeight - navbarHeight) {
            $('#jumpmarks').addClass('nav-fixed');
        } else if ($(this).scrollTop() < window.innerHeight - navbarHeight) {
            $('#jumpmarks').removeClass('nav-fixed');
        }

    }
	
</script>
</body>
</html>