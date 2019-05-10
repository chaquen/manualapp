@extends('layout.app')

@section('contenido')
<!--DIV NAV LATERAL-->
<div class="col-sm-3 " id="top_menu">

	 
	<ul class="list-group sticky-top">
	  <li class="list-group-item active"><i class="fa fa-book text-warning"></i> ¿Ahora que hago?</li>	
	  	
	  @forelse($instrucciones as $i)
	  	<li class="list-group-item"><a class="text-responsive" href="#instruccion_{{$i->id}}">
        <i class="fa fa-life-ring text-info"></i>
	  		<b>{{$i->titulo_instruccion}}</b></a></li>

	  		{{--<div class="panel-group">
			  <div class="panel panel-primary">
			    <div class="panel-heading" style="margin-left: 15px; margin-top: 8px">
			      <h6 >
			      	<i class="fa fa-life-ring text-info"></i>
			        <a data-toggle="collapse" href="#collapse_a"><b>{{$i->titulo_instruccion}}</b></a>
			      </h6>
			    </div>
			    <div id="collapse_a" class="panel-collapse collapse">
			      <ul class="list-group">
			      
			      	@foreach($i->detalles_de_la_instruccion as $im)
			      		
			      		<li class="list-group-item">
			      			<i class="fa fa-info-circle text-success"></i>
			      			<a href="#card_detalle_{{$im->id}}" class="text-black">{{$im->titulo_detalle_instruccion}}</a></li>
			        	
			      	@endforeach
			        
			      </ul>
			      
			    </div>
			  </div>
			</div> --}}

	  @empty

	  @endforelse
	  
	</ul>		
</div>
<!--/DIV NAV LATERAL-->
<!--DIV CONTENIDO-->
<div class="col-sm-9 pull-right">
	
	@forelse($instrucciones as $i)
	 <div id="accordion" >
		@include('instrucciones.info_detalle')	
	 </div>		
	@empty
		<h1 class="text-red">No existe información registrada en la base de datos</h1>>
	@endforelse		
	<div class="col-12 col-md-12" style="height: 50px; margin-top: 20px">
           @include('partials.logo')   
     </div>    
</div>	
<!--/DIV CONTENIDO-->





@endsection