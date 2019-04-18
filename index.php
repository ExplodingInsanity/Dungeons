<html>
<head>
	<title>Dungeons and Dragons</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body {
background-size:cover;
  background-image: url("./media/background.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
</head>
<body>
	<div style="margin:0px; padding:0px;">
		<a href="">
		<img src="./media/1.png" id="menu1" width="25%" style="float:left;">
		</a>
		<a href="./html/reguli.html">
		<img src="./media/2.png" id="menu2" width="25%" style="float:left;">
		</a>
		<a href="./html/zaruri.php">
		<img src="./media/3.png" id="menu3" width="25%" style="float:left;">
		</a>
		<a href="./html/spune.php">
		<img src="./media/4.png" id="menu4" width="25%">
		</a>
	</div>
<?php include('./dbconnection.php');
$anunturiRes = mysqli_query($connection,"Select * from povestiri order by sticky desc, id desc");
while($anunt = mysqli_fetch_assoc($anunturiRes)){
echo '<div style="background-color:rgba(255,255,255,0.7); max-height:35%;overflow:hidden">
<a href="./html/view.php?contentId='.$anunt['id'].'"><h1>'.$anunt['titlu'].' - '.$anunt['nume'].'</h1></a>
<p>'.$anunt['content'].'
</div><br>';
}
?>
</body>
<script>
	$('#menu1').hover(
function(){
this.setAttribute('src','./media/11.png');
},
function(){
this.setAttribute('src','./media/1.png');
}
);

$('#menu2').hover(
function(){
this.setAttribute('src','./media/22.png');
},
function(){
this.setAttribute('src','./media/2.png');
}
);

$('#menu3').hover(
function(){
this.setAttribute('src','./media/33.png');
},
function(){
this.setAttribute('src','./media/3.png');
}
);
$('#menu4').hover(
function(){
this.setAttribute('src','./media/44.png');
},
function(){
this.setAttribute('src','./media/4.png');
}
);
</script>