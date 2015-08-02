var FormEditableIGD = function () {

    var initEditables = function () {
        
        $('.gave_on').editable({
            format: 'yyyy-mm-dd hh:ii',
            viewformat: 'dd/mm/yyyy hh:ii',
            validate: function (v) {
                if (v && v.getDate() == 10) return 'Day cant be 10!';
            },
            datetimepicker: {
                rtl : Metronic.isRTL(),
                todayBtn: 'linked',
                weekStart: 1
            },
        });

        $('.additional_info').editable({
            showbuttons: 'bottom'
        });
        
		var invoiceTable = $('#invoiceBill');        
		var price = parseInt(invoiceTable.find('.price.each').attr('value'));
		$('.qty').editable({
			success: function(response, newValue) {
				var dethis = $(this);
                console.log(newValue);
                // console.log(dethis.closest('tr').find('input.pay-id').val());
                console.log(dethis.closest('tr').find('span.price.each').attr('value'));
                //simpan

                var harga = parseInt(dethis.closest('tr').find('span.price.each').attr('value'));
                // var pay_id = dethis.closest('tr').find('input.pay-id').val();
                // var act_qty = newValue;

                // update_invoice_qty(pay_id,harga,act_qty);
				//update subtotal on the row
				subTotal = parseInt(newValue) * harga;
                dethis.closest('tr').find('input.price-total').val(subTotal);
				dethis.closest('tr').find('span.subtotal').text(subTotal).attr('value',subTotal);
				dethis.closest('tr').find('span.subtotal').formatCurrency({region: 'id-ID'});
				updateGrandTotal();
			}		
		});

    }

    return {
        //main function to initiate the module
        init: function () {

            // init editable elements
            initEditables();

        }

    };

}();