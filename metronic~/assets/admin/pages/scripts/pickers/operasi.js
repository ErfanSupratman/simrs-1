var Operasi = function () {

    var handleDatetimePicker = function () {

        $(".form_datetime").datetimepicker({
            autoclose: true,
            isRTL: Metronic.isRTL(),
            format: "dd MM yyyy - hh:ii",
            pickerPosition: (Metronic.isRTL() ? "bottom-right" : "bottom-left")
        });
	}
	
	var manageRow = function () {
		jQuery('.add-row-tindakan').click(function() {

			jQuery('#tindakanOperasi tbody').append(
				'<tr>'+
					'<td style="vertical-align:middle">'+
						'<input type="text" class="form-control jenis-tindakan" placeholder="Jenis tindakan yang dilakukan" />'+
					'</td>'+
					'<td style="vertical-align:middle">'+
						'<input type="text" class="form-control jenis-tindakan" placeholder="Hasil dari tindakan yang dilakukan" />'+
					'</td>'+
					'<td style="vertical-align:middle">'+
						'<input type="text" class="form-control jenis-tindakan" placeholder="Rujukan atas tindakan" />'+
					'</td>'+
					'<td style="vertical-align:middle">'+
						'<input type="text" class="form-control jenis-tindakan" placeholder="Keterangan lainnya" />'+
					'</td>'+
					'<td style="text-align:center;vertical-align:middle" class="clear-tindakan"><a href="#" class="fa fa-times"></a></td>'+
				'</tr>'
			);
			return false;
		});

		jQuery(document).on('click','.clear-tindakan',function(e){
	        jQuery(this).closest('tr').remove();
	        e.preventDefault();
	    });		
	    
		jQuery('.clear-tindakan').click(function() {
			jQuery(this).closest('tr').remove();
			return false;
		});
	}	
	
    return {
        //main function to initiate the module
        init: function () {
            handleDatetimePicker();
            manageRow();
        }
    };
}();