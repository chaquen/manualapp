<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/miestilo.css')}}" >
        <title>{{config('app.name')}}</title>
    </head>
    <body>
        <div class="container-fluid" >
          <nav class="navbar navbar-expand-lg"  style="background-color: #f2f1fb; " >
              
              
              <a class="navbar-brand" href="http://metalbit.co/core">
                          <img class="logo" src="http://localhost/metalbit/public/img/AzulMetalicoHor_logo.png">
              </a>

              <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link text-blue" href="http://metalbit.co/core">Ver anuncios <span class="sr-only">(current)</span></a>
                  </li>
                 
                  
              </ul>
          </nav>    
             
        </div>
        
        <div class="row col-12" style="height: 1000px; ">
            @yield('contenido')                    
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    </body>
</html>
