
<script src="<?php echo base_url();?>metronic/assets/global/plugins/datatablesnew/media/js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function (e) {
		$(".numberrequired").keydown(function (e) {
		    // Allow: backspace, delete, tab, escape, enter and .
		    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		        // Allow: Ctrl+A
		        (e.keyCode == 65 && e.ctrlKey === true) || 
		        // Allow: home, end, left, right
		        (e.keyCode >= 35 && e.keyCode <= 39)) {
		        // let it happen, don't do anything
		        return;
		    }
		    // Ensure that it is a number and stop the keypress
		    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		        e.preventDefault();
		    }
		});

		/**/

	})
	function format_date (date) {
		var sp = date.split('-');
		var tgl = sp[2];
		var thn = sp[0];
		var temp = sp[1];
		var bln = "";
		switch(temp){
			case '01' : bln = "January" ;break;
			case '02' : bln = "February" ;break;
			case '03' : bln = "March" ;break;
			case '04' : bln = "April" ;break;
			case '05' : bln = "May" ;break;
			case '06' : bln = "June" ;break;
			case '07' : bln = "July" ;break;
			case '08' : bln = "Agust" ;break;
			case '09' : bln = "September" ;break;
			case '10' : bln = "October" ;break;
			case '11' : bln = "November" ;break;
			case '12' : bln = "December" ;break;
		}

		var waktu = "";
		if(tgl.length > 2){
			var a = tgl.split(' ');
			waktu = a[0] + " " + bln + " "+ thn + " " + a[1];
		}else{
			waktu = tgl + " " + bln + " "+ thn;
		}
		return waktu;
	}

	function format_date2 (date) {
		var sp = date.split(' ');
		var tgl = sp[0];
		var thn = sp[2];
		var temp = sp[1];
		var bln = "";
		switch(temp){
			case 'January' : bln = "01" ;break;
			case 'February' : bln = "02" ;break;
			case 'March' : bln = "03" ;break;
			case 'April' : bln = "04" ;break;
			case 'May' : bln = "05" ;break;
			case 'June' : bln = "06" ;break;
			case 'July' : bln = "07" ;break;
			case 'Agust' : bln = "08" ;break;
			case 'September' : bln = "09" ;break;
			case 'October' : bln = "10" ;break;
			case 'November' : bln = "11" ;break;
			case 'December' : bln = "12" ;break;
		}

		var waktu = tgl + "/" + bln + "/"+ thn;
		return waktu;
	}

	function format_date3(date){
		var res = date.split("/");
	    var bln = res[1];
		var tgl = res[0];
	    var thn = res[2];
	    var waktu = "";
	    if (thn.length > 4) {
	    	var a = thn.split(' ');
	    	waktu = a[0] + '-' + bln + '-' + tgl + ' '+  a[1];
	    }else{
	    	waktu = thn + '-' + bln + '-' + tgl;
	    }
	    
	    return waktu;
	}
</script>

<!-- END JAVASCRIPTS -->