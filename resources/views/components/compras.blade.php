<!DOCTYPE html>
<!--Analísis y Desarrollo de Sistemas de Informción
Ficha: 2252471
Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Compras</title>
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
  
  /* Section  */
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
  
  /* Footer  */
  
  #Footer{
    background-color: rgba(0, 0, 0, 0.05);
  }
  
  
  /* Compras.js creacion de estilos */
  
  #card-group{
    margin: 50px;
  }
  
  /* Home.js creacion de estilos  */
  
  #titulo-Home{
      font-size: 35px;
      color: white;
      margin: 20px;
  }
  
  /* Horarios para el usuario  */
  
  #text-horario{
    color: white;
  }

  .App {
  text-align: center;
}

.App-logo {
  height: 40vmin;
  pointer-events: none;
}

@media (prefers-reduced-motion: no-preference) {
  .App-logo {
    animation: App-logo-spin infinite 20s linear;
  }
}

.App-header {
  background-color: #282c34;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: calc(10px + 2vmin);
  color: white;
}

.App-link {
  color: #61dafb;
}

@keyframes App-logo-spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

    </style>

<body background="https://fondosmil.com/fondo/4031.jpg " class="fixed-static">


    <nav class="navbar navbar-expand-lg navbar- bg-">
        <div class="container-fluid">
            <!-- Aquí podremos encontrar nuestroapartado para que el menu se pueda colapsar a la hora de cambiar el tamaño de la pantalla -->
            <a class="navbar-brand" href="{{url('/')}}"><img src="https://1000marcas.net/wp-content/uploads/2021/06/Crunch-Fitness-Logo.png" style="width:8rem;"  alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- este boton nos llevara directo a la seccion de compras -->
                <a type="button" class="btn btn-danger"class="nav-link active" aria-current="page" href="{{url('/compras')}}">Compras</a>
                </li>
            </ul>
            <!-- En esta parte nos mostrar nuestros botonesw para registrar e iniciar sesion -->
            </div>
               @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a type="button" class="btn btn-danger" class="nav-link" href="{{url('/Section')}}">Clases</a>     
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


        <!-- titulo principal antes de nuestras cards -->
        <h1 id="Titulo">COMPRA LOS MEJORES OBJETOS PARA QUE ESTES COMODO EN EL GYM</h1>
                <!-- Se podra encontrar con las cards, en estas vera todos los elementos que ofrece el gym, para que usted pueda comprar segun sus caracteristicas y pecios -->
                <div className="container">
                    <div id="card-group" class="card-group">
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226236.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title"> Aro Para Entrenamiento</h5>
                                <p class="card-text">Es un elemento funcional y fundamental para el entrenamiento de coordinación y de propiocepción, entre otras.</p>
                                <p class="card-text"><small class="text-muted">$7.800</small></p>
                                <button  type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1219/1219860.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Mancuernas Pesas Por 2 Unidades</h5>
                                <p class="card-text">Entrenamiento con cargas, en el cual se usa la fuerza de gravedad que se opone a la contracción muscular.</p>
                                <p class="card-text"><small class="text-muted">$23.750</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1255/1255713.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Bicicleta de montaña </h5>
                                <p class="card-text">La Bicicleta es impulsada por el propio viajero, que acciona el vehículo con el esfuerzo muscular de las piernas, en particular mediante pedales o manivelas.</p>
                                <p class="card-text"><small class="text-muted">$1.300.000</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div id="card-group" class="card-group">
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/128/1222/1222720.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Botella Deportiva Adidas</h5>
                                <p class="card-text">Producto ambientado, solo incluye productos especificados en la descripción.</p>
                                <p class="card-text"><small class="text-muted">$ 34.990</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/425/425829.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Pesas de polietileno de alta densidad</h5>
                                <p class="card-text">Le permiten concentrarse en grupos musculares diferentes para un entrenamiento de cuerpo entero, desde tus pantorrillas a sus brazos y hombros</p>
                                <p class="card-text"><small class="text-muted">$275.000</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226172.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Barra deportiva</h5>
                                <p class="card-text">Es un equipo de entrenamiento usado en entrenamiento con pesas, halterofilia, atletismo de fuerza y levantamiento de potencia.</p>
                                <p class="card-text"><small class="text-muted">$139.900</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div id="card-group" class="card-group">
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/128/1226/1226178.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Cruce De Cable Ajustable </h5>
                                <p class="card-text">La máquina de cruce de cables se utiliza para la estación de levantamiento de rodillas, estación de dominadas con múltiples agarres, estación de inmersión, estación de empuje y otros ejercicios de entrenamiento de fuerza.</p>
                                <p class="card-text"><small class="text-muted">$1.599.999</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226176.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Maquina De Remo Magnetica Con Monitor</h5>
                                <p class="card-text">Perfecto para aquellos centrados en el ajuste que tienen más motivación que el espacio de entrenamiento.</p>
                                <p class="card-text"><small class="text-muted">$1.680.900</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/128/1226/1226175.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Bicicleta Eliptica</h5>
                                <p class="card-text">Esta bicicleta cuenta con asiento ergonómico profesional, que puedes ajustar a tu altura y a la distancia de tus brazos, para estar en total comodidad para el ejercicio.</p>
                                <p class="card-text"><small class="text-muted">$ 869.900</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div id="card-group" class="card-group">
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/128/1226/1226180.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Maquina pectoral</h5>
                                <p class="card-text">Es una máquina que cuenta con un asiento para trabajar los músculos sentados, ejercitando el tren superior del cuerpo.</p>
                                <p class="card-text"><small class="text-muted">$2.575.900</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226174.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Caminadora</h5>
                                <p class="card-text">Una cinta de correr, cinta ergométrica, caminadora de banda o máquina de caminar es una máquina para entrenamiento físico que puede funcionar mediante propulsión eléctrica o manual, y que sirve para correr o andar sin moverse de un mismo sitio.</p>
                                <p class="card-text"><small class="text-muted">$1.149.000</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226186.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Balón Inestable </h5>
                                <p class="card-text">Nos ayuda a mejorar el equilibrio, especialmente de las articulaciones de tobillo, rodilla y cadera.Fortalece los músculos de pies y piernas. Además nos ayuda a entrenar la coordinación, agilidad y concentración. Nos ayuda a corregir la postura</p>
                                <p class="card-text"><small class="text-muted">$64.900</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div id="card-group" class="card-group">
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226193.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Saco Bolsa Boxeo</h5>
                                <p class="card-text">El saco de boxeo o saco de box es un elemento imprescindible en los entrenamientos de multitud de deportes de contacto y artes marciales.</p>
                                <p class="card-text"><small class="text-muted">$229.000</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226203.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Pelota de gimnasia</h5>
                                <p class="card-text">Se trata de un producto asequible que, cuando se combina con ejercicios básicos, ayuda a mejorar la estabilidad, el equilibrio y la resistencia.</p>
                                <p class="card-text"><small class="text-muted">195.000</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://image.flaticon.com/icons/png/512/1226/1226201.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Raqueta de tenis</h5>
                                <p class="card-text">La raqueta es un instrumento deportivo que consiste en un marco con un aro abierto y con una especie de red o caucho que lo cubre. </p>
                                <p class="card-text"><small class="text-muted">$50.000</small></p>
                                <button id="CompraButtom" type="button" className="btn btn-warning">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br />
                    <br />
                    <br />
                    <br />
<div>
                <!-- *  Footer  -->
                <footer class="text-center text-lg-start bg-light text-muted">
              
                    <section
                        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                    >
                    <!-- Espacio para que puedan visualizar nuestras redes u espacio publicitario  -->
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
                      
                            <div class="row mt-3">
                          
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Reseñas que queremos cumplir de la mano con el usuario -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        <i class="fas fa-gem me-3"></i>GYM STYLE
                                    </h6>
                                    <p>
                                        Esta empresa quiere que tus mas intimos sueños se cumplan 
                                    </p>
                                </div>
                             

                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Productos que damos concurrentemente -->
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
                                    <!-- Atencion brindada para escuchar todo tipo de comentarios -->
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
                              
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                   <!-- lineas en donde nos podran comentar y contactar de forma personal  -->
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>