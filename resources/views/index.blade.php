@extends('layouts.app')
@section('header')
<title>Foldio</title>
<meta name="title" content="➝ Renta de impresoras multifuncionales en Ciudad de México" />
<meta name="description" content="Contamos con los mejores planes de renta de impresoras multifuncionales, adaptado a las necesidades de tu oficina, empresa o negocio. ¡Cotiza ahora!" />
<meta name="keywords" content="renta de impresoras multifuncionales para oficina, renta de impresoras multifuncionales para empresas, renta de impresoras multifuncionales kyocera, renta de impresoras multifuncionales" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="https://foldio.mx" />

@endsection
@section('content')
<div>
<!-- -----------------------------------------BANNER----------------------------- -->
    <div class="banner-home">
        <div class="container-banner">
            <div class="line-blue element-display"></div>
            <div>
                <h1 class="title">RENTA DE IMPRESORAS MULTIFUNCIONALES</h1>
                <p class="paragraph-banner">Nos comprometemos con el servicio y la calidad ya que contamos con 30 años de experiencia en el mercado. Contamos con planes hechos a la medida del cliente para que optimicen recursos.</p>
                <div></div>
            </div>
        </div>
    </div>  
<!-- ---------------------------------------------END BANNER-------------------------------------------- -->
<!-- ---------------------------------------------SECTION ONE-------------------------------------------- -->
    <div class="section container">
        <div class="line-blue-two element-display"></div>
        <h2 class="subtitle">EQUIPOS EN PLAN DE RENTA</h2>
        <p class="font-fam text-less">Elige el plan de renta que mejor se adapta a tus necesidades de impresión</p>
        <div class="row">
            <div class="col box-con" id="box-slide">
                <div class="box-equipos">
                    <img class="img-equipos" src="/assets/HOME/ECOSYS_P3060dn_HO_Digital.png" alt="Renta de impresoras">
                    <div class="content-cinta">
                        <div class="pleca" ></div>
                        <h2 class="text-cinta">Renta de <br><strong class="text-cinta-equipo">IMPRESORAS</strong></h2>
                    </div>
                    <p class="text-descript">Impresoras de alta velocidad y rendimiento, a color y monocromáticas con excelentes funciones.</p>
                    <a href="{{url('/renta-de-impresoras')}}"><button class="button-red">VER MÁS</button></a>
                </div>
            </div>
            <div class="col box-con" id="box-slide">
                <div class="box-equipos">
                    <img class="img-equipos" src="/assets/HOME/TASKalfa 3011i.png" alt="Renta de copiadoras">
                    <div class="content-cinta">
                        <div class="pleca" ></div>
                        <h2 class="text-cinta">Renta de <br><strong class="text-cinta-equipo">COPIADORAS</strong></h2>
                    </div>
                    <p class="text-descript">Copiadoras seminuevas que te daran un excelente rendimiento a un costo mas bajo.</p>
                    <br class="element-none">
                    <a href="{{url('/renta-de-copiadoras')}}"><button class="button-red">VER MÁS</button></a>
                </div>
            </div>
            <div class="col box-con" id="box-slide">
                <div class="box-equipos">
                    <img class="img-equipos" src="/assets/HOME/TASKalfa 3253ci.png" alt="Renta de multifuncionales">
                    <div class="content-cinta">
                        <div class="pleca" ></div>
                        <h2 class="text-cinta">Renta de <br><strong class="text-cinta-equipo">MULTIFUNCIONALES</strong></h2>
                    </div>
                    <p class="text-descript">Equipos en renta con la más alta tecnología poara tu oficina o empresa.</p>
                    <br>
                    <a href="{{url('/renta-de-multifuncionales')}}"><button class="button-red">VER MÁS</button></a>
                </div>
            </div>
            <div class="arrow-content-margin row justify-content-center element-none">
                <div onclick="plusSlides(-1)" class="flecha1 arrow-blue-left flecha-sli"></div>
                <div onclick="plusSlides(1)" class="flecha2 arrow-blue-right flecha-sli"></div>
            </div>
        </div>
        <div class="section mt-section">
            <h3 class="color-subtitle-h3">SERVICIO INCLUIDO EN TODOS LOS EQUIPOS:</h3>
            <div class="container" style="margin-top:40px;">
                <div class="row justify-content-md-center mb-3">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-xm-12 div-arrow">
                        <span><img class="arrow" src="/assets/ICONOS/FLECHA.png" alt="Flecha"></span>
                        <p class="font-fam" style="display:inline-block;">Tóner, consumibles y refacciones</p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-xm-12">
                        <span><img class="arrow" src="/assets/ICONOS/FLECHA.png" alt="Flecha"></span>
                        <p class="font-fam" style="display:inline-block;">Soporte vía telefónica</p>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-xm-12 div-arrow">
                        <span><img class="arrow" src="/assets/ICONOS/FLECHA.png" style="margin-top:-40px;" alt="Flecha"></span>
                        <p class="font-fam" style="display:inline-block;">Servicio de mantenimiento <br>preventivo</p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-xm-12">
                        <span><img class="arrow" src="/assets/ICONOS/FLECHA.png" alt="Flecha"></span>
                        <p class="font-fam" style="display:inline-block;">Capacidad de uso Kyocera</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ---------------------------------------------END SECTION ONE-------------------------------------------- -->
<!-- ---------------------------------------------SECTION TWO-------------------------------------------- -->
    <div class="section mb-550">
        <div class="line-blue-two element-display" style="margin-top:-50px;"></div>
        <h2 class="subtitle">EQUIPOS DE IMPRESIÓN PARA MEJOR CALIDAD Y RENDIMIENTO EN TUS DOCUMENTOS</h2>
        <div class="contain-incom element-display">
            <img class="impre-incom" src="/assets/HOME/KYOCERA_M3655IDN.png" alt="Equipos de impresion kyocera">
        </div>
        <div class="box-three">
            <div class="row box-margin" style="">
                <div class="box-red"><strong>01.</strong></div>
                <div class="box-black"><p>Controla y reduce gastos de impresión</p></div>
            </div>
            <div class="row box-margin">
                <div class="box-red"><strong>02.</strong></div>
                <div class="box-black"><p>Digitaliza y evita fugas de información</p></div>
            </div>
            <div class="row box-margin">
                <div class="box-red"><strong>03.</strong></div>
                <div class="box-black"><p>Un equipo para cada necesidad</p></div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-xm-12 center-mb">
                <img class="icono-sol" src="/assets/HOME/SOPORTE.png" alt="Soporte">
                <h3 class="subtitle-h3-black">SOPORTE TÉCNICO</h3>
                <p class="font-fam">Contamos con un valioso personal técnico en impresora multifuncionales, cualquiera de nuestros equipos en plan de renta te incluye servicio preventivo y de mantenimiento.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-xm-12 border-side center-mb">
                <img class="icono-sol" src="/assets/HOME/GARANTIA.png" alt="Soporte">
                <h3 class="subtitle-h3-black">GARANTÍA DE SATISFACCIÓN</h3>
                <P class="font-fam">Todos nuestros técnicos están certificados en Kyocera y nuestros tiempos de respuesta te ayudan a no detener tus actividades documentales.</P>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-xm-12 center-mb">
                <img class="icono-sol" src="/assets/HOME/SOLUCIONES.png" alt="Soporte">
                <h3 class="subtitle-h3-black">SOLUCIONES EMPRESARIALES</h3>
                <P class="font-fam">Amplia gama de servicios desde suministros para equipos Kyocera hasta optimizar tus procesos de gestión documental, comprometidos en aumentar tu productividad con equipos de primera calidad.</P>
            </div>
        </div>
    </div>
<!-- ---------------------------------------------END SECTION TWO-------------------------------------------- -->
<!-- ---------------------------------------------SECTION THREE-------------------------------------------- -->
    <div class="section border-blue">
        <div class="row center-mb">
            <div class="col mb-pd-text">
                <h2 class="subtitle-black">RENTA DE EQUIPOS DE IMPRESIÓN</h2>
                <h3 class="subtitle-h3-black" style="font-weight:600;"><img class="arrow-subtitle element-display" src="/assets/ICONOS/FLECHA.png" alt="Flecha">Soluciones que si te funcionan</h3>
                <p class="font-fam">En Foldio te facilitamos la búsqueda de las mejores soluciones de impresión en calidad – precio, 
                contamos con los equipos más novedosos que te ayudarán a optimizar los recursos de tu empresa, oficina 
                o negocio.
                <br>
                <br>
                Nuestro enfoque es brindarte más ahorro, mejor control de tus recursos en tu plan de renta y 
                facilitarte la operación de nuestras impresoras multifuncionales Kyocera ideales para oficinas, corporativos 
                de todo tipo y negocios de cualquier tamaño en el manejo de sus documentos impresos; esto gracias a un plan 
                de renta de equipos de impresión adaptado a tus necesidades, no pagues de más por extras que no ocupes.</p>
            </div>
            <div class="col">
                <img class="img-inside" src="/assets/HOME/uno.png" alt="Kyocera printer">
            </div>
        </div>
    </div>
    <div class="section border-red">
        <div class="row invert-right center-mb">
            <div class="col">
                <img class="img-inside" src="/assets/HOME/dos.png" alt="Kyocera mexico">
            </div>
            <div class="col padding-red">
                <h2 class="subtitle-black">EQUIPOS DE IMPRESIÓN KYOCERA</h2>
                <h3 class="subtitle-h3-black" style="font-weight:600;"><img class="arrow-subtitle-red element-display" src="/assets/ICONOS/FLECHA.png" alt="Flecha">Optimiza los recursos de tu empresa.</h3>
                <p class="font-fam">Hoy en día necesitas soluciones eficaces que te permita imprimir tus archivos sin desembolsar un gran presupuesto ni dedicar 
                grandes cantidades de recursos humanos o materiales por su mantenimiento.<strong> ¡Necesitas producir más, con menos!</strong> 
                <br>
                <br>
                Con más de 30 años en Foldio estamos comprometidos en brindarte las más rentables soluciones en Impresión. 
                <br>
                <br>
                Nuestro equipo está conformado por técnicos especialistas en impresoras, copiadoras y multifuncionales, comprometidos en adelantarse 
                con la atención de tus equipos de impresión. 
                <br>
                <br>
                Somos proveedor autorizado en configuración, capacitación e instalación de los equipos de 
                impresión Kyocera.</p>
            </div>
        </div>
    </div>
    <div class="mbot-150">
        <div class="row center-mb">
            <div class="col">
                <h2 class="subtitle-black">SERVICIO ADMINISTRADO DE IMPRESIÓN</h2>
                <p class="font-fam text-700">Nuestro servicio administrado de impresión, es un servicio enfocado en la implementación y manejo de procesos de todas tus impresoras y multifuncionales, con 
                el objetivo de ahorrarte dinero, reducir consumo de papel, insumos, electricidad, y gastos en TI, así como también mejorar la eficiencia entre los 
                colaboradores de tu empresa, al implementar medidas de seguridad, reglas de impresión y calidad. 
                <br>
                <br>
                <strong class="text-blue text-size-1">¡Comienza a producir más, con menos!</strong></p>
                <a class="element-display" href="{{url('/servicios-administrados-impresion')}}"><button class="button-red-home"><strong>CONOCER MÁS</strong></button></a>
            </div>
            <div class="col">
                <img class="img-inside position-right" src="/assets/HOME/tres.png" alt="Kyocera impresoras">
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script type="text/javascript">
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("box-con");
            if (n > slides.length) 
            {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
            slides[slideIndex-1].style.display = "block";         
        }
    </script>
@endpush