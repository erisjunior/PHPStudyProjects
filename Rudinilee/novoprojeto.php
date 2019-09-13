<!DOCTYPE html>
<html>
<head>
	<title>Conversor <?php echo " - ".strtoupper($_GET['pagina']); ?></title>
</head>
<body>
<style type="text/css">
	nav{width: 100%;background:#000;position:fixed;top:0px;opacity: 0.8; text-align:center;}
	ol li{display: inline;margin: 5px 10px; padding:30px;}
	ol li a{color: white; text-decoration:none;}
	ol li a:hover{color:blue; }
	#content{padding:40px;margin:10px; color: red}
</style>
<?php  
error_reporting(0);
include("menu.php");
echo "<div id='content'>";
$pg = $_GET['pagina'];
switch ($pg) {
	case 'conversor':
		include ("home.php");
		break;
	
	case 'contato':
		include ("contato.php");
		break;

	case 'portifolio':
		include ("portifolio.php");
		break;	
	case 'sobre':
		include ("sobre.php");
		break;	
	default:
	include("home.php");		
		break;
}echo "</div>";
?>
</body>
</html>