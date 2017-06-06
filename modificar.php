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
            </ul>
            <hr>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
</head>
<body>

<?php
include("conexion/conexion.php");


		
		$consulta = mysql_query("SELECT * FROM usuario", $conexion) or die(mysql_error());
		
?>

			<table width="40%" border="4">
            <tr>
                <td><font color="White">NOMBRE </font></td>
				<td><font color="White">APELLIDO </font></td>
                <td><font color="White">CANTIDAD </font></td>
                <td><font color="White">TELEFONO </font></td>
                <td><font color="White">EMAIL </font></td>
                <td><font color="White">ACCION</font></td>
			  </tr>
<?php
		
		while($filas = mysql_fetch_array($consulta))
		{	
			$IDu=$filas['Id_Usuario'];
			$user=$filas['Usuario'];
			$pass=$filas['Password'];
            $canti=$filas['cantidad'];
            $cel=$filas['numero'];
            $correo=$filas['email'];
			
			
?>
			  <tr>
				<td><?php echo "<p style='color:#ccc;'>".$user."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$pass."</p>";?></td>
                 <td><?php echo "<p style='color:#ccc;'>".$canti."</p>";?></td>
                <td><?php echo "<p style='color:#ccc;'>".$cel."</p>";?></td>
                <td><?php echo "<p style='color:#ccc;'>".$correo."</p>";?></td>
                <td><a href="modificar_usuario.php?ID=<?php echo $IDu;?>">modificar</a></td>
			  </tr>
<?php
			
			
		}


?>
</table>
<br/>
</body>
</html>