<html>
<head>
	<title>Dungeons and dragons</title>
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
		
	<div style="background-color:rgba(255,255,255,0.4);">
	<!-- Moneda -->
	<select id="cant1">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(1,2)" style="background-color:rgba(0,0,0,0);"><img src="../media/moneda.png" width="150"></button>
	<textarea id="text1" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D4 -->
	<select id="cant2">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(2,4)" style="background-color:rgba(0,0,0,0);"><img src="../media/d4.png" width="150"></button>
	<textarea id="text2" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D6 -->
	<select id="cant3">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(3,6)" style="background-color:rgba(0,0,0,0);"><img src="../media/d6.png" width="150"></button>
	<textarea id="text3" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D8 -->
	<select id="cant4">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(4,8)" style="background-color:rgba(0,0,0,0);"><img src="../media/d8.png" width="150"></button>
	<textarea id="text4" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D10 -->
	<select id="cant5">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(5,10)" style="background-color:rgba(0,0,0,0);"><img src="../media/d10.png" width="150"></button>
	<textarea id="text5" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D12 -->
	<select id="cant6">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(6,12)" style="background-color:rgba(0,0,0,0);"><img src="../media/d12.png" width="150"></button>
	<textarea id="text6" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D20 -->
	<select id="cant7">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(7,20)" style="background-color:rgba(0,0,0,0);"><img src="../media/d20.png" width="150"></button>
	<textarea id="text7" readonly style="height:150px;width:50%;"></textarea> <br> 
	<!-- D100 -->
	<select id="cant8">
	<?php writeOptions(); ?>
	</select>
	<button onclick="randomize(8,100)" style="background-color:rgba(0,0,0,0);"><img src="../media/d100.png" width="150"></button>
	<textarea id="text8" readonly style="height:150px;width:50%;"></textarea> <br> 

	</div>
	
<script>
function randomize(id, tip){
	$resultText = "";
	$q = parseInt($('#cant'+id+' option:selected').val());
	for(var i = 1; i <= $q; i++){
		var val = Math.floor((Math.random() * parseInt(tip)) + 1);
		if(tip == 2) val = val==1?"cap":"pajura";
		else if(tip == 100) val = Math.floor(val/10)*10;  
		$resultText+=val+" ";
		console.log(val);
	}
	$('#text'+id).val($resultText);
}

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

<?php
function writeOptions(){
for($x = 1; $x <= 100; $x++) echo "<option value='$x'>x$x</option>";
}
?>
