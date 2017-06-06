<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CAMARONERA</title>

    <!--referencia del archivo CSS-->
    <link rel="stylesheet" href="css/dise%C3%B1o.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'/>
    <script src = "js/modernizr.custom.js"> </script>
    <script src = "js/respond.min.js"> </script>
    <script src = "js/jquery.carouFredSel-5.5.2.js" type = "text/javascript"> </script>
    <script type="text/javascript">//<![CDATA[

$(function(){
    $('#slider div:gt(0)').hide();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(0)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider');}, 2000);
});
//]]></script>
    <!--Open Sans de Google Fonts-->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
  <header>
  <!--Barra de estado-->
  <nav class="navbar navbar-nav navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
              <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">
           <img src="imagen/cama.png">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="contacto.php"><font color="White"face="Eras Medium ITC" >Contacto</font></a></li> 
             <li><a href="modificar.php"><font color="White"face="Eras Medium ITC" >Modificar</font></a></li> 
            </ul>
            <hr>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>
<?php
ob_start();
include("conexion/conexion.php");
$ID = $_GET["ID"];

$consultas = mysql_query("SELECT * FROM usuario WHERE Id_Usuario='".$ID."'", $conexion) or die(mysql_error());

		while($filax = mysql_fetch_array($consultas))
		{	
			$user=$filax['Usuario'];
			$pass=$filax['Password'];
            $canti=$filax['cantidad'];
            $cel=$filax['numero'];
            $correo=$filax['email'];
		}
		
if(isset($_POST['modificar']))
{
	if(isset($_POST['user2']) && !empty($_POST['user2']) && isset($_POST['pass2']) && !empty($_POST['pass2'])&& isset($_POST['can2']) && !empty($_POST['can2']) && isset($_POST['num2']) && !empty($_POST['num2']) && isset($_POST['e2']) && !empty($_POST['e2']))
	{
		$usuario2 = $_POST['user2'];
		$pass2 = $_POST['pass2'];
        $canti2 = $_POST['can2'];
        $cel2=$_POST['num2'];
        $correo2=$_POST['e2'];
		
		mysql_query("UPDATE usuario SET Usuario = '$usuario2', Password = '$pass2', cantidad = '$canti2', numero = '$cel2', email = '$correo2' WHERE Id_Usuario = '$ID'", $conexion) or die(mysql_error());
		
		header('refresh: 1; url=modificar.php');
		
		echo "<p style='color:green;'>MODIFICACION REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "error";
	}
}
?>

<form name="formulario" method="post" action="">
     
    <input type="text" name="user2" value="<?php echo $user;?>" maxlength="30" size="40">
    <br>
    <br>
    <input value="<?php echo $pass;?>" type="text" name="pass2" maxlength="30" size="40">
    <br>
    <br>
     <input value="<?php echo $canti;?>" type="text" name="can2" maxlength="30" size="40">
    <br>
    <br>
     <input value="<?php echo $cel;?>" type="text" name="num2" maxlength="30" size="40">
    <br>
    <br>
     <input value="<?php echo $correo;?>" type="text" name="e2" maxlength="30" size="40">
    <br>
    <br>
    <input  type="submit"  value="Modificar" name="modificar">
    
</form>
<br />
</body>
</html>