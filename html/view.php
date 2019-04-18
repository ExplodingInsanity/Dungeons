<html>
<head>
	<title>Dungeons and Dragons</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body {
background-size:cover;
  background-image: url("../media/background.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
</head>
<body>
	<div style="margin:0px; padding:0px;">
		<a href="../index.php">
		<img src="../media/1.png" id="menu1" width="25%" style="float:left;">
		</a>
		<a href="./reguli.html">
		<img src="../media/2.png" id="menu2" width="25%" style="float:left;">
		</a>
		<a href="./zaruri.php">
		<img src="../media/3.png" id="menu3" width="25%" style="float:left;">
		</a>
		<a href="./spune.php">
		<img src="../media/4.png" id="menu4" width="25%">
		</a>
	</div>
	<div style="margin:0px; padding:0px; width:100%; background-color:rgba(255,255,255,0.4);">
<?php   
	if(isset($_GET['contentId']) && $_GET['contentId']!="") {
	include('../dbconnection.php');
	$campaignRes = mysqli_query($connection, "Select * from povestiri where id = ".$_GET['contentId']);
	$campaign = mysqli_fetch_array($campaignRes);
	echo '<center><p style="font-family:Verdana;font-size:22"><b>'.$campaign['titlu'].'</b> - de '.$campaign['nume'].'</p>';
	echo '<p style="font-family:Verdana;font-size:22">'.$campaign['content'].'</p>';
	}
?>
</body>
<script>
	$('#menu1').hover(
function(){
this.setAttribute('src','../media/11.png');
},
function(){
this.setAttribute('src','../media/1.png');
}
);

$('#menu2').hover(
function(){
this.setAttribute('src','../media/22.png');
},
function(){
this.setAttribute('src','../media/2.png');
}
);

$('#menu3').hover(
function(){
this.setAttribute('src','../media/33.png');
},
function(){
this.setAttribute('src','../media/3.png');
}
);
$('#menu4').hover(
function(){
this.setAttribute('src','../media/44.png');
},
function(){
this.setAttribute('src','../media/4.png');
}
);
</script>