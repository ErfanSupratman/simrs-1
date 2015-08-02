var FormEditableApotik = function () {

    var initEditables = function () {

        var formType = jQuery('#form-type').val();       
		var invoiceTable = $('#invoiceBill');        
		var price = parseInt(invoiceTable.find('.price.each').attr('value'));
 		$('.qty').editable({
            validate: function(value) {
                if(formType == 'kasir')
                {
                    var dethis = $(this);
                    if (parseInt(value) > parseInt(dethis.closest('tr').find('input.buy-item-obat-stok').val())) {
                        // alert('jumlah pembelian tidak mencukupi. maksimum : ' + dethis.closest('tr').find('input.buy-item-obat-stok').val())
                        value = dethis.closest('tr').find('input.buy-item-obat-stok').val();
                        return "maksimum pembelian : " + value;
                    }
                }
            },
			success: function(response, newValue) {

                if(formType == 'kasir')
                {
                    var dethis = $(this);
                    if (parseInt(newValue) > parseInt(dethis.closest('tr').find('input.buy-item-obat-stok').val())) {
                        // alert('jumlah pembelian tidak mencukupi. maksimum : ' + dethis.closest('tr').find('input.buy-item-obat-stok').val())
                        // newValue = dethis.closest('tr').find('input.buy-item-obat-stok').val();
                        // console.log('tulisan ini : '+dethis.text());
                    }
                    else {
                        console.log('punya stok cukup');                        
                    } 

                    console.log('jumlah beli : '+newValue);
                    console.log('stok gudang : '+dethis.closest('tr').find('input.buy-item-obat-stok').val());
                    console.log(dethis.closest('tr').find('span.price.each').attr('value'));
                    //simpan

                    dethis.closest('tr').find('input.buy-item-obat-jumlah').val(newValue);                


                    var harga = parseInt(dethis.closest('tr').find('span.price.each').attr('value'));
                    // var pay_id = dethis.closest('tr').find('input.pay-id').val();
                    // var act_qty = newValue;

                    // update_invoice_qty(pay_id,harga,act_qty);

                    //update subtotal on the row
                    subTotal = parseInt(newValue) * harga;
                    dethis.closest('tr').find('span.subtotal').text(subTotal).attr('value',subTotal);
                    dethis.closest('tr').find('span.subtotal').formatCurrency({region: 'id-ID'});
                    updateGrandTotal();
                }
                else {
                    var dethis = $(this);
                    console.log(newValue);
                    // var harga = parseInt(dethis.closest('tr').find('span.price.each').attr('value'));
                    dethis.closest('tr').find('input.buy-item-obat-jumlah').val(newValue);                

                }
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