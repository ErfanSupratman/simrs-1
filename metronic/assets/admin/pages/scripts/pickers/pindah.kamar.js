var PindahKamar = function () {

    var handleDatetimePicker = function () {

        jQuery(".form_datetime").datetimepicker({
            autoclose: true,
            isRTL: Metronic.isRTL(),
            format: "dd MM yyyy - hh:ii",
            pickerPosition: (Metronic.isRTL() ? "bottom-right" : "bottom-left")
        });
	}
		
    return {
        //main function to initiate the module
        init: function () {
            handleDatetimePicker();
        }
    };
}();