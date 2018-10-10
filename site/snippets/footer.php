<script>
    var app = new Vue({
        el: '#buy',
        data: {
            number: 1,
        },
        methods: {
            updateForm: function (number) {
                let el = document.querySelector('#_payment-form');
                el.querySelector('#item_name').value = 'Orte & Begegnungen Nummer '+number;
                el.querySelector('#item_number').value = 'number-'+number;
            }
        }    
    });

</script>
</body>
</html>