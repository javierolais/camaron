<!DOCTYPE html> 
<html>
<head>
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
  <meta charset="utf-8">
  <title> FireBase </title>
  <script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
</head>
<body>
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
  <div class="container">
      <br>
      <br>
      <br>
    <input id="txtEmail" type="email" placeholder="Email">
    <input id="txtPassword" type="password" placeholder="Password">
    <button id="btnLogin" class="btn btn-action"> Log In </button>
    <button id="btnSignUp" class="btn btn-secondary"> Sign Up </button>
    <button id="btnLogout" class="btn btn-action hide"> Log out </button>
      <img src="imagen/o.jpg" width="500" height="500" alt="glee">
  </div>

  <script src="firebase1.js"> </script>

</body>
</html>