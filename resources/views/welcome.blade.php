<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
           
        <title>Prime Bread</title>
        <link rel="stylesheet" href="css/menu.css">        
        <link rel="stylesheet" href="css/modal.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/redes-sociais.css">        
        <link rel="stylesheet" href="css/popover.css">
        <link rel="stylesheet" href="css/form.css">                
        <link rel="stylesheet" href="css/clientes.css">
        <link rel="stylesheet" href="css/tooltip.css">
                   
        <link rel="stylesheet" href="css/owl.carousel.min.css">           
        <link rel="stylesheet" href="css/owl.theme.default.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
    </head>
    <body>

    
    <nav class="navbar navbar-expand-lg navbar-light my-nav" style="z-index: 10;">
        <img src="images/logo.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse menu-prime" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" style="cursor:pointer;">
        <a class="nav-link" href="#">Home</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="#nossos-produtos">Nossos Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#clientes">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contato">Fale Conosco</a>
      </li>
    </ul>
  </div>
</nav>


<!-- SESSÂO HOME-->
  <div class="parallax-window" data-parallax="scroll"></div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
          </div>       
        
      </div>
    </div>
  </div>
</div> 

<div class="banner-home">
  <img class="imagemHome" id="imagem-topo" alt="" style="z-index:200">
  <!-- Botão do Vídeo-->
  <button alt="" class="imagem-play video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/306184017?badge=0" data-target="#myModal"></button>
</div>


<div class="scrolldown">
  <a href="#transicao"><img  src="images/scroll-down.png" alt="" style="z-index:2;"></a>
  </div>
  
<section id="transicao">
    <img src="images/background-branco.png" id="imagem-cesta">
    <div class="container">
      <div class="col-6"></div>
    <div class="texto-pao">
      <div class="col-md-auto">
      <h1 class="display-4 ">Nossa História</h1><br>
    <p class="lead">
    Quando decidimos fabricar Pao de queijo sabiamos que iriamos encontrar uma concorrência muito grande, de imediato começamos a pensar no que fariamos
    para entrar nesse mercado.<br>
    Visualizando todo esse cenario tinha duas possibilidades. A primeira era trabalhar com produtos convencionais na qual percebemos que o mercado já estava saturado e a segunda
    era lançar uma linha de produtos de alta qualidade e feita de modo artesanal. Decidimos aceitar o desafio e trazer a todos os nossos clientes produtos diferenciados com a seleçao dos melhores ingredientes e que juntos proporcionam
    uma explosao de sabor<br>
    A PRIME BREAD desde a sua abertura vem ganhando mercado, a cada dia que passa encontramos inumeros clientes interessados em ofertar aos seus consumidores produtos de excelente qualidade. Faça o teste voce tambem, entre em contato conosco solicite uma visita e faça a degustaçao que irá mudar o seu conceito de Pão de Queijo.
    </p>
  </div>
      </div>

    </div>
    
    
  
    <div class="container" id="nossos-produtos" style="margin-top: 50px;margin-bottom: 50px;text-align: center;">
    <h1 class="display-4 ">Nossos Produtos</h1>
  </div>
  
    
      

</section>
<!-- responsividade-->

<div id="hotspotImg" class="responsive-hotspot-wrap row">
<section id="sec_produtos">
<div>
<img id="produto1" src="images/2400/produtos-2560.jpg" class="img-responsive produtos-img" alt="">
</div>  
<div class="hot-spot" x="800" y="1800">
                <div class="circle"></div>
                <div class="tooltip">
                    <div class="img-row">
                        <img src="images/multigraos-tooltip.jpg" width="320" height="250">
                    </div>
                    <div class="text-row">
                      <h4>Multigrãos</h4>
                      <h4>Adicionado a massa chia, quinoá, gergelim e linhaça</h4>
                    </div>
                </div>
            </div>

            <div class="hot-spot" x="1250" y="1100">
                <div class="circle"></div>
                <div class="tooltip">
                    <div class="img-row">
                    <img src="images/gourmet-tooltip.jpg" width="320" height="250">
                    </div>
                    <div class="text-row">
                      <h4>Gourmet</h4>
                      <h4>Empanado manualmente no parmesão</h4>
                    </div>
                </div>
            </div>

            <div class="hot-spot" x="1300" y="1990">
                <div class="circle"></div>
                <div class="tooltip">
                    <div class="img-row">
                      <img src="images/chipa-tooltip.jpg" width="320" height="250">
                    </div>
                    <div class="text-row">
                      <h4>Chipa</h4>                    
                    </div>
                </div>
            </div>

            <div class="hot-spot" x="1030" y="3200">
                <div class="circle"></div>
                <div class="tooltip">
                    <div class="img-row">
                      <img src="images/tradicional-tooltip.jpg" width="320" height="250">
                    </div>
                    <div class="text-row">
                      <h4>Tradicional</h4>
                      <h4>Feito com bastante queijo em sua composição</h4>                   
                    </div>
                </div>
            </div>

            <div class="hot-spot" x="1500" y="3200">
                <div class="circle"></div>
                <div class="tooltip">
                    <div class="img-row">
                      <img src="images/palito-tooltip.jpg" width="320" height="250">
                    </div>
                    <div class="text-row">
                      <h4>Palito</h4>
                      <h4>Feito com provolone e empanado no parmesão</h4>
                    </div>
                </div>
            </div>           
  
</section>
</div>


<section id="clientes">
<div class="container" style="margin-top: 50px;margin-bottom: 50px;text-align: center;">
    <h1 class="display-4 ">Nossos Clientes</h1>
  </div>
<div class="container">
    <div class="owl-carousel owl-theme">
    <div class="item"><img src="images/cliente-tivoli.jpg" alt=""></div>
    <div class="item"><img src="images/clientes-george-v1.png" alt=""></div>
    <div class="item"><img src="images/clientes-gran-melia1.png" alt=""></div>
    <div class="item"><img src="images/cliente-accor.jpg" alt=""></div>
    <div class="item"><img src="images/cliente-maksoud.jpg" alt=""></div>
    <div class="item"><img src="images/clientes-viva-food1.png" alt=""></div>
</div>
</section>

 <section id="contato">
 <div class="container contatos">
    <h1 class="display-4 ">Fale Conosco</h1>
  </div>
  <div class="formulario">    
  <form action="/enviar" method="post" class="contact1-form validate-form">
  {{ csrf_field() }}
    
				<div class="wrap-input1 validate-input" data-validate = "Nome obrigatório.">
					<input class="input1" type="text" name="name" placeholder="Nome">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Digite um e-mail válido: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="E-mail">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Assunto é obrigatório">
					<input class="input1" type="text" name="subject" placeholder="Assunto">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Mensagem obrigatória.">
					<textarea class="input1" name="message" placeholder="Mensagem"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Enviar 
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
      </form>
      
  </div>  
  </section>

<!-- Modal Começo-->
<!-- Modal -->
<div class="modal prime fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div>
          <iframe width="700px" height="400px" src=""></iframe>
        </div>
    </div>
  </div>
<!-- Modal Final-->

<!--Redes Sociais-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- The social media icon bar -->
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>   
    <script src="js/parallax.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>     
    <script src="js/jquery.hotspot.js"></script>    
    <script src="js/tooltip.js"></script>       

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        400:{
            items:1,
            nav:true
        },
        700:{
            items:2,
            nav:false
        },
        1600:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
/////  

$('.parallax-window').parallax({imageSrc: 'images/banner-video.jpg'});
$(function () {
  $('[data-toggle="popover"]').popover()
})
/*modal*/
$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});


/****Modal */

$(function () {

var viewportWidth = $(window).width();
if (viewportWidth > 1920) {
  $('#imagem-topo').attr("src", "images/texto-home-nobar.png");  
}else{
if (viewportWidth > 1600) {
  $('#imagem-topo').attr("src", "images/texto-home-nobar.png");  
}else{
if (viewportWidth > 1440) {
  $('#imagem-topo').attr("src", "images/texto-home-nobar.png");
  } else {
  if(viewportWidth > 1024){
    $('#imagem-topo').attr("src", "images/texto-home-nobar.png");
  }else{
  if(viewportWidth > 768){      
    $('#imagem-topo').attr("src", "images/1024/texto-home-1024.png");
    }else{
    if(viewportWidth > 425){
      $('#imagem-topo').attr("src", "images/768/texto-home-768.png");
      }else{
      if(viewportWidth > 375){
        $('#imagem-topo').attr("src", "images/320/texto-home-320.png");
      }else{
      if(viewportWidth > 320){
        $('#imagem-topo').attr("src", "images/320/texto-home-320.png");
      }else{
        $('#imagem-topo').attr("src", "images/320/texto-home-320.png");  
      }
       }
      }
    }
  }

}
}
}

}());

</script>
    </body>
</html>
