<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sigma</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
       <div id="app">
           @include('sweetalert::alert')
           <div class="container d-flex justify-content-center">
               <div class="row">
                   <div class="col-md-12 mt-5 mb-4">
                       <img class="d-block mx-auto mb-4" src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png" alt="">
                       <h2 class="titulo-bold text-center">Prueba de desarollo Sigma</h2>
                   </div>

                   <div class="col-md-8 d-flex justify-content-center mx-auto">
                       <p class="text-center lead parrafo font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos eos libero odit quam qui similique unde. Culpa delectus earum libero maiores maxime nobis odit, omnis placeat quibusdam quis. Reprehenderit.</p>
                   </div>

                   <div class="col-md-6 d-flex justify-content-center mx-0 px-0">
                       <img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" alt="" width="500">
                   </div>

                   <div class="col-md-6 d-flex justify-content-center mx-0 px-0">
                       <div class="card shadow-lg border-0 rounded-lg col-md-10">
                           <div class="card-body">
                               <form class="formulario" method="POST" action="/enviar" @submit="enviarFormulario">
                                   @csrf
                                   <div class="form-group">
                                       <label class="small mb-1 font-weight-bold" for="departamento">Departamento*</label>
                                       <select name="departamentos" id="departamentos" v-model="form.deparatamento" class="form-control py4" @change="cargarCiudades()">
                                           <option name="departamentos" v-for="(value, key, index) in departamentos">
                                               @{{ key }}
                                           </option>
                                       </select>
                                   </div>
                                   <div class="form-group">
                                       <label class="small mb-1 font-weight-bold" for="ciudad">Ciudad*</label>

                                       <select name="ciudades" id="ciudades" v-model="form.ciudad" class="form-control py4">
                                           <option name="ciudades" v-for="(value, key, index) in ciudades">
                                               @{{ value }}
                                           </option>
                                       </select>

                                   </div>
                                   <div class="form-group">
                                       <label class="small mb-1 font-weight-bold" for="nombre">Nombre*</label>
                                       <input class="form-control py-4" name="nombre" id="nombre" type="text" v-model="form.nombre" maxlength="50" placeholder="Alexander Fonseca" />
                                   </div>
                                   <div class="form-group">
                                       <label class="small mb-1 font-weight-bold" for="correo">Email*</label>
                                       <input class="form-control py-4" id="correo" name="correo" type="email" v-model="form.correo" maxlength="30" placeholder="example@example.com" />
                                   </div>
                                   <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                       <button type="submit" class="btn btn-primary btn-lg rounded-pill text-center boton-redondo ">Enviar</button>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </div>
       <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
