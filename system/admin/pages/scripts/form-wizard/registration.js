var FormWizardRegistration = function () {


    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='../../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }


            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                messages: {
                    newJenisID: {
	                    required: "Identitas pasien harus diisi!"
                    },
                    nomor_identitas: {
	                  	required: "Nomor identitas pasien harus diisi!"  
                    },
                    newNamaLengkap: {
	                    required: "Nama pasien harus diisi!"
                    },
                    jk: {
	                    required: "Jenis kelamin pasien harus diisi!"
                    },
                    blood: {
	                    required: "Golongan darah pasien harus diisi atau pilih belum diketahui."
                    },
                    agama: {
	                    required: "Agama pasien harus diisi atau pilih tidak diketahui."
                    }, 
                    jenjang_pendidikan: {
	                    required: "Jenjang pendidikan terakhir pasien harus diisi atau pilih tidak ada."
                    },
                    pekerjaan: {
	                    required: "Pekerjaan pasien harus diisi"
                    },
                    nomor_pasien: {
	                    required: "Nomor telepon/kontak yang dapat dihubungi harus diisi!"
                    },
                    alamat: {
	                    required: "Alamat pasien harus diisi!"
                    },
                    kabupaten: {
	                    required: "Alamat kabupaten harus diisi!"
                    },
                    kecamatan: {
	                    required: "Alamat kecamatan harus diisi!"
                    },
                    kelurahan: {
	                    required: "Alamat kelurahan harus diisi!"
                    },
                    statuswali: {
	                    required: "Status wali pasien harus diisi!"
                    },
                    nama_wali: {
	                    required: "Nama wali pasien harus diisi karena pasien memiliki wali (status wali)."
                    },
                    hubungan_wali: {
	                    required: "Hubungan wali pasien harus diisi karena pasien memiliki wali (status wali)."
                    },
                    telepon_wali: {
	                    required: "Nomor telepon/kontak wali pasien harus diisi karena pasien memiliki wali (status wali)."
                    },
                    statusasuransi: {
	                    required: "Status asuransi pasien harus diisi!"
                    },
                    no_asuransi: {
	                    required: "No. Asuransi pasien harus diisi karena pasien memiliki asuransi (status asuransi)."
                    },
                    jenis_asuransi: {
	                    required: "Jenis asuransi pasien harus diisi karena pasien memiliki asuransi (status asurasi)."
                    },
                    tgl_berlaku_asuransi: {
	                    required: "Tanggal berlaku asuransi pasien harus diisi karena pasien memiliki asuransi (status asuransi)"
                    }                                      
                },
                rules: {
                    newJenisID: {
                        required: true
                    },
                    nomor_identitas: {
	                    required: true
                    },
                    newNamaLengkap: {
                        required: true
                    },
                    jk: {
                        required: true
                    },
                    blood: {
	                    required: true
                    }, 
                    agama: {
	                    required: true
                    },
                    jenjang_pendidikan: {
	                    required: true
                    },
                    pekerjaan: {
	                    required: true
                    },
                    alamat: {
	                    required: true
                    },
                    kabupaten: {
	                    required: true
                    },
                    kecamatan: {
	                    required: true
                    },
                    kelurahan: {
	                    required: true
                    }, 
                    statuswali: {
	                    required: true
                    },
                    nama_wali: {
	                    required: true
                    },
                    hubungan_wali: {
	                    required: true
                    },
                    telepon_wali: {
	                    required: true
                    },
                    statusasuransi: {
	                    required: true 
                    },
                    no_asuransi: {
	                    required: true 
                    },
                    jenis_asuransi: {
	                    required: true 
                    },
                    tgl_berlaku_asuransi: {
	                    required: true 
                    }                                       
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    console.log(error);
                    if (element.attr("name") == "jk") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_jk_error");
                    } 
                    else if (element.attr("name") == "statuswali") {
                        error.insertAfter("#form_2_statuswali_error");                        
                    }
                    else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    Metronic.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "jk") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();

					//set jenis kelamin pasien parse
					var jk = '';
					  if(document.getElementById("newJenisKelamin").checked) 
					  { 
					    jk = 'PRIA';
					  }
					  else if(document.getElementById("newJenisKelamin2").checked) 
					  { 
					    jk = 'WANITA';
					  } 
					  else
					  {
					    jk = '-';
					  }                    
                
                    var item = {};
					var number = 1;
					item[number] = {};


                    waktu = jQuery('#newTanggalLahir').val();
                    res = waktu.split(" "); 
                    pretanggal = res[0].split("/");
                    tanggal = pretanggal[2] + "-" + pretanggal[1] + "-" + pretanggal[0] ;

                    waktu2 = jQuery('#newKadaluwarsaAsuransi').val();
                    res = waktu.split(" "); 
                    pretanggal = res[0].split("/");
                    tanggal2 = pretanggal[2] + "-" + pretanggal[1] + "-" + pretanggal[0] ;

					item[number]['nama_lengkap'] = jQuery("#newNamaLengkap").val();
					var nama_lengkap = jQuery("#newNamaLengkap").val();

                    item[number]['rm_id'] = jQuery('#new_rm_id').val();

					item[number]['jenis_kelamin'] = jk;
					item[number]['gol_darah'] = jQuery("#newGol").val();
					item[number]['agama'] = jQuery("#newAgama").val();
					
					item[number]['tempat_lahir'] = jQuery("#newTempatLahir").val();
					item[number]['tanggal_lahir'] = tanggal;
					
					item[number]['jenjang_pendidikan'] = jQuery("#newJenjangPendidikan").val();
					item[number]['pekerjaan'] = jQuery('#newPekerjaan').val();
					
					item[number]['jenis_identitas'] = jQuery("#newJenisID").val();
					item[number]['nomor_identitas'] = jQuery("#newNomorID").val();

                    item[number]['status_kawin'] = jQuery("#newStatusKawin").val();
					
					item[number]['nomor_pasien'] = jQuery("#nomorPasien").val();
					
					item[number]['alamat_tinggal'] = jQuery("#newAlamat").val();
					item[number]['kabupaten'] = jQuery('#newKabupaten').val();
					item[number]['kecamatan'] = jQuery("#newKecamatan").val();
					item[number]['kelurahan'] = jQuery('#newKelurahan').val();
					
					item[number]['nama_wali'] = jQuery("#newNamaWali").val();
					item[number]['hubungan_wali'] = jQuery("#newHubunganWali").val();
					item[number]['nomor_wali'] = jQuery("#newNomorWali").val();
					
					item[number]['jenis_asuransi'] = jQuery("#newJenisAsuransi").val();
					item[number]['nomor_asuransi'] = jQuery("#newNomorAsuransi").val();
					item[number]['tgl_berlaku_asuransi'] = tanggal2;
					
					console.log(item[number]);

					//update span
					jQuery.ajax({

						type: "POST",
						url: CI_ROOT+"registrasi/registrasi/add_process",
						data: item,
						 success: function(data)
						 {  
						    //berhasil kembalikan hasil        
						    console.log(data);

						    $("#submit_form")[0].reset();
							$('#visitPasien .modal-header').find('b').text(data);
							$('#regisRM').val(data);
							$('#regisNama').val(nama_lengkap);
						 },
						 error: function (data)
						 {  
						    //gagal
						    console.log('pait');
						 },
						complete: function(data){
							//tutup modalbox
							$("#tambahPasien").modal("hide");
							$("#visitPasien").modal("show");
						}							 
						
					});     
                    
                }

            });

            var displayConfirm = function() {
                $('#tab4 .form-control-static', form).each(function(){
                    var input = $('[name="'+$(this).attr("data-display")+'"]', form);
                    if (input.is(":radio")) {
                        input = $('[name="'+$(this).attr("data-display")+'"]:checked', form);
                    }
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    } else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    } else if ($(this).attr("data-display") == 'payment') {
                        var payment = [];
                        $('[name="payment[]"]:checked').each(function(){
                            payment.push($(this).attr('data-title'));
                        });
                        $(this).html(payment.join("<br>"));
                    }
                });
            }

            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    displayConfirm();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                Metronic.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index, clickedIndex) {
                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }
                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').hide();
        }

    };

}();