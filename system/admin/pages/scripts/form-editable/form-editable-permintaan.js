var FormEditablePermintaan = function () {

    var formApproval = function () {
        
		var invoiceTable = $('#approvalSupply');        
		var price = parseInt(invoiceTable.find('.price.each').attr('value'));
		$('.qty').editable({
			success: function(response, newValue) {
				var dethis = $(this);
                console.log(newValue);
			}		
		});

    }

    return {

        approval: function () {
            formApproval();
        }

    };

}();