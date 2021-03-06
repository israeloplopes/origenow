<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="webthemez">
<title>nome - slogan</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-target="#navbar-main">
<div id="navbar-main">
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
	   <div class="pull-left logo">
        <a class="" href="#home"><img src="assets/img/logo.png" /></a>
       </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="#home-section" class="smoothScroll">Início</a></li>
          <li> <a href="#services" class="smoothScroll">Sobre Nós</a></li>
          <li> <a href="#portfolio" class="smoothScroll"> Nossas Ofertas</a></li>
          <!--<li> <a href="#portfolio" class="smoothScroll"> Special</a></li>
          <li> <a href="#team" class="smoothScroll"> Chef Team</a></li>-->
          <li> <a href="#contact" class="smoothScroll"> Em Contato</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>

<!-- ==== HEADERWRAP ==== -->
<div id="home-section">
<div id="headerwrap" name="home">
  <header class="clearfix tb">
 <div class="tb-cell text-center">
 <i class="fa fa-heart-o icon"></i>
    <h1>loucos por café</h1>
    <p>Origem e certeza do bom café</p>
    <a href="#portfolio" class="smoothScroll btn btn-lg">Veja lotes disponíveis</a>
	</div>
	</header>
</div>

</div>
<div class="div-pattern2"></div>
<!-- /headerwrap -->



<!-- ==== SERVICES ==== -->
<div id="services" name="services">
  <div class="container">
    <div class="row">
      <h2 class="centered">Sobre Nós</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2">
        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-cubes fa-3x"></i>
        <h3>SOLIDEZ</h3>
        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-flask fa-3x"></i>
        <h3>CONHECIMENTO</h3>
        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-life-ring fa-3x"></i>
        <h3>MERCADO</h3>
        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
      </div>
    </div>
    <!-- row -->
  </div>
</div>
<!-- container -->
<section class="hero-section section">
        <div class="container">
            <div class="highlight tb">
                <div class="tb-cell">
                    <p>FAÇA JÁ SUA RESERVA COM BASE EM NOSSAS OFERTAS. OS MELHORES LOTES, PREPARADOS E SEPARADOS POR QUEM ENTENDE DE CAFÉ!</br>
					A certeza de um bom negócio, com a qualidade que você deseja.</p>
                </div>
                <div class="links tb-cell">
                    <div class="reservation-link">
                        <a href="#PORTFOLIO" class="btn reservation-btn">FAÇA SUA RESERVA</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
	<div class="div-pattern"></div>
<!-- container -->
<!-- ==== PORTFOLIO ==== -->
<div id="portfolio" name="portfolio">
  <div class="container">
    <div class="row">
      <h2 class="centered">Nossas Ofertas</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">A oportunidade de melhores preços, o atestado de procedência, a certeza do melhor café</p>
      </div>
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row">
        <!-- Carrega os lotes em atividade -->
        <?php include "lotes.php";?>

        <!-- /col -->
      </div>
      <!-- /row -->
    </div>
    <!-- /row -->
  </div>
</div>
<!-- /container -->


<!-- ==== TEAM MEMBERS ====
<div id="team" name="team">
  <div class="container">
    <div class="row centered">
      <h2 class="centered">Meet Our Chef</h2>
      <hr>
	   <div class="col-lg-8 col-lg-offset-2 centered">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
		<br/>
      </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team01.jpg" height="120px" width="120px" alt="">
        <h4><strong>Rennyl</strong></h4>
        <p>Consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team02.jpg" height="120px" width="120px" alt="">
        <h4><b>Kristean</b></h4>
        <p>Consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team03.jpg" height="120px" width="120px" alt="">
        <h4><b>Angilica</b></h4>
        <p>Consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team04.jpg" height="120px" width="120px" alt="">
        <h4><b>Shannon</b></h4>
        <p>Consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>

    </div>
  </div>
  <!-- row
</div>
<!-- container -->

<!-- ==== CONTACT ==== -->
<div id="contact" name="contact">
  <div class="container">
    <div class="row">
      <h2 class="centered">Em contato</h2>
      <hr>

    </div>
    <div class="row">
      <div class="col-md-7">
	  <strong>Para nós sua opinião importa.</strong>
        <p>Queremos te ouvir. Deixe sua mensagem.</p>
        <form id="contact" method="post" class="form" role="form">
          <div class="row">
            <div class="col-md-12 form-group">
              <input class="form-control" id="name" name="name" placeholder="Seu Nome" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="email" name="email" placeholder="Seu Email" type="email" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="zap" name="zap" placeholder="Telefone Whatsapp" type="text" required />
            </div>
			 <div class="col-md-12 form-group">
              <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5"></textarea>
              <button class="btn btn-lg pull-left" type="submit">Enviar mensagem</button>
            </div>
          </div>

        </form>
        <!-- form -->
      </div>
	  <div class="col-md-5">


	  <i class="fa fa-map-marker fa-2x"></i>
        <strong>Escritório</strong>
		<p>Barão do Rio Branco, 999<br>
          Manhuaçu/MG</p>

      <br/>
	  <i class="fa fa-envelope-o fa-2x"></i>
        <p>email</p>

       <br/>
	  <i class="fa fa-phone fa-2x"></i>
        <p> telefone</p>

	  </div>
    </div>
    <!-- row -->

  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">&copy; <?php echo date("Y");?>por <a href="https://www.startassessoriadigital.com.br" target="_blank" title="Start Digital">Start Digital</a> </span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/custom-scripts.js"></script>
</body>
</html>
