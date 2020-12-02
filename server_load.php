<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project - Server Load</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$n_server = 2;

$server_load = array(10,60,50,15,20);

$running_server = "";

shuffle($server_load);

if($server_load[0] < 50)
{
	$running_server = $n_server/2;
}
else{
	$running_server = (2 * $n_server) + 1;
}


?>
<div class = "container-fluid">

<br>
<h1>Project 1 :- Server Load </h1>
<hr>

<div id = "refresh_1_min">
<label class = "h2">Number of server : </label>
<label class = "h2"><?php echo $n_server; ?></label>
<br>

<label class = "h2">Server Load : </label>
<label class = "h2"><?php echo $server_load[0]."%"; ?> ( checks every 1 minute )</label>
<br>
</div>


<div id = "refresh_5_min">
<label class = "h2">Number of server Running : <?php echo round($running_server); ?> ( checks every 5 minutes )</label>
<br>
</div>

</div>

<script>

 $(document).ready(function () {
		var refreshId = setInterval(function()
		{
            $("#refresh_1_min").load("server_load.php #refresh_1_min");
	
	},2000);
	
	var refreshdiv = setInterval(function()
		{
            $("#refresh_5_min").load("server_load.php #refresh_5_min");
	
	},5000 );
	
    });
</script>
</body>
</html>