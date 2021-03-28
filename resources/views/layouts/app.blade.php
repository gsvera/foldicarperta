<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHRRQ9J');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/Carousel-Style-Content-Ticker-Plugin-with-jQuery-Carousel-Ticker/javascripts/jquery.carousel-ticker.js"></script>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/assets/ICONOS/favicon.png" type="image/png">
    @yield('header')
    
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHRRQ9J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- -----------------------------------------MENU---------------------------------------------     -->
    <nav class="navbar navbar-expand-lg navbar-menu">
        <a href="{{url('/')}}"><img class="logo" src="/assets/ICONOS/FOLDIO-LOGO-BLANCO.png" alt="foldio logo"></a>
        <button class="button-menu btn" id="menu">
            <i class="fa fa-bars fa-2x" aria-hidden="true" style="color:white;"></i>
        </button>
        <div class="line-white" id="menu-bar-line-one"></div>
        <center class="center-padding">
            <div>
                <ul class="menu-row menu-display" id="menu-bar">
                    <li class="text-menu list-group"><a class="list-menu" href="{{url('/')}}">Inicio </a></li> <span class="decoration-blue decoration-none">|</span>
                    <li class="text-menu list-group"> Renta de equipos 
                        <ul class="list-item">
                            <li class="item" style="border-top: solid 1px white"><a class="list-menu" href="{{url('/renta-de-copiadoras')}}">Copiadoras</a></li>
                            <li class="item"><a class="list-menu" href="{{url('/renta-de-impresoras')}}">Impresoras</a></li>
                            <li class="item"><a class="list-menu" href="{{url('/renta-de-multifuncionales')}}">Multifuncionales</a></li>
                        </ul>
                    </li> <span class="decoration-blue decoration-none">|</span>
                    <li class="text-menu list-group"><a class="list-menu" href="{{url('/servicios-administrados-impresion')}}"> Servicio administrado de impresión </a></li> <span class="decoration-blue decoration-none">|</span>
                    <li class="text-menu list-group"><a class="list-menu" href="{{url('/nosotros')}}"rel="nofollow"> Nosotros </a></li> <span class="decoration-blue decoration-none">|</span>
                    <li class="text-menu list-group"><a class="list-menu" href="#contact" rel="nofollow"> Contacto</a></li>
                </ul>
            </div>
        </center>
        <div class="line-white" id="menu-bar-line"></div>
        <ul class="row menu-display" id="menu-bar-icon">
            <li class="list-group"><a href="https://www.facebook.com/foldio" rel="nofollow"><img class="icon-menu-social" src="/assets/ICONOS/fb.png" alt="logo facebook"></a></li>
            <li class="list-group"><img class="icon-menu-social" src="/assets/ICONOS/IG.png" alt="logo instagram"></li>
            <li class="list-group"><a href="mailto:ventas@foldio.mx?subject=Solicitud%20de%20información"><img class="icon-menu-social" src="/assets/ICONOS/MAIL.png" alt="logo correo"></a></li>
        </ul>
    </nav>
<!-- ---------------------------------------------END MENDU------------------------------------------------ -->
    @yield('content')

<!-- -------------------------------------------------CONTACT---------------------------------------------------- -->
    
    <div style="margin-top:70px; padding-top:25px;" id="contact">
        <h3 class="color-contact-subtitle">SOLUCIONES EN RENTA DE EQUIPOS DE IMPRESIÓN EN CIUDAD DE MÉXICO</h3>
        <p class="paragraph-center">
        Permítenos asesorarte en elegir el equipo más rentable según la actividad de tu oficina o negocio, no dudes en contactarnos, 
        envianos tus datos de contacto para ser atendido ahora mismo.
        </p>
       
        <form action="{{url('/gracias')}}" method="post">
        @if (session('messageError'))
        <div id="messageError" class="alert alert-danger messageError">{{ session('messageError') }}
            <button onclick="closeOptionM(1)" type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div id="emailError"></div>
        {{ @csrf_field()}}
            <div class="col-10 div-box">
                <!-- <label for=""></label> -->
                <input name="name" class="back-input col-md-5 col-lg-5 col-xl-5 col-xs-12 col-xm-12 margin-input" type="text" placeholder="Nombre completo*">
                <label for=""></label>
                <input onchange="valExpres()" name="email" id="email" class="back-input col-md-5 col-lg-5 col-xl-5 col-xs-12 col-xm-12" type="text" placeholder="Correo electrónico*">
                <label for=""></label>
                <input name="tel" class="back-input col-md-5 col-lg-5 col-xl-5 col-xs-12 col-xm-12 margin-input" type="text" placeholder="Teléfono*">
                <label for=""></label>
                <select name="machine" class="back-input col-md-5 col-lg-5 col-xl-5 col-xs-12 col-xm-12" id="machines">
                    <option >Seleccione un equipo</option>
                    <option value="Kyocera P3060dn">Kyocera P3060dn</option>
                    <option value="Kyocera P2040dn">Kyocera P2040dn</option>
                    <option value="Kyocera P3145dn">Kyocera P3145dn</option>
                    <option value="Kyocera P5021cdn">Kyocera P5021cdn</option>
                    <option value="Kyocera P5026cdw">Kyocera P5026cdw</option>
                    <option value="Kyocera P6230cdn">Kyocera P6230cdn</option>
                    <option value="Kyocera TASKalfa 4012i">Kyocera TASKalfa 4012i</option>
                    <option value="Kyocera m3550idn">Kyocera m3550idn</option>
                    <option value="Kyocera TASKalfa 3011i">Kyocera TASKalfa 3011i</option>
                    <option value="Kyocera TASKalfa 306ci">Kyocera TASKalfa 306ci</option>
                    <option value="Kyocera TASKalfa 356ci">Kyocera TASKalfa 356ci</option>
                    <option value="Kyocera M3655idn">Kyocera M3655idn</option>
                    <option value="Kyocera TASKalfa 3212i">Kyocera TASKalfa 3212i</option>
                    <option value="Kyocera TASKalfa 4003I">Kyocera TASKalfa 4003I</option>
                    <option value="Kyocera m5526cdw">Kyocera m5526cdw</option>
                    <option value="Kyocera TASKalfa 308ci">Kyocera TASKalfa 308ci</option>
                    <option value="Kyocera TASKalfa 3253ci">Kyocera TASKalfa 3253ci</option>
                </select>
                <label for=""></label>
                <input name="message" class="back-input col-md-11 col-lg-11 col-xl-11 col-xs-12 col-xm-12" type="text" placeholder="Mensaje*">
                <button type="" class="button-contact"><strong>SOLICITAR ASESORÍA<strong></button>
            </div>
        </form>
    </div>

<!-- -------------------------------------------------END CONTACT---------------------------------------------------- -->
<!-- ----------------------------------------------FOOTER---------------------------------------------------- -->
    <footer>
        <div class="footer-gray row">
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-xm-12 one-footer pd-list">
                <h4 class="sub-title-footer">INFORMACIÓN DE CONTACTO</h4>
                <ul>
                    <li class="text-white list-footer"><img class="icon-footer" src="/assets/ICONOS/TEL.png" alt="Telefono"><a class="list-footer" rel="nofollow" href="tel:+5552716818" style="text-decoration:none;"> 555 271 6818</a></li>
                    <li class="text-white list-footer"><img class="icon-footer" src="/assets/ICONOS/whatsapp.png" alt="WhatsApp"><a class="list-footer" rel="nofollow" style="text-decoration:none;" href="https://wa.me/525514323122?text=Me+pueden+brindar+m%C3%A1s+informaci%C3%B3n+sobre+equipos+de+impresi%C3%B3n"> 551 432 3122</a></li>
                    <li class="text-white list-footer"><img class="icon-footer" src="/assets/ICONOS/mail-dos.png" alt="Mail"><a class="list-footer" rel="nofollow" href="mailto:ventas@foldio.mx?subject=Solicitud%20de%20información" style="text-decoration:none;"> ventas@foldio.mx</a></li>
                    <li class="text-white list-footer"><img class="icon-footer" src="/assets/ICONOS/UBICACION.png" alt="Ubicacion"><a class="list-footer" rel="nofollow" style="text-decoration:none;" href="https://www.google.com.mx/maps/place/Foldio/@19.5375768,-99.1811514,15z/data=!4m5!3m4!1s0x0:0xa7ed5b2093ee6235!8m2!3d19.5375768!4d-99.1811514?shorturl=1"> Ver ubicación física en Google</a></li>
                    <li class="text-white list-footer" style="margin-left:35px;">Lunes a Viernes de 9:00am a 6:00pm </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-xm-12 two-footer pd-list">
                <h4 class="sub-title-footer mgl">SERVICIOS</h4>
                <ul>
                    <li class="text-white list-footer ex-mar"><a class="list-footer" style="text-decoration:none;" href="{{url('/renta-de-impresoras')}}">Impresoras en renta</a></li>
                    <li class="text-white list-footer ex-mar"><a class="list-footer" style="text-decoration:none;" href="{{url('/renta-de-copiadoras')}}">Copiadoras en renta</a></li>
                    <li class="text-white list-footer ex-mar"><a class="list-footer" style="text-decoration:none;" href="{{url('/renta-de-multifuncionales')}}">Multifoncionales en renta</a></li>
                    <li class="text-white list-footer ex-mar"><a class="list-footer" style="text-decoration:none;" href="{{url('/servicios-administrados-impresion')}}">Servicio administrado de impresión</a></li>
                </ul>
            </div>
            <div class="col-3">
                <img class="logo-footer-kyocera" src="/assets/GENERAL/FOOTER/LOGO-KYOCERA-blanco.png" alt="Logo kyocera">
            </div>
            <p class="text-footer">Foldio<span class="copy"></span> <span class="decoration-blue">|</span> Renta de equipos de impresión en Ciudad de México <span class="decoration-blue">|</span> TODOS LOS DERECHOS RESERVADOS <br> 
            <a class="text-white" style="text-decoration:none;" href="{{url('/aviso-de-privacidad')}}" rel="nofollow">Aviso de privacidad </a><span class="decoration-blue">|</span> <a class="text-white" style="text-decoration:none;" href="{{url('/uso-de-cookies')}}" rel="nofollow">Uso de cookies</a></p>
        </div>
        <div class="footer-black">
            <p class="text-by">Huella Digital - <a class="link-huella" href="https://huella-digital.mx/">Agencia de Marketing Digital</a> <img class="logo-huella" src="/assets/ICONOS/ROCKET.png" alt="logo huella digital"></p>     
        </div>
    </footer>
<!-- ---------------------------------------------------END FOOTER-------------------------------------------------- -->
<script src="https://use.fontawesome.com/ef8ad22161.js"></script>

@stack('script')
    <script type="text/javascript">

    function valExpres(){
        var dato = document.getElementById('email').value
        var boxError = document.getElementById('emailError')
        var expre = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
        if(!expre.test(dato)){
            boxError.innerHTML = `<div id="messageError" class="alert alert-danger messageError">Ingrese un correo electronico correcto
                                        <button onclick="closeOptionM(1)" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>`
        }else{
            closeOptionM(1)
        }
    }

 
    function selectMachine(n){
        var machines = document.getElementById('machines')

        machines.value = n
        // window.location = "#contact"
    }
    function closeOptionM(n){
            var optionOne = document.getElementById('messageError')

            if(n == 1){
                optionOne.style.display = "none"
            }
        }
    

    var i = 0;
    $(document).ready(function(){
        $('#menu').click(function(){
            if(i == 0){
                $('#menu-bar').show();
                $('#menu-bar-line-one').show();
                $('#menu-bar-line').show();
                $('#menu-bar-icon').css('display', 'flex');
                $('#menu-bar-icon').css('margin-left', '110px');
                $('#menu-bar-line-one').css('width', '360px');
                $('#menu-bar-line-one').css('height', '1px');
                $('#menu-bar-line').css('width', '360px');
                $('#menu-bar-line').css('height', '1px');
                i = 1;
            }else if(i == 1){
                $('#menu-bar').hide();
                $('#menu-bar-line').hide();
                $('#menu-bar-line-one').hide();
                $('#menu-bar-icon').hide();
                i = 0;
            }
        })
    })
   // SLOW REDIRECT LINK
   $(document).ready(function() {
                $('a[href^="#"]').click(function() {
                    var destino = $(this.hash);
                    if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                    }
                    if (destino.length == 0) {
                    destino = $('html');
                    }
                    $('html, body').animate({ scrollTop: destino.offset().top -150 }, 500);
                    return false;
                });
            });
    // END SLOW REDIRECT LINK


    
    (function($, undefined) {

$(window).on("load", function() {
$("#carouselTicker").carouselTicker();
})

$("#carouselTicker1").carouselTicker({
"direction": "next"
});

$("#carouselTicker1").carouselTicker({
"direction": "next"
});

$(".carouselTicker-start").carouselTicker({
"direction": "next"
});

var carouselTickerWidthResize = $("#carouselTicker-width-resize").carouselTicker();

$(window).on('resize', function() {
carouselTickerWidthResize.resizeTicker();
});

$("#carouselTicker-vertical").carouselTicker({
"mode": "vertical",
"direction": "prev"
});

$("#carouselTicker-vertical-with-callback").carouselTicker({
"mode": "vertical",
"direction": "next",
"onCarouselTickerLoad": function() {
    console.log("callback")
}
});

})(jQuery);

/*Nuevas functiones para las flechas*/
$(".flecha1").click(function(){
$(".carouselTicker__list").animate({"left":"-=200px"})
})

$(".flecha2").click(function(){
$(".carouselTicker__list").animate({"left":"+=200px"})
})


$(document).ready(function() {
        
        var messageError = document.getElementById('messageError')
        if(messageError.display = 'block'){
            
            window.location.href = "#contact"
        }
       
    });
    </script>
    
</body>
</html>