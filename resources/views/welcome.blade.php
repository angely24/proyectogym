
<!DOCTYPE html>
<!--Analísis y Desarrollo de Sistemas de Informción
Ficha: 2252471
Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fuentes -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

        <!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- estilos bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- css  -->
        <link href="/../css/app.css">
        <!-- estilos -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <style>
        #icon{
    font-size: 2rem;
     color: cornflowerblue;
  }
  
  #text{
    font-size: 30px;
    color: rgb(177, 0, 0);
  }
  
  
  
  #textnavbar{
    font-size: 50px;
    color: white;
  }
  
  #Gymnav{
    color: rgb(0, 0, 0);
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  #bars{
    background-color: white;
    
  }
  
  #inicio{
    color: white;
    font-size: 20px;
    background-color: black;
  }
  .black{
      background: rgba(255, 255, 255, 0.487);
      
  }
  #navbar{
    margin-top: -1px;
  }
  
  /* Estilos de Section  */
  #Titulo{
    font-size: 50px;
    margin:100px;
    color: white;
  }
  .card{
    color: white;
    background: rgba(216, 90, 90, 0.487);
  }
  
  #hr{
    height: 10px;
    background-color: white;
  }
  
  #img{
    width: 5rem;
  }
  #Text_relleno{
    color: white;
    font-size: 20px;
  }
  
  /* Estilos de Footer  */
  
  #Footer{
    background-color: rgba(0, 0, 0, 0.05);
  }
  
  
  /* Compras.js creacion de estilos compras */
  
  #card-group{
    margin: 50px;
  }
  
  /* Home.js creacion de estilos  home */
  
  #titulo-Home{
      font-size: 35px;
      color: white;
      margin: 20px;
  }
  
  /* creacion de estilos para los Horarios para el usuario  */
  
  #text-horario{
    color: white;
  }

  #carouselExampleCaptions{
      margin:50px;
     
  }

  #video{
      position: relative;
      left:230px;
  }

   #diseño1{
      position: relative;
      left:630px;
      bottom:800px;
  } 

  #color{
      color:white;
      margin:30px;
      font:70px;
  }
    </style>


<div class="container-fluid">
<body background="https://fondosmil.com/fondo/4031.jpg " class="fixed-static">

        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
             <!-- En el nav podremos encontrar nuestro logo, con el menú; cuando le modificamos el tamaño el menú se convierte en un menu colapsado, en este menu colapsado podremos observar el botón de compras -->
            <nav class="navbar navbar-expand-lg navbar-light bg-">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}"><img src="https://1000marcas.net/wp-content/uploads/2021/06/Crunch-Fitness-Logo.png" style="width:8rem;"  alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a type="button" class="btn btn-danger"class="nav-link active" aria-current="page" href="{{url('/compras')}}">Compras</a>
                    </li>
                    
                </ul>
                <!-- En la parte superior derecha encontramos los botones de unete y registrate los cuales al presionar en cada uno podremos observar un pequeño formulario dependiendo de la sección seleccionada. -->
                </div>
                   @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth   
                        <a href="{{ url('/home') }}" type="button" class="btn btn-danger">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" type="button" class="btn btn-danger">Unete</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" type="button" class="btn btn-danger">Reistrate</a>
                        @endif
                    @endauth
                </div>
            @endif 
            </div>
            </nav>


                <!--esta es la imagen de fondo https://fondosmil.com/fondo/4036.jpg -->

                 <!-- Aquí encontramos nuestro carrusel -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!--Nos muestra los botones de abajo de las imagenes con la cantidad exacta de imagenes  -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                         <!-- Aqui encontramos las imagenes y sus respectivas descripciones  -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.clinicamcd.es/wp-content/uploads/2015/05/GIMNASIO-CLINICA-MCD-PILATES-Y-FISIOTERAPIA-DE-MANTENIMIENTO.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.clinicamcd.es/wp-content/uploads/2015/05/GIMNASIO-DE-PILATES-Y-MANTENIMIENTO-CLINICA-MCD.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.clinicamcd.es/wp-content/uploads/2015/05/GIMNASIO-DE-PILATES-Y-MANTENIMIENTO-CLINICA-MCD.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <!-- En esta parte vemos nuestros botones que nos permitiran ver la siguiente o anterior imagen del carrusel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                  
                    

<!--titulo de las cards-->
<h1 id="Titulo">GYM STYLE</h1>
<!-- observamos Las dos cards despues del carrusel  -->
<div class="row">
    <div class="col-sm-6">
        <div class="card ">
            <div class="card-body">
                <h5 class="card-title">¿Quienes somos?</h5>
                <p class="card-text">
                    GYM STYLE brinda bienestar y satisfaccion a nuestros afiliados, contribuyendo al
                    desarrollo profesional y personal de toda nuestra comunidad.
                    Buscamos mejorar la calidad de vida de las
                    personas a través del ejercicio, buena alimentación y disciplina basados en
                    programas de entrenamiento y profesionales que motiven en las personas el valor
                    de la salud y el ejercicio.</p>

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nuestra historia </h5>
                <p class="card-text">GYM STYLE nace como una idea de estudiantes, se analizó la posibilidad de crear un lugar donde a través del ejercicio se pudiera mejorar la calidad de vida de las persona, esta idea tenía como objetivo no sólo la consecución de un cuerpo atlético y tonificado, sino la prescripción del ejercicio de acuerdo con la condición física de las personas así como con sus motivaciones, previniendo lesiones y tratando los síntomas de distintos tipos de enfermedades.</p>
            </div>
        </div>
    </div>
</div>
<!-- Esta es nuestra linea de separación entre las cards -->
<div class="container">
    <hr id="hr"></hr>
</div>
<!-- titulo de cards de promociones  -->
<h1 id="Titulo">PROMOCIONES DE ULTIMA HORA</h1>
<!-- Contenido de las cards con imagenes, productos y cosas de interes -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://image.flaticon.com/icons/png/512/1257/1257619.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">BEBIDAS ENERGIZANTES</h5>
                    <p class="card-text">Manten tu energia, necesaria para cumplir tus deberes con los energizantes que traemos para ti.</p>
                    <p class="card-text">precio ahora:<h5 class="card-title">$5.390</h5></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://image.flaticon.com/icons/png/512/1248/1248801.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">TENIS DEPORTIVOS</h5>
                    <p class="card-text">La variedad es lo que te motiva. Estos tenis de running cómodos y versátiles son perfectos para correr, levantar pesas o jugar un picadito.</p>
                    <p class="card-text">precio ahora:<h5 class="card-title">$225.390</h5></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://image.flaticon.com/icons/png/512/1210/1210282.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">TAPETE DEPORTIVO</h5>
                    <p class="card-text">Son un implemento esencial para un entrenamiento de yoga, están diseñados para brindar seguridad, soporte y una tracción adecuada.</p>
                    <p class="card-text">precio ahora:<h5 class="card-title">$135.000</h5></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://image.flaticon.com/icons/png/512/1248/1248798.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">ROPA DEPORTIVA</h5>
                    <p class="card-text">Nuestras prendas están hechas con material micro modal que las hace súper suaves y completamente transpirables.</p>
                    <p class="card-text">precio ahora:<h5 class="card-title">$217.800</h5></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://image.flaticon.com/icons/png/128/1252/1252158.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">MAQUINAS DEPORTIVAS</h5>
                    <p class="card-text">Maquinas ideales para tu entrenamiento. Algunos de los beneficios de las maquinas es la ausencia de impacto en las articulaciones, fortalecimiento de músculos, quema de calorías, y prevención de enfermedades. </p>
                    <p class="card-text">precio ahora:<h5 class="card-title">$1.887.100</h5></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://image.flaticon.com/icons/png/512/1256/1256624.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">VITAMINAS</h5>
                    <p class="card-text">Un buen suplemento de vitaminas nos ayudará a estar en forma y a tener mejor salud y además de mejorar nuestra capacidad de asimilación, permitiendo aprovechar todos los nutrientes de nuestras comidas. </p>
                    <p class="card-text">precio ahora:<h5 class="card-title">$83.900</h5></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <hr id="hr"></hr>
</div>
<!-- Pequeña descripción de los objetivos a realizar -->
<div class="card">
    <p>CONQUISTA TUS OBJETIVOS</p>
    <div class="card-body">
        <p class="card-text">Sabemos que estás dispuesto a darlo todo para alcanzar tus metas. Conoce más servicios y complementa tu entrenamiento.</p>
    </div>
</div>
<!-- Reseña motivadora para nuestros usuarios, todo para que implementen mas el ejercicio  -->
<div class="container-fluid">
<h1 id="color">CONQUISTA TUS OBJETIVOS</h1>
</div>
<p id="Text_relleno">El ejercicio puede ayudar a prevenir el aumento de peso excesivo o ayudar a mantener la pérdida de peso. Cuando realizas actividad física, quemas calorías. Mientras más intensa sea la actividad, más calorías quemarás.

    Ir al gimnasio en forma regular es ideal, pero no te preocupes si no encuentras una franja de tiempo amplia para hacer ejercicio todos los días. Cualquier cantidad de actividad es mejor que ninguna. Para cosechar los beneficios del ejercicio, solo tienes que estar más activo a lo largo del día: sube las escaleras en lugar de usar el ascensor o acelera el ritmo de tus tareas domésticas. La consistencia es la clave.¿Necesitas un estímulo emocional? ¿O necesitas desahogarte después de un día estresante? Una sesión de gimnasia o una caminata rápida pueden ayudar. La actividad física estimula varias sustancias químicas cerebrales que pueden hacer que te sientas más feliz, más relajado y menos ansioso.

    También puedes sentirte mejor sobre tu aspecto y sobre tú mismo si realizas ejercicios regularmente, lo cual puede aumentar tu confianza y mejorar tu autoestima.¿Estás sin aliento después de hacer las compras o los quehaceres domésticos? La actividad física regular puede mejorar la fuerza muscular y aumentar la resistencia.

    El ejercicio suministra oxígeno y nutrientes a los tejidos y ayuda a que el sistema cardiovascular funcione de manera más eficiente. Y cuando tu salud cardíaca y pulmonar mejora, tienes más energía para hacer las tareas diarias.¿Te cuesta dormir? La actividad física regular puede ayudarte a quedarte dormido más rápido, a dormir mejor y más profundamente. Simplemente no hagas ejercicio demasiado cerca de la hora de acostarte, porque podrías tener demasiada energía como para irte a dormir.El ejercicio y la actividad física son excelentes formas de sentirte mejor, mejorar tu salud y divertirte.</p>

<br />
<br />
<br />
<br />

</div>



                <div>
                    <!-- *  Footer  -->
                    <footer class="text-center text-lg-start bg-light text-muted">
                  
                        <section
                            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                        >
                            <!-- Publicidad de nuestro gym a usuarios  -->
                            <div class="me-5 d-none d-lg-block">
                                <span>Este es un espacio publicitario de Gym Style:</span>
                            </div>
                           
                            <div>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                     
                        </section>
                  
                        <section class="">
                            <div class="container text-center text-md-start mt-5">
                                <!-- en esta parte del footer podremos encontrar caracteristicas propias de nuestro gym -->
                                <div class="row mt-3">
                              
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                        <!-- Pequeña meta que queremos cumplir hacia los usuarios -->
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            <i class="fas fa-gem me-3"></i>GYM STYLE
                                        </h6>
                                        <p>
                                            Esta empresa quiere que tus mas intimos sueños se cumplan 
                                        </p>
                                    </div>
                                 

                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                        <!-- Productos que el gym da a la venta de usuarios -->
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            Productos
                                        </h6>
                                        <p>
                                            <a href="#!" class="text-reset">Pesas</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Caminadoras</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Banco press</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Prensa de piernas</a>
                                        </p>
                                    </div>
                                
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                        <!-- Atencion al cliente con nuestras lineas a las cuales se pueden comunicar -->
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            Atencion al Cliente
                                        </h6>
                                        <p>
                                            <a href="#!" class="text-reset">Precios</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Configuraciones</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Pedidos</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Ayudas</a>
                                        </p>
                                    </div>
                                    <!-- Nuestros usuario podran comunicarse atravez de nuestras redes -->
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                       
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            Contactos
                                        </h6>
                                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                                        <p>
                                            <i class="fas fa-envelope me-3"></i>
                                            GymStyle@gmail.com
                                        </p>
                                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                                    </div>
                                 
                                </div>
                              
                            </div>
                        </section>
                        <!-- Nuestro Copyright que demuestra su autenticidad -->
                        <div class="text-center p-4" id="Footer">
                            © 2021 Copyright:
                            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Gym Style</a>
                        </div>
                      
                    </footer>
                 
                </div>
           <!-- bootstrap js  -->
          
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </body>
</html>
