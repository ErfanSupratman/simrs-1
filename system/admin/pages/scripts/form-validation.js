var FormValidation = function () {

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
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
            });

    }
    
    // search pasien validation
    var searchPasien = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var cariPasien = $('#searchPasien');
            var error2 = $('.alert-danger', cariPasien);
            var success2 = $('.alert-success', cariPasien);

            cariPasien.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    pasien_id: {
	                    required: "ID Pasien / Nama Pasien harus diisi!"
                    }                                           
                },
                rules: {
                    pasien_id: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
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
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
					if(cariPasien.valid())
					{
						var input = $('input[name="pasien_id"]').val();
						if(input == '13100099')
						{
							$('#listPasien tbody').empty();
							$('#listPasien tbody:last').
							append('<tr>'+
								'<td><div class="margin-bottom-5">'+
								'<a class="btn btn-sm blue margin-bottom lihat-pasien" href="#lihatPasien" data-toggle="modal" onclick="view (13100099)">'+
								'<i class="fa fa-search"></i>View</a></div>'+
								'<div class="margin-bottom-5"><a class="btn btn-sm yellow margin-bottom">'+
								'<i class="fa fa-edit"></i> Edit</a></div>'+								
								'<a class="btn btn-sm green-haze"><i class="fa fa-plus"></i> Visit</a>'+
								'</td>'+
								'<td>13100099</td>'+
								'<td>R. Agoeng Bhimasta</td>'+
								'<td>Jl. Dr. Wahidin SUdirohusodo No.5-25</td>'+
								'<td>Mahasiswa</td>'+
								'<td>12301923012</td>'+
								'<td>000110</td>'+
								'<td>20 Januari 2042</td>'+
								'<td>Ny. Ibu Bimo</td>'+
								'</tr>');
							$('.list-pasien').show();
						}
						else
						{						
							$('#listPasien tbody').empty();
							$('#listPasien tbody:last').append('<tr style="text-align:center;">'+
							'<td colspan="9"><br/>No data.<br/><br/>'+
							'<div class="btn-group">'+
							'<a id="sample_editable_1_new" data-toggle="modal" href="#tambahPasien" class="btn blue">Add New '+
							'<i class="fa fa-plus"></i></a>'+
							'</div></td></tr>');
							$('.list-pasien').show();						
						}
						return false;				
					}
                }
            });

    }    

    return {
        //main function to initiate the module
        init: function () {
            addKamar();
            searchPasien();
        }

    };

}();