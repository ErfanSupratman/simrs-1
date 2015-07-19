<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?php echo $this->session->userdata('page_title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>metronic/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>metronic/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>metronic/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>metronic/assets/css/style-responsive.css" rel="stylesheet">

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="login">
	<div id="login-page">
	  	<div class="container">
			<br><br><br><br><br><br>
		    <form class="form-login" action="<?php echo base_url()?>login/operator/login_validation" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
			        <div class="form-group">
			        	<div class="input-icon">
			        		<i class="fa fa-user"></i>	
				            <input type="text" name="user_name" class="form-control" placeholder="User ID" autofocus>
			        	</div>
			        </div>
			        <div class="form-group">
			        	<div class="input-icon">
				        	<i class="fa fa-lock"></i>	
				        	<input type="password" name="user_pass" class="form-control" placeholder="Password">
			        	</div>
			        </div>
		            	<button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		        </div>
		    </form>
		</div>	      	  	
	</div>


<!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>metronic/assets//js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>metronic/assets//js/bootstrap.min.js" type="text/javascript"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url();?>metronic/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url();?>metronic/assets/admin/pages/media/bg/1.jpg", {speed: 500});
    </script>
</body>

<!-- END BODY -->
</html>
</div>
