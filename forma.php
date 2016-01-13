<!DOCTYPE html>
<html lang="lv">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon2.ico">

    <title>Arturs Dmitričonoks</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="CV">CV</a></li>
            <li class="active"><a href="forma">Forma</a></li>
            <li><a href="gallery">Galerija</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="cbord">
          <form id="form" method="get" action="">
          <p>
            <input type="text" name="name" minlength="2" placeholder="Vards Uzvards" type="text">
          </p>
          <p>
            <input type="tel" name="phone"  placeholder="Telefons" type="number">
          </p>
          <p>
            <input type="email" name="email"  placeholder="E-pasts" type="email">
          </p>
          <p>
            <input type="text" name="adress"  placeholder="Adrese" type="text">
          </p>
          <p>
            <select name="model" placeholder="Model">
              <option value="E30">E30</option>
              <option value="E36">E36</option>
              <option value="E34">E30</option>
              <option value="E39">E36</option>
              <option value="E32">E32</option>
              <option value="E38">E38</option>
            </select>
          </p>
  <!--         <p>
            check/uncheck <input type="checkbox" class="checkbox" id="check" name="check">
          </p>
           <p>
            <input type="radio" class="radio" id="radio" name="radio" value="3 serija">
            <input type="radio" class="radio" id="radio" name="radio" value="5 serija">
            <input type="radio" class="radio" id="radio" name="radio" value="7 serija">
          </p> -->
          <p>
            <input type="comment" name="comment" placeholder="Komentars" type="text">
          </p>
          <p>
            <div class="g-recaptcha"  data-sitekey="6Lfo2xITAAAAAKI-h1Dbdmahrt9an0WMlBRiaCE0"></div>
          </p>
          <p>
            <input class="submit" type="submit" value ="sutit">
          </p>
          </form>
        </div>
      
    </div><!-- /.container -->

    <footer class="footer">
      <div class="container">
      <p class="text-muted">Autors : <!-- Trigger the modal with a button -->
<button type="button" class="" data-toggle="modal" data-target="#myModal">Arturs Dmitričonoks</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kontakt informācija:</h4>
      </div>
      <div class="modal-body">
        <p> <a href="mailto:dmitrichyonok@inbox.lv">
    dmitrichyonok@inbox.lv</a></p>
    <p>Tālrunis : 27035150</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
    </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/jquery.validate.js"></script>
    <script scr="dist/js/validationscript.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

  <script>
  $.validator.setDefaults({
    submitHandler: function() {
      alert("submitted!");
    }
  });

  $().ready(function() {
    // validate signup form on keyup and submit
    $("#form").validate({
      rules: {
        name: "required",
        phone: {
          required: true,
          minlength: 8
        },
        email: {
          required: true,
          email: true
        },
        adress: "required"
      },
      messages: {
        name: "Lūdzu ievadiet savu vārdu un uzvārdu",
        email: "Lūdzu ievadiet e-pasta adresi pareizi",
        phone: "Lūdzu ievadiet telefona numuru pareizi",
        adress: "Lūdzu ievadiet adresi"
      }
    });
  });
  </script>

  </body>

</html>
