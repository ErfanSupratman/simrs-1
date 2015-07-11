var FormEditableIGD = function () {

    var initEditables = function () {
        
        $('.gave_on').editable({
            format: 'yyyy-mm-dd hh:ii',
            viewformat: 'dd-mm-yyyy hh:ii',
            datetimepicker: {
                rtl : Metronic.isRTL(),
                todayBtn: 'linked',
                weekStart: 1
            },
            validate: function (v) {
                console.log(v);
                // if (v && v.getDate() == 10) return 'Day cant be 10!';
            },
            success: function(response, newValue) {

                var dethis = $(this);

                var baru = newValue;

                console.log("hasil : "+baru);
                spl = baru.toString().split(" ");
                mm = spl[1]; //need to convert
                switch (mm) {
                    case "Jan":
                        bulan = '01';
                        break;
                    case "Feb":
                        bulan = '02';
                        break;
                    case "March":
                        bulan = '03';
                        break;
                    case "April":
                        bulan = '04';
                        break;
                    case "May":
                        bulan = '05';
                        break;
                    case "June":
                        bulan = '06';
                        break;
                    case "July":
                        bulan = '07';
                        break;
                    case "August":
                        bulan = '08';
                        break;
                    case "September":
                        bulan = '09';
                        break;
                    case "October":
                        bulan = '10';
                        break;
                    case "November":
                        bulan = '11';
                        break;
                    case "December":
                        bulan = '12';
                        break;
                }   

                dd = spl[2];
                th = spl[3];
                wk = spl[4];
                wkt = wk.toString().split(":");
                h = wkt[0];
                m = wkt[1];


                var waktu = th+"-"+bulan+"-"+dd+" "+h+":"+m;
                var pay_id = dethis.closest('tr').find('input.pay-id').val();
                // console.log(waktu);
                update_invoice_waktu(pay_id,waktu);

            }   
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
                console.log(dethis.closest('tr').find('input.pay-id').val());
                console.log(dethis.closest('tr').find('span.price.each').attr('value'));
                //simpan

                var harga = parseInt(dethis.closest('tr').find('span.price.each').attr('value'));
                var pay_id = dethis.closest('tr').find('input.pay-id').val();
                var act_qty = newValue;

                update_invoice_qty(pay_id,harga,act_qty);

				//update subtotal on the row
				subTotal = parseInt(newValue) * harga;
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