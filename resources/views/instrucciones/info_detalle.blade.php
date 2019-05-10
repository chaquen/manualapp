<!--DIV PRINCIPAL-->


	

	  <div class="card" style="height: 350%">
	    <div class="card-header bg-primary">
		  <i class="fa fa-anchor text-white"></i>
	      <a class="card-link text-white" data-toggle="collapse" href="#collapse{{$i->id}}">
	        <b>{{$i->titulo_instruccion}} </b>
	      </a>
	    </div>
	    <div id="collapse{{$i->id}}" class="collapse show" data-parent="#accordion">
	      <div class="card-body">
	       <p>{{$i->descripcion_instruccion}}</p>
	      </div>
	      <div class="card-body"><!--CARROUSEL-->
				<div class="col-sm-12" >
					<div id="carousel{{$i->id}}" class="carousel slide" data-ride="carousel" style="height: 325px">
					  <ol class="carousel-indicators">
					    <li data-target="#carousel{{$i->id}}" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel{{$i->id}}" data-slide-to="1"></li>
					    <li data-target="#carousel{{$i->id}}" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					  	@forelse($i->multimedia_de_la_instruccion as $k => $m)
					  	
					  		
					  		
					  		@if($m->tipo_multimedia_instruccion == "imagen"  )
					  			
					  			<div class="carousel-item {{$active = $k == 0 ? 'active' : ''}}" >
							      <img class="d-block w-100" height="340px" src="{{asset($m->multimedia_instruccion)}}" alt="{{config('app.name')}}">
							    </div>
							    
					  		@endif
					  	@empty
					  		<div class="carousel-item active">
						      <img class="d-block w-100" src="" alt="First slide">
						    </div>
					  	@endforelse
					    
					    
					  </div>
					  <a class="carousel-control-prev" href="#carousel{{$i->id}}" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="carousel-control-next" href="#carousel{{$i->id}}" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Siguiente</span>
					  </a>
					</div>
				</div>
		<!--/CARROUSEL--></div>
		  <div class="card-footer">
			<i class="fa fa-arrow-up text-success"></i>
		  	<b><a href="#top_menu" class="text-success" >Inicio</a></b>
		  </div>
	    </div>
	  </div>

	  




   
	
	

<!--/DIV PRINCIPAL-->