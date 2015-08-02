var FormValidationRegistration = function () {

    // search pasien validation
    var searchPasien = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var cariPasien = $('#searchPasien');
            var errorSearch = $('.alert-danger', cariPasien);
            var successSearch = $('.alert-success', cariPasien);

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
                    successSearch.hide();
                    errorSearch.show();
                    Metronic.scrollTo(errorSearch, -200);
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
                    successSearch.show();
                    errorSearch.hide();

					if(cariPasien.valid())
					{
						var item = {};
					    var number = 1;
					    item[number] = {}
					    item[number]['keyword'] = jQuery("#searchPasienValue").val();
					
					    //update span
					    jQuery.ajax({
							type: "POST",
							url: CI_ROOT+"registrasi/registrasi/cari_process",
							data: item,
							success: function(data)
							{  
							  //berhasil kembalikan hasil        
							  console.log(data);
							  if (data.length > 0) {
                                  // console.log(data);
                                  $('#listPasien tbody').empty();
                                  var waktu; var res; var pretanggal; var tanggal;
                                  for (index = 0; index < data.length; ++index) {
                                      rm_id = data[index]['rm_id'];
                                      nama_lengkap = data[index]['nama_lengkap'];
                                      alamat_tinggal = data[index]['alamat_tinggal'];
                                      pekerjaan = data[index]['pekerjaan'];
                                      tempat = data[index]['tempat_lahir'];
                                      tgl_lahir = data[index]['tanggal_lahir'];

                                        waktu = data[index]['tanggal_lahir'];
                                        res = waktu.split(" "); 
                                        pretanggal = res[0].split("-");
                                        tanggal = pretanggal[2] + "/" + pretanggal[1] + "/" + pretanggal[0] ;

                                      jenis_asuransi = data[index]['jenis_asuransi'];
                                      nomor_asuransi = data[index]['nomor_asuransi'];
                                      tgl_berlaku_asuransi = data[index]['tgl_berlaku_asuransi'];
                                      wali = data[index]['nama_wali'];
                                
                                      $('#listPasien tbody:last').
                                      append('<tr>'+
                                        '<td><div class="margin-bottom-5">'+
                                        '<a class="btn btn-sm green-haze visit visit-pait" href="#visitPasien" data-toggle="modal" onclick="visit('+rm_id+')"><i class="fa fa-plus"></i> Visit</a>'+
                                        '</td>'+
                                        '<td>'+rm_id+'</td>'+
                                        '<td class="nama-pasien">'+nama_lengkap+'</td>'+
                                        '<td>'+alamat_tinggal+'</td>'+
                                        '<td>'+pekerjaan+'</td>'+
                                        '<td>'+tempat+', '+tanggal+'</td>'+
                                        '<td>'+nomor_asuransi+'( '+jenis_asuransi+' )</td>'+
                                        '<td>'+tgl_berlaku_asuransi+'</td>'+
                                        '<td>'+wali+'</td>'+
                                        '</tr>');
                                      $('.list-pasien').show();
                                      $('#tombolCari').attr('disabled','disabled');  
                                      $('#searchPasienValue').attr('disabled','disabled');
                                  }                                       
                              }
                              else {
                                     $('#listPasien tbody').empty();
                                      $('#listPasien tbody:last').
                                      append('<tr>'+
                                        '<td colspan="9" style="text-align:center;font-color:red">data tidak ditemukan</td>'+
                                        '</tr>');
                                      $('.list-pasien').show();
                                      $('#tombolCari').attr('disabled','disabled');                                
                                      $('#searchPasienValue').attr('disabled','disabled');
                               }
           
							},
							error: function (data)
							{  
							  //gagal
							  console.log('pait');
							}
						   });						
						return false;				
					}
                }
            });

    }     

    // visit pasien validation
    var visitPasien = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var kunjunganPasien = $('#form_visitPasien');
            var errorVisit = $('.alert-danger', kunjunganPasien);
            var successVisit = $('.alert-success', kunjunganPasien);

            kunjunganPasien.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    departemen: {
	                    required: "Departemen / Poli tujuan periksa harus diisi!"
                    },
                    rujukan: {
	                    required: "Jenis rujukan harus diisi!"
                    }
                },
                rules: {
                    departemen: {
                        required: true
                    },
                    rujukan: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    successVisit.hide();
                    errorVisit.show();
                    Metronic.scrollTo(errorVisit, -200);
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
                    successVisit.show();
                    errorVisit.hide();
                }
            });

    }
    
    return {
        //main function to initiate the module
        init: function () {
            searchPasien();
            visitPasien();
        }

    };

}();