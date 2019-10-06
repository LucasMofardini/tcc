<?php
include_once('../Views/cabecalho.php');
session_start();
include_once('../Controller/config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Promoções</title>
</head>
<body>
	<center>
		<br><br>
 		<h1>PROMOÇÕES</h1>
		<img src="imagens/promo.jpg" class="" alt="">
	</center>
</body>
</html>
<style>
@font-face {
src: url(fontes/beloved.otf);
font-family: beloved;
}
	h1{
		background-color: rgb(183,13,41);
		color: white;
		padding-top: 0.5em;
		padding-bottom: 0.5em;
		font-family:  beloved;
		width: 100%;

	}
	h1:hover{
		transform: scale(1.02);
		transition: 0.6s;
	}
h1	{
			transition: transform 0.3s linear 0.1s;
}
img{
	border-radius: 10px;

}
</style>
