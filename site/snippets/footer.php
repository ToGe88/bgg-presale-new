<script>
    var app = new Vue({
        el: '#buy',
        mounted: function() {
            this.updateBoughtItems();
        },
        data: {
            number: 1
        },
        methods: {
            updateForm: function (number) {
                changeFormFields(number);
                updateCart(number);

                function changeFormFields(number) {
                    let formSelector = document.querySelector('#_payment-form');
                    formSelector.querySelector('#item_name').value = 'Orte & Begegnungen Nummer '+number;
                    formSelector.querySelector('#item_number').value = 'number-'+number;
                    
                    const numberValue = formSelector.querySelector('#return').value;

                    if(numberValue.includes('number')) {
                        const valueArray = numberValue.split('/');
                        valueArray.pop();
                        valueArray.push('number:'+number);
                        formSelector.querySelector('#return').value = valueArray.join('/');
                    } else {
                        const valueArray = numberValue.split('/');
                        valueArray.push('number:'+number);
                        formSelector.querySelector('#return').value = valueArray.join('/');
                    }
                };
                
                function updateCart(number) {
                    let cartSelector = document.querySelector('#cart');
                    cartSelector.querySelector('#cart__item-number').innerHTML = number;
                }   
            },
            updateBoughtItems: function () {
                const urlParams = new URLSearchParams(window.location.search);
                let boughtNumber = urlParams.get('number');
                console.log(boughtNumber);
            }                
        }
    });

</script>
</body>
</html>