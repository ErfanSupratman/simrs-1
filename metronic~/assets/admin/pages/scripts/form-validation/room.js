var FormValidationRoom = function () {

    // addKamar validation
    var addKamar = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var tambahKamar = $('#tambahtarif_kamar');
            var error1 = $('.alert-danger', tambahKamar);
            var success1 = $('.alert-success', tambahKamar);

            tambahKamar.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    kamar_nama: {
	                    required: "Nama Kamar harus diisi!"
                    },
                    kamar_kelas: {
	                    required: "Kelas Kamar harus diisi!"
                    },
                    kamar_departemen: {
	                    required: "Departemen Kamar harus diisi!"
                    },
                    kamar_tarif: {
	                    required: "Tarif Kamar harus diisi!"
                    }                                             
                },
                rules: {
                    kamar_nama: {
                        required: true
                    },
                    kamar_kelas: {
	                    required: true
                    },
                    kamar_departemen: {
                        required: true
                    },
                    kamar_tarif: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    Metronic.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    success1.show();
                    error1.hide();
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },
            });

    }
    

    return {
        //main function to initiate the module
        init: function () {
            addKamar();
        }

    };

}();