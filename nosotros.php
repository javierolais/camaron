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
            <li><a href="formulario.php"><font color="White"face="Eras Medium ITC" >Principal</font></a></li> 
            </ul>
            <hr>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>
<section id="Personajes-wrapper">
    <h2><font color="White"face="Forte" size ="10" >Nosotros</font></h2>
      <div class="container-personajes">
        <div class="row">
          <div class="col-sm-4 col-sm-4-nosotros">
            <img src="imagen/camaronesgranjaaaa.jpg">
              <h2><font color="White"face="Berlin Sans FB" >Ocean Seed</font></h2>
            <hr>
            <p><font color="White"face="Berlin Sans FB" >Ocean Seed es una empresa dedica a la cosecha y el cultivo de camaron. Oceand Seed es una empresa con altos estandares de cuidados y de reglamentos, tanto como la higiene y el buen comportamiento de los trabajadores asi tambien como el compromiso que tienen con el trabajo desempeñado para que en todas los estanques se cumpla con la demanda expuesta por los clientes.</font></p>
          </div>
             <div class="col-sm-4 col-sm-4-nosotros">
            <img src="imagen/trabajadores.jpg" width="100" height="213">
              <h2><font color="White"face="Berlin Sans FB" >Mision</font></h2>
            <hr>
            <p><font color="White"face="Berlin Sans FB" >Nuesta empresa se dedica al cuidado y a la crianza de camaron haciendo que sea de la mejor calidad, tambien nos encargamos del compromiso de cada uno de nuestros trabajadores fomentando la responsabilidad y la disciplina dentro del trabajo.</font></p>
          </div>
              <div class="col-sm-4 col-sm-4-nosotros">
            <img src="imagen/estanques.jpg" width="100" height="213">
              <h2><font color="White"face="Berlin Sans FB" >Vision</font></h2>
            <hr>
            <p><font color="White"face="Berlin Sans FB" >Tenemos como meta convertirnos en una granja camaronera mas exitosa por nuestro producto y el gran compromiso por nuestro trabajo para darles la mejor calidad a nuestros clientes, tambien ser los numeros uno en la zona para dar la mejor calidad, y tener el mayor cuidado de higiene para nuestros clientes. </font></p>
          </div>
        </div>
      </div>
    </section>
       <section id="footer-wrapper">
      <div class="container">
        <div class="row">
            <hr>
          <footer>
            <p><font color="Black">Mind Force | 2017</font></p>
          </footer>
        </div>
      </div>
    </section>

