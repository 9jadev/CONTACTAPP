<?php

if(isset($_POST["screen"]))
{
 $url = 'transaction.php?amount='.$_POST["amount"].'&to='.$_POST["to"].'&from='.$_POST["from"];
 header("Location: https://btcscreenshot.herokuapp.com/".$url);
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>How to capture website screen shot from url in php</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:100%;
   max-width:720px;
   margin:0 auto;
  }
  </style>
 </head>
 <body>

  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="index.php">Home</a></li>
    <li role="presentation" class="active"><a href="trans.php">Transaction</a></li>
  </ul>
  <div class="container box">
   <br />
   <h2 align="center">How to capture website screen shot from url in php</h2><br />
   <form method="post">
    <div class="fprm-group">
        <label> Enter Amount </label>
        <input type="number" name="amount" class="form-control input-lg" required placeholder="Enter amount in usd"  />
    </div>
    <div class="fprm-group">
        <label> Enter To </label>
        <input type="number" name="to" class="form-control input-lg" max="10" required placeholder="Enter amount to send"  />
    </div>
     <div class="fprm-group">
        <label> Enter From </label>
        <input type="text" name="from" class="form-control input-lg" required placeholder="Enter from address"  />
    </div>
    <br />
    <br />
    <input type="submit" name="screen" value="Take a Screenshot" class="btn btn-info btn-lg" />
   </form>
   <br />
  
  </div>
  <div style="clear:both"></div>
  <br />
  
  <br />
  <br />
  <br />
 </body>
</html>