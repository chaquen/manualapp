@extends('layout.app')
@section('nav')
            
     
@endsection
@section('contenido')

<h1>Aqui crearas tus instrucciones </h1>

<h5 class="text-red">Los manuales son un conjunto de instrucciones, asi que aqui podras registrar las instrucciones de tu manual y si deseas ser mas especifico opodras agregar detalles a estas instrucciones, estos detalles o las mismas instrucciones podran tener un video o imagen, asi como texto que el ayude a neustro usuario final a entender el manual, lo cúal es nuestro objetivo final. :) <a href="{{route('instrucciones.create')}}">Crear</a>
<a href="{{route('instrucciones.show',[1])}}">Ver instrucciones</a>
</h5>





<div class="container">
 

    <form id="formInstruccion"> 
      <div class="form-group">
        <label for="exampleFormControlInput1">Título de la instruccións</label>
        <input type="hidden" name="id_instruccion" id="hd_id_instruccion">
        <input id="titulo_instruccion" type="text" name="titulo_instruccion" class="form-control" placeholder="Título de la instrucción" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Descripción</label>
        <textarea id="descripcion_instruccion" name="descripcion_instruccion" class="form-control" placeholder="Escribe detalladamente las instrucciones" required></textarea>

      </div>
      <div class="form-group">
        <label id="lblmsnin"></label>
      </div>
      <div class="form-group" id="div_video" >
        <div class="col-12">
          <input id="txt_video" type="text" class="form-control"  name="url_video" placeholder="Escribé aquí la url del video">
        </div>
      </div>
      <div class="form-group" id="div_imagen" >
        <div class="col-12">
          <div id="dropzoneuno"  class="dropzone text-red" ></div>
          <span id="spmsn" class="text-green"></span> 
        </div>
      </div>
      <div class="form-group">
        <input id="btnGuardar" type="button" class="btn btn-success" value="Guardar" >
      </div>

      <div class="form-group">
        <label>¿Quieres ser mas especifico?, para ello preciona el botón <b><i>Agregar detalles</i></b> y agrega los detalles que quieras</label>         
      </div>
      <div class="form-group">
        <input type="button" class="btn btn-danger" value="Agregar detalles" onclick="mostrar(this)">
      </div>
     
    </form>
    <!--DETALLE DE LA INSTRUCCION-->
        <div id="divDetalle" class="col-10" style="display: none;">
            <form id="formDetalleInstruccion">
                <div class="form-group col-12" >
                  <label for="exampleFormControlInput1">Instrucciónes</label>
                  <select id="selInstrucciones" name="id_instruccion" class="form-control" ></select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Título del detalle de la instrucción</label>
                  <input type="text" name="titulo_detalle_instruccion" class="form-control" placeholder="Título del detalle de la instrucción">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Descripción del detalle</label>
                  <textarea name="descripcion_detalle_instruccion" class="form-control" placeholder="Escribe detalladamente las instrucciones"></textarea>

                </div>
                
                <div class="form-group">
                  <label id="lblmsndtin"></label>
                </div>
                <div class="form-group">                  
                    <input type="text" class="form-control"  name="url_video" placeholder="Escribé aquí la url del video para tus detalles">                  
                </div>
                <div class="form-group">
                  <div class="col-12">
                    <div id="dropzonedos"  class="dropzone text-red" ></div>
                    <span id="spmsn" class="text-green"></span> 
                  </div>
                </div>
                <div class="form-group">
                  <input id="btnGuardarDetalle" type="button" class="btn btn-primary" value="Guardar detalle">
                </div>
            </form>

        </div>
     <!--/DETALLE DE LA INSTRUCCION-->
</div>

@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('#selInstrucciones').select2();
    consultar_instrucciones();
    document.getElementById('btnGuardar').addEventListener('click',registrar_instruccion);
    //document.getElementById('txt_video').addEventListener('change',registrar_video_instruccion);
    document.getElementById('btnGuardarDetalle').addEventListener('click',registrar_detalle_instruccion);
    
  });
</script>

<link rel="stylesheet" href="{{ asset('plugins/dropzone/dropzone.css') }}">
<script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>
<script type="text/javascript">

  
  
  var ur="../subir_imagenes_instrucciones";

  Dropzone.autoDiscover=false;
  var lista_archivos=[];
  var lista_archivos_detalle=[];
  //$('.dropzone').dropzone ({ 
  $('#dropzoneuno').dropzone ({   
    url: ur, 
    acceptedFiles:'image/*',
    maxFilesize:5,
    maxFiles:10,
    dictDefaultMessage:'No olvides guardar la instrucción y luego arrastra o da clic aquí para subir tus archivos, recurda que deben ser imagenes',
    headers:{
      'X-CSRF-TOKEN':'{{ csrf_token()}}'
    },
    init: function() { 
    this.on("sending", function(file, xhr, formData){ 
      
       }), 
    this.on("success", function(file, xhr){ 
       lista_archivos.push(xhr.ruta); 
      //document.getElementById("spmsn").innerHTML=xhr.mensaje; 
    }),
    this.on('error',function(file,error){
      console.log(error);
      $('.dz-error-message > span').text(error.file[0]);})
         
    }, 
  }); 

  //dropzone 2
  //
  
 

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
       }), 
    this.on("success", function(file, xhr){ 
      lista_archivos_detalle.push(xhr.ruta); 
      document.getElementById("spmsn").innerHTML=xhr.mensaje; }),
    this.on("complete", function(file, xhr){ 

         this.removeAllFiles(true);  }),
    this.on('error',function(file,error){
      console.log(error);
      $('.dz-error-message > span').text(error.file[0]);})
         
    }, 
  }); 


  //funcion para ocultar o mostrar foirmulario de detalles
   function mostrar(e){
    if(document.getElementById("divDetalle").style.display == "none"){
      document.getElementById("divDetalle").style.display = "";
      e.value="Ocultar detalles";
    }else{
      document.getElementById("divDetalle").style.display = "none";
      e.value="Agregar detalles";
    }
    
   }

  function ajax_post(data,url,funcion){
    console.log(data);
    $.ajaxSetup({
                headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
    $.ajax({
              type: "POST",
              url: "{{config('app.url')}}/"+url,
              data: data,
              dataType: "json",
              success: function(rs){
                funcion(rs);
              },
              error:function(rs){
                console.log(rs);
                
              },
              
    });
  }

  function ajax_get(url,funcion){
    
    
    $.ajax({
              type: "GET",
              url: "{{config('app.url')}}/"+url,
              dataType: "json",
              success: function(rs){
                funcion(rs);
              },
              error:function(rs){
                console.log(rs);
                
              },
              
    });
  }

  function registrar_instruccion(){
 
    var data=$('#formInstruccion').serializarFormulario();
    console.log(data);
    data.lista_archivos=lista_archivos;
    mostrar_cargando("lblmsnin",10,"Estamos registrando un momento, por favor...");
    
    if(data!=false){
      ajax_post(data,"instrucciones",function(rs){
        document.getElementById("hd_id_instruccion").value=rs.id;
        alert("Hemos creado una instrucción ");
        //document.getElementById("div_video").style.display="";
        //document.getElementById("div_imagen").style.display="";
        document.getElementById("lblmsnin").innerHTML="";
        document.getElementById('titulo_instruccion').value="";
        document.getElementById('descripcion_instruccion').value="";
        consultar_instrucciones();

      });   
    }else{
        alert("debes ingresar los campos requeridos");
    }    


  }

  function registrar_video_instruccion(){
 
    var data=document.getElementById("txt_video").value;
    var id = document.getElementById("hd_id_instruccion").value;
    console.log(data);
    mostrar_cargando("lblmsnin",10,"Estamos registrando un momento, por favor...");
    
    if(data!="" && id != ""){
      ajax_post({"video":data},"agregar_video_instruccion/"+id,function(rs){
        alert("Hemos creado una instrucción ahora puedes agregar las imagenes o video que creas pertinentes");
        document.getElementById("div_video").style.display="";
        document.getElementById("div_imagen").style.display="";
        document.getElementById("lblmsnin").innerHTML="";
        document.getElementById('txt_video').value="";
      });   
    }else{
        alert("debes ingresar una url y registrar una instrucción");
    }    


  }

  function registrar_detalle_instruccion(){
    
    
    var data=$('#formDetalleInstruccion').serializarFormulario();
    console.log(data);
    data.lista_archivos=lista_archivos_detalle;
    mostrar_cargando("lblmsndtin",10,"Estamos registrando un momento, por favor...");
    
    if(data!=false){
      ajax_post(data,"detalle_instrucciones",function(rs){
        document.getElementById("hd_id_instruccion").value=rs.id;
        alert("Hemos creado un detalle para una instrucción ");
        //document.getElementById("div_video").style.display="";
        //document.getElementById("div_imagen").style.display="";
        document.getElementById("lblmsndtin").innerHTML="";
        document.getElementById('titulo_detalle_instruccion').value="";
        document.getElementById('descripcion_detalle_instruccion').value="";
        consultar_instrucciones();

      });   
    }else{
        alert("debes ingresar los campos requeridos");
    }    
  }



  /**
   * [funcion para mostrar cargando luego de enviar la peticion a el servidor]
   * @param  {[type]} el [description]
   * @return {[type]}    [description]
  */
  function mostrar_cargando(el,width,msn){
    $('#'+el).html('<div class="loading text-green"><img src="https://k46.kn3.net/taringa/C/7/8/D/4/A/vagonettas/5C9.gif" width="'+width+'" alt="loading" /><br/>'+msn+'</div>');
  }
  
  function consultar_instrucciones(){
    ajax_get('lista_instrucciones',function(rs){
      console.log(rs);
      var sel=document.getElementById('selInstrucciones');
      sel.innerHTML="";
      for(r in rs){
        var opt=document.createElement("option");
        opt.value=rs[r].id;
        opt.innerHTML=rs[r].titulo_instruccion;
        sel.appendChild(opt);
      }
    });
  }
</script>
@include('partials.scripts')
@endsection
