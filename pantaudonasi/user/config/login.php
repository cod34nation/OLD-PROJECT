<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
		function initialize() {
        var mapDiv = document.getElementById('map-canvas');
        var map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(-5.390060,105.239380),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
		}
	google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
   <meta charset="utf-8">
  <title>Sistem Informasi GIS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php include "config/menu.php"; ?>
					
					<ul class="nav navbar-nav navbar-right">
						<?php include "config/menuadmin.php"; ?>
						
					</ul>
				</div>
				
			</nav>
			
		</div>
	</div>
	<br>
	<br>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="span5  offset1 well">
			<form method="POST" id="form1" class="form-horizontal" action="login/login_action.php">
			
		
					<legend>
						Login 
					</legend>
			<div class="control-group">
		<label class="control-label" for="nama">username</label>
		<div class="controls">
			<input   type="text" name='username'>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Password</label>
		<div class="controls">
			<input   type="password" name='password'>
		</div>
	</div>
				
					<div class="row">
						<div class="span4 offset2">
						<input type="submit"  name="login" class="btn btn-primary" value='login'>
						
					</div>
					</div>
			
			</form>
			<script language="javaScript" type="text/javascript"
	xml:space="preserve">
	//You should create the validator only after the definition of the HTML form
	var f  = new Validator("form1");
	f.EnableOnPageErrorDisplaySingleBox();
	f.EnableMsgsTogether();
	

		f.addValidation("username","req","username Tidak Boleh kosong ");
		
			f.addValidation("password","req","password Tidak Boleh kosong ");
			
	
	
	</script>
	<div id="form1_errorloc" style="color:#ff0000">
		<? 
		if(isset($_GET['s'])){
			echo "Login Gagal, cek kembali username dan password anda!";
		}
		?>
	</div>
</div>
		
		
		
		</div>
		</div>
		</div>
	</div>
</div>
	
</body>
</html>
