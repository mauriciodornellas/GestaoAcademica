  <!DOCTYPE html>
    <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Fafire</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" /> 
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css1/master.css" rel="stylesheet" media="screen">
      <script src="scripts.js" language="javascript"></script>
    <!-- skin -->
    <link rel="stylesheet" href="skin/default.css">
  <?
  //PEGA OS DADOS ENVIADOS PELO FORMULÁRIO
  $nomAluno = $_POST["nomAluno"];
  $matAluno = $_POST["matAluno"];
  $email = $_POST["email"];
  $senAluno = $_POST["senAluno"];
  
  //PREPARA O CONTEÚDO A SER GRAVADO
  $conteudo = "$nomAluno,$matAluno,$email,$senAluno\r\n";
  
  //ARQUIVO TXT
  $arquivo  = "dados_salvos.txt";
  
  //TENTA ABRIR O ARQUIVO TXT
  if (!$abrir = fopen($arquivo, "a")) {
     echo  "Erro abrindo arquivo ($arquivo)";
     exit;
  }
  
  //ESCREVE NO ARQUIVO TXT
  if (!fwrite($abrir, $conteudo)) {
    print "Erro escrevendo no arquivo ($arquivo)";
    exit;
  }
  
  echo "Arquivo gravado com Sucesso !!";
  
  //FECHA O ARQUIVO 
  fclose($abrir);
?>

</header>
    <body>
      <section id="header" class="appear"></section>
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
       <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">      Fafire
          </a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
        
            <li><a href="./modulos/Biblioteca/home.html">Biblioteca</a></li>
            <li><a href="./modulos/Cantina/index.html">Cantina</a></li>
            <li><a href="./modulos/Estacionamento/index.html">Estacionamento</a></li>
            <li><a href="./modulos/HistoricoEscolar/index.html">Histórico</a></li>
            <li><a href="./modulos/Patrimonio/index.html">Patrimônio</a></li>
            <li><a href="portal.html">Portal do Aluno</a></li>
            <li><a href="./modulos/Professores/index.html">Professores</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <section class="featured">
      <div class="container"> 
        <div class="row mar-bot40">
          <div class="col-md-6 col-md-offset-3">
            
            <div class="align-center">
              <!--<i class="fa fa-flask fa-5x mar-bot20"></i>-->
              <div>
                <img src="Imagens/icone_cadastro.png" alt="Ícone de apresentação da página" title="Ícone da Página" width="150" height="150" />
              </div>
              <h2 class="slogan">Lista de Registros</h2>
              <br>
              
                <?php
                    $nomAluno = $_POST['nomAluno'];
                    $matAluno = $_POST['matAluno'];
                    $email = $_POST['email'];
                    $senAluno = $_POST['senAluno'];

                    $handle = fopen ("dados_salvos.txt", "w");
                    $conteudo = "$nomAluno,$matAluno,$email,$senAluno\r\n";
                    fwrite($handle, $conteudo);
                    {
                    echo "Arquivo Salvo corretamente. <br/>";
                    echo "<br/>Clique <a href='portal.html'>aqui</a> e volte a pagina de edição<p></p>";
                    }

                    fclose($handle);
                  ?>
                  
          </section>
        
    <!-- contact -->
    <section id="section-contact" class="section appear clearfix">
      <div class="container">
        
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="section-header">
              <h2 class="section-heading animated" data-animation="bounceInUp">Contato</h2>
              <address>
                FACULDADE FRASSINETTI DO RECIFE - FAFIRE
                Av. Conde da Boa Vista, 921 - Boa Vista
                Recife - PE, Brasil - CEP 50060-002
                Fone: (0xx81) 2122.3500
                Fax: (0xx81) 2122.3580
                E-mail: comunica@fafire.br
              </address>
            </div>
          </div>
        </div>    
      </div>
    </section>
    
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a> 

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>   
  <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="js/jquery.localscroll-1.2.7-min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/validate.js"></script>
    <script src="js/main.js"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-8.058604,-34.889204), // Recife

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [ {   featureType:"all",    elementType:"all",    stylers:[   {     invert_lightness:true   },    {     saturation:10   },    {     lightness:30    },    {     gamma:0.5   },    {     hue:"#1C705B"   }   ] } ]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>         
    </body>
  </html>