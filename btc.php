<?php 
  $url = "https://bitpay.com/api/rates";
  $amount = $_GET["amount"];
  $json = json_decode(file_get_contents($url));
  $dollar = $btc = 0;
  foreach($json as $obj){
  	if ($obj->code == "USD") {
  		// echo '1 bitcoin = $'. $obj->rate .' '. $obj->name .' ('. $obj->code .')<br>';
  		$nmo = $amount/$obj->rate;
  	}else {
  		continue;
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>How to capture website screen shot from url in php</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
	 body{
	 	background-color: #7d95d217;
	  }
	  .box
	  {
	   width:100%;
	   max-width:720px;
	   margin:0 auto;
	  }
	  .ico {
	  	font-size: 115px;
    	content: "\f058";
    	color: rgb(22, 82, 240);
	  }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<p style="height: 30px;"> </p>
			<div class="col-md-2 col-xs-12"> </div>
			<div class="col-md-8 col-xs-12">
				<p style="height: 30px;"> </p>
				<div class="text-center">
					<h1> coinbase</h1>
					<i class="fa fa-check-circle ico"></i>	
				</div>
				<p style="height: 30px;"> </p>
				<div class="text-center">
					<p style="font-weight: bold; font-size: 25px;">You just received </p>
					<small style="font-size: 13px;"><?php echo $nmo ?> BTC </small>
				</div>
				<p style="height: 20px;"> </p>
				<p style="height: 20px;"> </p>
				<div class="text-center lead">
					You just recieved <?php echo $nmo ?> BTC (worth $<?php echo $amount;?> USD)
					from an external bitcoin account. it may take up to 6 network configurations 
					before your bitcoin is available.<br>
					<p style="height: 10px;"> </p>
					<button type="button" style="border-radius: 0px;" class="btn btn-primary btn-lg btn-block">Sign in to view transaction </button>
				</div>
			</div>
			<div class="col-md-2 col-xs-12"> </div>

		</div>
	</div>
</body>
</html>