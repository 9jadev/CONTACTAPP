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
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px;font-weight: bold; color: #fad7d7;">
				<p>SENT</p>
			</div>
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px;font-weight: bold; color: #fad7d7; text-align: right;">
				&euro; <?php echo $_GET["amount"]; ?> 
			</div>
		</div>
		<div class="row" style="border-bottom: 1px solid;">
			<div class="col-sm-12" style="font-weight: bold; width: 100%; text-align: right;font-size: 17px; color: #00000078; ">
				Value when sent &euro; <?php echo ($_GET["amount"] * 99.99)/100?>
				<br>
				Transaction Fees: &euro; <?php echo ($_GET["amount"] * 0.011)/100?>
			</div>
			<p style="height: 80px;"> </p>
			<br>
		</div>
		<div class="row" style="border-bottom: 1px solid;">
			<p style="font-size: 25px; font-weight: bold;">Description </p>

			<p style="height: 80px;"> </p>
		</div>
		<div class="row" >
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px;font-weight: bold;">
				<p>To</p>
			</div>
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px; text-align: right;">
				<?php echo $_GET["to"]; ?> Recipents 
			</div>

		</div>
		<div class="row" style="border-bottom: 1px solid;">
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px;font-weight: bold;">
				<p>From</p>
			</div>
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px; text-align: right;">
				<?php echo $_GET["from"]; ?> 
			</div>
			
		</div>
		<p style="height: 20px;"></p>
		<div class="row" style="border-bottom: 1px solid;">
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px;font-weight: bold;">
				<p>Date</p>
			</div>
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px; text-align: right;">
				<?php echo date("F d, Y @ g:ia"); ?> 
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px;font-weight: bold;">
				<p>Status</p>
			</div>
			<div class="col-sm-6" style="padding-top: 20px; font-size: 25px; text-align: right;">
				<p style="color: #008000ab;">Confirmed</p>
			</div>
		</div>
		<button type="button" class="btn btn-primary btn-lg btn-block" style="border-radius: 0px;">VIEW ON BLOCKCHAIN.COM</button>
	</div>
</body>
</html>