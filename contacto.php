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
            <li><a href="index.php"><font color="White"face="Eras Medium ITC" >Principal</font></a></li> 
            </ul>
            <hr>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>
<center>
    <section id="contacto-wrapper">
        <h2><font color="White"face="Forte" size ="10" >Contacto</font></h2>
      <hr>
      <div class="container contacto">
        <div class="row">
          <div class="col-sm-4 col-sm-4-izq">
              <font color = "White">
            <h3>Universidad Autonoma De Sinaloa</h3>
            <hr>
            <h4>Facultad De Ingenieria En Software</h4>
            <hr>
            <h4>Leyva Navarrete Luis Enrique</h4>
            <h4>Salinas Verduzco Daniel Arturo</h4>
            <h4>6871150617</h4>
            <h4>3-02</h4>
              </font>
            <img src="imagen/uas.png" width="200" height="300" alt="glee">
          </div>
            <div class="col-sm-4 col-sm-4-forma">
                <hr>
                <font color = "White">
                    <h1 class="intro-text text-center" >El CLIMA</h1>
                    <hr>
                    <br>
                   </font>
                        <form action="#buscador" method="get">
                        <input type="text" name="palabra" value="
                        <?php  echo ($_GET["palabra"]);  ?>"/>
                        <input type="submit" placeholder="Buscar..." name="buscador" value="Buscar"  />
                        </form>

                        <?php 

                        if ($_GET['buscador'])
                        {

                        $buscar = $_GET['palabra'];

                        if (empty($buscar))
                        {
                        echo "No se ha ingresado ninguna palabra";
                        }
                        else
                        {
                            $xml = simplexml_load_file("http://api.openweathermap.org/data/2.5/find?q=$buscar,&units=mexico&type=accurate&mode=xml&APPID=1604e5ecb495faebb678edacb59ffb16");
                            $temperatura = $xml->list->item->temperature["value"];
                            $presion = $xml->list->item->pressure["value"];
                            $humedad = $xml->list->item->humidity["value"];
                            $Coordenadas = $xml->list->item->city->coord["lon"];
                            $Nombre = $xml->list->item->city["name"];
                            $precipitacion = $xml->list->item->precipitation["mode"];
                            }
                   
                        }
                            ?>
                            <font color = "Reed">
                            <html>
                            <head>
                            <title>CLIMA VIEW </title>
                            </head>
                            <body>
                            <h1>Clima De <?php echo ($Nombre);?> </h1>
                            <ul>
                            <li>Temperatura :
                            <?php echo($temperatura); ?> &deg;F
                            </li>
                            <li>Presion:
                            <?php echo($presion); ?> hPa
                            </li>
                            <li>Humedad :
                            <?php echo($humedad); ?>%
                            </li>
                            <li>Coordenadas :
                            <?php echo($Coordenadas); ?>
                            </li>
                            <li>Precipitacion :
                            <?php echo($precipitacion); ?>
                            </li>
                  </font>
           </ul>
            </div>
            
          <div class="col-sm-4 col-sm-4-forma">
         
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
</head>
<body>

<?php
include("conexion/conexion.php");

if(isset($_POST['registrar']))
{
	if(isset($_POST['user']) && !empty($_POST['user'])  && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['num']) && !empty($_POST['num']) && isset($_POST['can']) && !empty($_POST['can']) && isset($_POST['e']) && !empty($_POST['e']) )
	{ 
		$usuario = $_POST['user'];
		$pass = $_POST['pass'];
        $canti = $_POST['can'];
        $cel=$_POST['num'];
        $correo=$_POST['e'];
		
		mysql_query("insert into usuario(Usuario, Password, cantidad, numero, email) VALUES('$usuario', '$pass','$canti','$cel','$correo')", $conexion) or die(mysql_error());
		
		echo "<p style='color:white;'>INSERCION REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "<p style='color:white;'>INSERCION FALLIDA</p>";
	}
}
?>
<form name="formulario" method="post" action="">
     
    <h1><font color = "White">Registrar Compra</font></h1>
    <input placeholder="Nombre" type="text" name="user" maxlength="30" size="20">
    
    <input placeholder="Apellido" type="text" name="pass" maxlength="30" size="20">
    <br>
    <br>
    <input placeholder="Cantidad" type="number" name="can" maxlength="11" size="40">
    
    <input placeholder="Telefono" type="tel" name ="num" maxlength="10" zise="40">
    <br>
    <br>
    <input placeholder="email@ejemplo.com" type="email" name ="e" maxlength="100" zise="60">
    <br>
    <br>
    <input  type="submit"  value="Registrar" name="registrar">
    <br>
    <br>
    <a href="consultar.php"><font style="color:#2E2EFE;" align="center"  face="Calibri,arial"><h4> Consultar usuarios </h4></font></a>

        <a href="modificar.php"><font style="color:#2E2EFE;" align="center"  face="Calibri,arial"><h4>Modificar usuario </h4></font></a>

    <a href="eliminar.php"><font style="color:#2E2EFE;" align="center"  face="Calibri,arial"><h4>Eliminar usuario</h4></font></a>

    
</form>


         
</body>
</html>
              </div>
        </div>
      </div>
    </section>

    </center>
      <hr>