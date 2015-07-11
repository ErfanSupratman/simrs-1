var Gudang = function () {
	var listPersetujuanTable = function () {

        var table = $('#listPersetujuan');

        // begin: third table
        table.dataTable({
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,
            "language": {
                "lengthMenu": " _MENU_ records"
            },
            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": false,
                "targets": [0]
            }],
            "order": [
                [1, "asc"]
            ] // set first column as a default sort by asc
        });

        var tableWrapper = jQuery('#listPersetujuan_wrapper');

        table.find('.group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).attr("checked", true);
                } else {
                    $(this).attr("checked", false);
                }
            });
            jQuery.uniform.update(set);
        });

        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }
    
    var statusApproval = function () {

	    jQuery('#approvalSupply').on('click', '.action a', function(){
            // console.log('bajigur');

		    var thisRow = jQuery(this).closest('tr');
		    var dethis = jQuery(this);
		    var status = dethis.attr('value');

		    if(status == 'Approved')
		    {
                //tampilkan status
			    status = '<span class="label label-xs label-success">Disetujui</span>';
                tombol = '<a href="#" class="btn default btn-xs red" value="Rejected"><i class="fa fa-ban"></i> </a>';
                //enable
                thisRow.find('.qty-persetujuan').removeAttr('disabled');
                thisRow.find('.tgl-kadaluwarsa').removeAttr('disabled');

                // console.log('permintaan : ' + thisRow.find('.permintaan').text());
                // console.log('stok : ' + thisRow.find('.stok-gudang').text());

                if ( parseInt(thisRow.find('.permintaan').text()) > parseInt(thisRow.find('.stok-gudang').text()) ) 
                {
                    console.log(parseInt(thisRow.find('.stok-gudang').text()))
                    thisRow.find('.qty-persetujuan').val(parseInt(thisRow.find('.stok-gudang').text()));
                    thisRow.find('.qty-persetujuan').text(parseInt(thisRow.find('.stok-gudang').text()));
                }           
                else if ( parseInt(thisRow.find('.permintaan').text()) < parseInt($(this).closest('tr').find('.stok-gudang').text()) )
                {
                    console.log(parseInt(thisRow.find('.permintaan').text()))
                    thisRow.find('.qty-persetujuan').val(parseInt(thisRow.find('.permintaan').text()));
                    thisRow.find('.qty-persetujuan').text(parseInt(thisRow.find('.permintaan').text()));
                }           
		    }
		    else
		    {
                status = '<span class="label label-xs label-danger">Ditolak</span>';
                tombol = '<a href="#" class="btn default btn-xs green-haze" value="Approved"><i class="fa fa-check"></i> </a>';
			    thisRow.find('.qty-persetujuan').text('0');
                thisRow.find('.qty-persetujuan').val('0');
                thisRow.find('.qty-persetujuan').attr('disabled','disabled');
                thisRow.find('.tgl-kadaluwarsa').text('');
                thisRow.find('.tgl-kadaluwarsa').val('');
                thisRow.find('.tgl-kadaluwarsa').attr('disabled','disabled');
                // thisRow.find('.tgl-kadaluwarsa').attr('disabled','disabled');
                // thisRow.find('.tgl-kadaluwarsa').attr('disabled','disabled');
		    }
		    // dethis.closest('td').find('a').addClass('disabled');
		    // thisRow.find('.qty').editable('option', 'disabled', true);		    
		    thisRow.find('.status').empty().append(status);
            //tampilkan tombol tolak
            thisRow.find('.action').empty().append(tombol);
						
		    return false;
	    });
	    
    }
    
    return {

        listPersetujuan: function(){
	        listPersetujuanTable();
        },
        status: function(){
	        statusApproval();
        }

    };    
}();