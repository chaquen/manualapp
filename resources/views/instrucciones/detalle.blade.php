@extends('layout.app')

@section('contenido')
<!--DIV NAV LATERAL-->
<div class="col-sm-3 " id="top_menu">

	 <div class="panel-group">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" href="#collapse_a">Collapsible list group</a>
	      </h4>
	    </div>
	    <div id="collapse_a" class="panel-collapse collapse">
	      <ul class="list-group">
	        <li class="list-group-item">One</li>
	        <li class="list-group-item">Two</li>
	        <li class="list-group-item">Three</li>
	      </ul>
	      <div class="panel-footer">Footer</div>
	    </div>
	  </div>
	</div> 
	<ul class="list-group sticky-top">
	  <li class="list-group-item active"><i class="fa fa-book text-warning"></i> ¿Ahora que hago?</li>	
	  	
	  @forelse($instrucciones as $i)
	  	<li class="list-group-item"><a class="text-responsive" href="#instruccion_{{$i->id}}">
        <i class="fa fa-life-ring text-info"></i>
	  		<b>{{$i->titulo_instruccion}}</b></a></li>
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