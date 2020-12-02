<!DOCTYPE html>
<html lang="en">
<head>
  <title>Restaurant Project</title>
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


$bread = 9;

$bread_vada = $bread;
$bread_samosa = $bread;

$vada = 2;
$samosa = 3;

$samosapav = 2;
$vadapav  = 2;

$samosapav_price = 15;
$vadapav_price = 10;

$vada_counter = 0;
$samosa_counter = 0;




?>
<div class = "container-fluid">

<br>
<h1>Project 2 :- Restaurant Project </h1>
<hr>


<label class = "h2">No.of Bread &nbsp; : <?php echo $bread. "<br> No.of vada &nbsp;&nbsp; : ". $vada."<br> No.of samosa : ". $samosa;?></label><br>


<?php

 while($bread_vada >1 && $vada > 0 )
{
	
	$bread_vada = $bread_vada - 2;
	$vada = $vada - 1;
	$vada_counter++;	
}	


 while($bread_samosa >1 && $samosa > 0 )
{
	
	$bread_samosa = $bread_samosa - 2;
	$samosa = $samosa - 1;
	$samosa_counter++;	

}	
 

 if($vada_counter > $samosa_counter)
 {
	$final_price =  $vada_counter*$vadapav_price;
 }
 else{
	$final_price =  $samosa_counter * $samosapav_price;
 }
 
?>

<br>

<label class = "h2">Maximum Profit : <?php echo $final_price;  ?></label><br>


</div>

</body>
</html>