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
<?php   
	if(isset($_POST['titlu']) && $_POST['titlu']!="" && isset($_POST['content']) && isset($_POST['nume'])) {
	include('../dbconnection.php');
	$success = mysqli_query($connection, 'Insert into povestiri values ("",
		"'.$_POST['titlu'].'",
		"'.$_POST['content'].'",
		"'.$_POST['nume'].'",
		"")');
	if($success) echo '<font color="white">Campania a fost trimisa cu succes!</font>';
	else echo '<font color="white">Din pacate, mesajul nu a fost trimis.</font>';
	}
?>
	<form action="./spune.php" method="POST" style="background-color:#0d1a2b; position:absolute; top:40%; left:20%; min-width:66%; min-height:66%; overflow: auto;">
		<font color=white><b>Titlu:</b></font><br>
		<input type="text" style="width:100%;" name="titlu"><br>
		<font color=white><b>Nume:</b></font><br>
		<input type="text" style="width:100%;" name="nume"><br>
		<font color=white><b>Descriere:</b></font><br>
		<textarea name="content" style="width:100%;" rows="20"></textarea>
		<button type="submit" value="Submit">Timite</button>
	</form>
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