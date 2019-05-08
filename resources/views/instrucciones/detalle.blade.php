@extends('layout.app')

@section('contenido')
<div class="col-sm-2" style="border: 1px solid blue;0">
	<ul class="list-group">
	  <li class="list-group-item active">Instrucciones</li>	
	  <li class="list-group-item">Buscar</li>	
	  <li class="list-group-item">Aqui van las instrucciones principales</li>	  
	  <li class="list-group-item">Aqui van las instrucciones principales</li>	  
	  <li class="list-group-item">Aqui van las instrucciones principales</li>	  
	  <li class="list-group-item">Aqui van las instrucciones principales</li>	  
	</ul>	
</div>
<div class="col-sm-10 pull-right" style="border: 1px solid green">
	{{dump($instrucciones[1]->detalles_de_la_instruccion)}}
	<div class="col-sm-12"><h1 class="text-danger">Aqui veras tus instrucciones</h1>	</div>
	<div class="col-sm-12 text-primary">
		<b>aqui van las instrucciones para el shampoo</b>
	</div>
	<div class="col-sm-12">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>
	<div class="col-sm-12">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{asset('archivos/manual_metal_bit/Selection_004.png')}}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{asset('archivos/manual_metal_bit/Selection_005.png')}}" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{asset('archivos/manual_metal_bit/Selection_006.png')}}" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>
	</div>
</div>	






@endsection