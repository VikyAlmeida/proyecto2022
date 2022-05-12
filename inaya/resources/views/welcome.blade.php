@extends("layouts.layout")
@section('slogan')
<div class="jumper" id="jump0"></div>
<div class="section type-1 big splash">
  <div class="container">
    <div class="splash-block">
      <div class="centered">
        <div class="container">
          <div class="section-headlines" style="margin-top: 9em;">
            <h1 style="font-size:15em; color:black;">Ayamonte</h1>
            <p>Ayamonte, paraíso de luz</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="jump4" class="jumper"></div>
@stop
@section('publications')
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
@stop
@section('comment')
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

@stop
@section('contact')
<div id="jump6" class="jumper"></div>
 <div class="section type-1 section-contact">
  <div class="container">
    <div class="section-headlines">
      <h4>Contactanos para hacerte cliente</h4>
      <h2>Promocionate!!</h2>
    </div>
    <div class="row">
    <div class="col-lg-4">
      <div class="visible-xs visible-sm"> <br class="gap-30" />
        <hr class="gap-divider" />
        <br class="gap-30" />
      </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
    <form role="form" action="{{ route('create.customer') }}" method="post" role="form">
      @csrf
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre *">
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email *">
            <br class="gap-15"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="user" placeholder="Ingresa tu usuario *">
          </div>
          <div class="col-lg-6">
            <input type="password" class="form-control" id="email" name="password" placeholder="Ingresa tu contraseña *">
          </div>
        </div>
      </div>
      <input type="submit" id="button-send" class="btn btn-block btn-success">
    </form>
	<div id="success">Your message has been successfully!</div>
	<div id="error">Unable to send your message, please try later.</div>	
  </div>
</div>
</div>
</div>
@stop