<html>
<head>
	<title>Maigc: The Gathering</title>
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
		<a href="../index.html">
		<img src="../media/1.png" id="menu1" width="25%" style="float:left;">
		</a>
		<a href="./reguli.html">
		<img src="../media/2.png" id="menu2" width="25%" style="float:left;">
		</a>
		<a href="./zaruri.html">
		<img src="../media/3.png" id="menu3" width="25%" style="float:left;">
		</a>
		<a href="./spune.php">
		<img src="../media/4.png" id="menu4" width="25%">
		</a>
	</div>

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