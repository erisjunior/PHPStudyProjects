<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
	<style type="text/css">
		*{
			margin:0 auto;
			 padding: 0;
			}
		nav{
			width: 100%;
			height: 28px;
			background: #000;
			position: fixed;
		}
		ol li{
			display: inline;
			margin: 5px 10px;
		 	padding: 5px;
		}
		ol li a{
			font: 18px Arial;
			color: red;
			text-decoration: none;
			background: #000;
			padding: 5px 120px;
		}
		ol li a:hover{ 
			color: #000;
		 padding: 5px 120px;
		  background: red;
		   }
		#content{
			padding: 35px;
			color: blue;
		}

	</style>
</head>
<body>
<?php
error_reporting(0);
include("menu.php");
echo "<div id='content'>";
$pg = $_GET['pagina'];

switch ($pg) {
	case 'home':
	include ("home.php");
		break;
		case 'sobre':
	include ("sobre.php");
		break;
		case 'portifolio':
	include ("portifolio.php");
		break;
		case 'contato':
	include ("contato.php");
		break;
	
	default:
	include("home.php"); 
		break;
}
?>

</body>
</html>