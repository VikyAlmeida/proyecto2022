<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portefeuille - Free One Page Website Template</title>

<!-- Stylesheets -->
<link type="text/css" href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
<link type="text/css" href="icons/font-awesome/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="icons/rondo/style.css" rel="stylesheet">
<link type="text/css" href="css/theme.css" rel="stylesheet">
<script src="clima/app.js"></script>
</head>

<body>
<header class="header" id="jump">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="{{url('/')}}"><img src="images/Logo.png" alt="" width="250" /></a> </div>
      <div class="collapse navbar-collapse hidden-xs">
        <ul class="nav navbar-nav navbar-right" style="margin-top: 3.4em;">
            <li id="clima" style="margin-right:15em; margin-top:-3.7em;"><a href="https://weather.com/es-ES/tiempo/hoy/l/37.21,-7.40?par=google"><label id="ubicacion"></label> a <label id="temperatura-valor"> </label><img id="icono-animado" src="" alt="" height="128" width="128"></a></li>
            <li class="active"><a href="#jump0">Home</a></li>
            <li><a href="formulario.html">Locales</a></li>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <li><a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="jumper" id="jump0"></div>
<div class="section type-1 big splash">
  <div class="container">
    <div class="splash-block">
      <div class="centered">
        <div class="container">
          <div class="section-headlines" style="margin-top: 9em;">
            <h1>Ayamonte</h1>
            <p>Ayamonte, paraíso de luz</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="jump4" class="jumper"></div>

<!-- Team -->
<div class="section type-3">
  <div class="container">
    <div class="section-headlines">
      <h4>Nuevas publicaciones</h4>
      <h2>Noticias de los establecimientos de Ayamonte!</h2>
      
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="team_item">
          <div class="img_block"><a href=""><img alt="" src="images/ayamonte/locales/ejemplos/lidl.jpg" width="290px" height="350px"></a></div>
          <div class="team_body">
            <a href=""><h5>Lidl</h5></a>
            <p>Lorem ipsum dolor a sit eget amet, consectetur adipiscing elit in sit amet aliquet odio, nec vehicula.</p>
            </div>
        </div>
      </div><a href=""></a>
      <div class="col-md-4">
        <div class="team_item">
          <div class="img_block"><a href=""><img alt="" src="images/ayamonte/locales/ejemplos/jungle.jpg" width="290px" height="350px"></a></div>
          <div class="team_body">
            <a href=""><h5>Jungle</h5></a>
            <p>Lorem ipsum dolor a sit eget amet, consectetur adipiscing elit in sit amet aliquet odio, nec vehicula.</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team_item">
          <div class="img_block"><a href=""><img alt="" src="images/ayamonte/locales/ejemplos/passage.jpg" width="290px" height="350px"></a></div>
          <div class="team_body">
            <a href=""><h5>Passage</h5></a>
            <p>Lorem ipsum dolor a sit eget amet, consectetur adipiscing elit in sit amet aliquet odio, nec vehicula.</p>
          </div>
        </div>
      </div>
    </div>
    
    <!--end:.row--> 
  </div>
  <!--end:.container--> 
</div>

<div id="jump5" class="jumper"></div>
<!-- Testimonials -->
<div class="section type-2"> 
  <div class="container">
    <div class="section-headlines">
      <h4>Comentarios</h4>
    </div>
    <div id="carousel-testimonial" class="carousel slide bs-docs-carousel-example">
      <ol class="carousel-indicators">
        <li data-target="#carousel-testimonial" data-slide-to="0" class=""></li>
        <li data-target="#carousel-testimonial" data-slide-to="1" class=""></li>
        <li data-target="#carousel-testimonial" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="images/avatar/avatar-2.jpg" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
              Founder at Frittt.com - <b>John Donga</b> </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="images/avatar/avatar-3.jpg" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
              Founder at Greepit.com - <b>John Donga</b> </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="images/avatar/avatar-1.jpg" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
              Founder at Frittt.com - <b>John Donga</b> </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="images/avatar/avatar-1.jpg" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
              Founder at Frittt.com - <b>John Donga</b> </div>
          </div>
        </div>
      </div>
      <div class="carousel-controller btn-group"> <a class="btn btn-xs btn-inverse" href="#carousel-testimonial" data-slide="prev"> <i class="icon-angle-left"></i> </a> <a class="btn btn-xs btn-inverse" href="#carousel-testimonial" data-slide="next"> <i class="icon-angle-right"></i> </a> </div>
    </div>
  </div>
</div>

<!-- Subscription -->


<div id="jump6" class="jumper"></div>

<!-- Contact -->
 <div class="section type-1 section-contact">
  <div class="container">
    <div class="section-headlines">
      <h4>
      Contact Us
      </h4>
      <h2>Let's have a coffee</h2>
    </div>
   
    <div class="row">
    <div class="col-lg-4">
      <address>
      <div class="address-row">
        <div class="address-sign"> <i class="icon-map-marker"></i> </div>
        <div class="address-info"> <b>Free One Page Website Template</b>,<br>
          Using Twitter Bootstrap 3,<br>
          Frittt.com </div>
      </div>
      </address>
      <div class="visible-xs visible-sm"> <br class="gap-30" />
        <hr class="gap-divider" />
        <br class="gap-30" />
      </div>
    </div>
    <div class="col-lg-7 col-lg-offset-1">
    <form role="form" action="" method="post" role="form" id="contac_form" name="contact_form">
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name *">
            <br class="gap-15"/>
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email *">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
      </div>
      <div class="form-group">
        <textarea class="form-control" id="message" name="message" rows="8"></textarea>
      </div>
      <button id="button-send" class="btn btn-block btn-success">Send Message Now </button>
    </form>
	<div id="success">Your message has been successfully!</div>
	<div id="error">Unable to send your message, please try later.</div>	
  </div>
</div>

</div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">Portefeuille - Free One Page Website Template &copy; Frittt.com. Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a> </div>
    </div>
  </div>
</footer>

<!--Scripts--> 
<script src="scripts/jquery-1.10.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script src="scripts/jquery.smooth-scroll.min.js"></script> 
<script src="scripts/mixitup/jquery.mixitup.min.js"></script> 
<script src="scripts/theme.js"></script> 
<script>
		$('.nav-tabs a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		})
	</script>
	
</body>