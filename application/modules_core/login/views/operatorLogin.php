<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>RS BHAYANGKARA</title>

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
	  		<!-- <div class="logo">
				<img src="<?php echo base_url()?>metronic/assets/img/logo-login.png" class="logo-defalt" alt="logo"style="
				width: 18%; margin-top: 3%; margin-bottom: -7%;margin-left: 41%;"/> 
			</div> -->
			<br><br><br><br><br><br>
		    <form class="form-login" action="<?php echo base_url()?>dashboard/operator" method="post">

		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		        <div class="form-group">
		        	<div class="input-icon">
		        		<i class="fa fa-user"></i>	
			            <input type="text" class="form-control" placeholder="User ID" autofocus>
			            
		        	</div>
		        </div>

		        <div class="form-group">
		        	<div class="input-icon">
		        	<i class="fa fa-lock"></i>	
		        	<input type="password" class="form-control" placeholder="Password">
		        		
		        	</div>
		        </div>
		            <label class="checkbox">
		             
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            
		            
		            </div>
		
		        </div>
		
		          <!-- Modal --><!-- 
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div> -->
		          <!-- modal -->
		
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
</script>
</body>

<!-- END BODY -->
</html>
</div>
