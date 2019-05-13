@extends('layout.app')

@section('contenido')

<h1>Aqui crearas tus instrucciones </h1>

<h5 class="text-red">Los manuales son un conjunto de instrucciones, asi que aqui podras registrar las instrucciones de tu manual y si deseas ser mas especifico opodras agregar detalles a estas instrucciones, estos detalles o las mismas instrucciones podran tener un video o imagen, asi como texto que el ayude a neustro usuario final a entender el manual, lo cúal es nuestro objetivo final. :) <a href="{{route('instrucciones.create')}}">Crear</a>
<a href="{{route('instrucciones.show',[1])}}">Ver instrucciones</a>
</h5>





<div class="container">
 

    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Título de la instruccións</label>
        <input type="text" class="form-control" placeholder="Título de la instrucción">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Descripción</label>
        <textarea class="form-control" placeholder="Escribe detalladamente las instrucciones"></textarea>

      </div>
      <div class="form-group">
        <input type="button" class="btn btn-success" value="Guardar">
      </div>
      <div class="form-group">
        <div class="col-12">
          <div id="dropzoneuno"  class="dropzone text-red" style="width: 75%; margin-left: 15%"></div>
          <span id="spmsn" class="text-green"></span> 
        </div>
      </div>
      <div class="form-group">
        <label>¿Quieres ser mas especifico?, para ello preciona el botón <b><i>Agregar detalles</i></b> y agrega los detalles que quieras</label>         
      </div>
      <div class="form-group">
        <input type="button" class="btn btn-danger" value="Agregar detalles" onclick="mostrar(this)">
      </div>
     <!--DETALLE DE LA INSTRUCCION-->
        <div id="divDetalle" class="col-10" style="display: none;">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Título del detalle de la instrucción</label>
                  <input type="text" class="form-control" placeholder="Título del detalle de lainstrucción">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Descripción del detalle</label>
                  <textarea class="form-control" placeholder="Escribe detalladamente las instrucciones"></textarea>

                </div>
                <div class="form-group">
                  <input type="button" class="btn btn-primary" value="Guardar detalle">
                </div>
                <div class="form-group">
                  <div class="col-12">
                    <div id="dropzonedos"  class="dropzone text-red" style="width: 75%; margin-left: 15%"></div>
                    <span id="spmsn" class="text-green"></span> 
                  </div>
                </div>
                
                </
              </form>

        </div>
     <!--/DETALLE DE LA INSTRUCCION-->
    </form>
</div>

@endsection

@section('scripts')
<link rel="stylesheet" href="{{ asset('plugins/dropzone/dropzone.css') }}">
<script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>
<script type="text/javascript">

  
  var usuario =$('#selUsuario').val();
  var empresa ="1";
  var ur="../admin/subir_procesos";

  Dropzone.autoDiscover=false;

  //$('.dropzone').dropzone ({ 
  $('#dropzoneuno').dropzone ({   
    url: ur, 
    acceptedFiles:'image/*',
    maxFilesize:5,
    maxFiles:1,
    dictDefaultMessage:'No olvides guardar la instrucción y luego arrastra o da clic aquí para subir tus archivos, recurda que deben ser imagenes',
    headers:{
      'X-CSRF-TOKEN':'{{ csrf_token()}}'
    },
    init: function() { 
    this.on("sending", function(file, xhr, formData){ 
      formData.append("usuario", usuario);
      formData.append("empresa", $('#selEmpresa').val()); }), 
    this.on("success", function(file, xhr){ 

      document.getElementById("spmsn").innerHTML=xhr.mensaje; }),
    this.on('error',function(file,error){
      console.log(error);
      $('.dz-error-message > span').text(error.file[0]);})
         
    }, 
  }); 

  //dropzone 2
  //
  var usuario =$('#selUsuario').val();
  var empresa ="1";
  var ur="../admin/subir_procesos";

  Dropzone.autoDiscover=false;

  $('#dropzonedos').dropzone ({ 
    url: ur, 
    acceptedFiles:'image/*',
    maxFilesize:5,
    maxFiles:1,
    dictDefaultMessage:'No olvides guardar el detalle y luego arrastra o da clic aquí para subir tus archivos, recurda que deben ser imagenes.',
    headers:{
      'X-CSRF-TOKEN':'{{ csrf_token()}}'
    },
    init: function() { 
    this.on("sending", function(file, xhr, formData){ 
      formData.append("usuario", usuario);
      formData.append("empresa", $('#selEmpresa').val()); }), 
    this.on("success", function(file, xhr){ 

      document.getElementById("spmsn").innerHTML=xhr.mensaje; }),
    this.on('error',function(file,error){
      console.log(error);
      $('.dz-error-message > span').text(error.file[0]);})
         
    }, 
  }); 
   function mostrar(e){
    if(document.getElementById("divDetalle").style.display == "none"){
      document.getElementById("divDetalle").style.display = "";
      e.value="Ocultar detalles";
    }else{
      document.getElementById("divDetalle").style.display = "none";
      e.value="Agregar detalles";
    }
    
   }
</script>

@endsection