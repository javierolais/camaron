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
            <li><a href="#Principal-wrapper"><font color="White"face="Eras Medium ITC" >Principal</font></a></li>
              <li><a href="nosotros.php"><font color="White"face="Eras Medium ITC" >Nosotros</font></a></li>
              <li><a href="galeria.php"><font color="White"face="Eras Medium ITC" >Galeria</font></a></li>
              <li><a href="contacto.php"><font color="White"face="Eras Medium ITC" >Contacto</font></a></li>
            </ul>
            <hr>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>
    <!-- seccion del encabezado-->
    <center>
    <section id="Principal-wrapper">
      <div class="container descripcion-empresa">
        <div class="row">
          <!-- colunma izquierda-->
          <div class="col-sm-6 texto-cotiza-izq">
          <font color="White">
            <h1><font color="White"face="Castellar" >Ocean Seed</font></h1>
              <br>
              <h2><font color="White"face="Brush Script MT" size = "10" >Granja De Camaron</font></h2>
              <br>
              <br>
            <h3> La vida es solo un montón de experiencias, ¿sabes?. No te dan una medalla en la línea de llegada solo por haber sido bueno. Solamente te mueres.</h3>
          </div>
          <div class="col-sm-6 texto-cotiza-der">
            <div class="cotiza">
              <img src="imagen/o.jpg" width="500" height="500" alt="glee">
            </div>
          </div>
        </div>
      </div>
    </section>
    </center>
    <section id="footer-wrapper">
      <div class="container">
        <div class="row">
            <hr>
          <footer>
            <p><font color="Black">Mind Force | 2017</font> </p>
          </footer>
        </div>
      </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>