<!--Analísis y Desarrollo de Sistemas de Informción
Ficha: 2252471
Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro-->
@extends('layouts.app')

@section('content')

<style>
    #Titulo{
        position: relative;
        left:400px;
    }

    #Subtitulo{
        color:white;
    }
</style>
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="https://1000marcas.net/wp-content/uploads/2021/06/Crunch-Fitness-Logo.png" style="width:8rem;"  alt=""></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado Sesion Como usuario: Deberias intentar apartar una clase') }}
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <br>
    <!-- <div class="container-fluid">
    <h1 id="Titulo"> <img id="diseño1" src="{{URL::asset('/img/Titulo.png')}}" width="500rem"  alt=""></h1>
    </div> -->
    <!-- Titulo en donde le indicara el guardado de clases -->
    <h3 id="Subtitulo">Todas tus clases se guardaran aqui!! GYM Style</h3>
    <br>
    <br>
    <div class="col-12">
        <div class="box-header">
            <!--crear modal y botón para registrar clase -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#RClases">
                Registrar Clase
            </button>
        </div>
            <<table class="table table-dark table-striped">
            <thead>
                <!-- Aqui esta el pequeño formulario que aparecera despues de seleccionar el boton registrar clase el "ID" es automatico -->
                <tr>
                    <th>ID</th>
                    <th>Hora</th>        
                    <th>Clase</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($Tablaclase as $tbclase)
                    <tr>
                        <!-- en esta seccion ya tenemos nuestro registro de datos mostrados y de igual forma nos muestra un boton para poder eliminarlo -->
                        <td>{{ $tbclase->id }}</td>
                        <td>{{ $tbclase->hora }}</td>     
                        <td>{{ $tbclase->clase }}</td>
                        <form method="post" action="{{url('Eliminar-clase/'.$tbclase->id)}}">
                        @csrf
                        @method ('delete')
                        <td><button class="btn btn-danger"> Borrar </button>
                        </td>
                    </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
    </div>
    

            
    <!-- Modal y registro de clase en donde nos dara las opciones disponibles de clases y horarios -->
    <div class="modal fade" id="RClases" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title " id="staticBackdropLabel">Registrar Clase</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <h2>Hora</h2>
                        <select class="form-control input-lg" name="hora" require="">
                            <option value=""> Seleccionar...</option>
                            <option value="8:00">8:00</option>
                            <option value="10:00">10:00</option>
                            <option value="14:00">14:00</option>
                            <option value="16:00">16:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h2>Clases</h2>
                        <select class="form-control input-lg" name="clase" require="">
                            <option value=""> Seleccionar...</option>
                            <option value="Trx">Trx</option>
                            <option value="Boxeo">Boxeo</option>
                            <option value="Yoga">Yoga</option>
                            <option value="Entrenamiento basico">Entrenamiento basico</option>
                        </select>
                    </div>
                </div>
                <!-- boton para poder crear la clase -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
