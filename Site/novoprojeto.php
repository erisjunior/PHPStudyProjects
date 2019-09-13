<!DOCTYPE html>
<html>
<head>
	<title>Site - <?php echo strtoupper($_GET['pagina']);?></title>
</head>
<body>
<style type="text/css">
	nav{width: 100%;background:#000;position:fixed;top:0px;opacity: 0.8; text-align:center;}
	ol li{display: inline;margin: 5px 10px; padding:30px;}
	ol li a{color: white; text-decoration:none;}
	ol li a:hover{color:blue; }
	#content{padding:40px;margin:10px; color: red}
	input{display: block;}
	fieldset{padding: 10px;}
</style>
<?php  
error_reporting(0);
include("menu.php");
echo "<div id='content'>";
$pg = $_GET['pagina'];
switch ($pg) {
	case 'conversor moeda':
		include ("home.php");
		break;
	
	case 'conversor temp':
		include ("contato.php");
		$pg = "contato";
		break;

	case 'cadastro':
		include ("portifolio.php");
		break;	
	case 'forca':
		include ("sobre.php");
		break;	
	default:
	include("home.php");		
		break;
}echo "</div>";
?>
</body>
</html>