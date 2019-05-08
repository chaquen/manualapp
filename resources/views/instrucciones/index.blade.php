@extends('layout.app')

@section('contenido')
<h5 class="text-red">Los manuales son un conjunto de instrucciones, asi que aqui podras registrar las instrucciones de tu manual y si deseas ser mas especifico opodras agregar detalles a estas instrucciones, estos detalles o las mismas instrucciones podran tener un video o imagen, asi como texto que el ayude a neustro usuario final a entender el manual, lo cúal es nuestro objetivo final. :) </h5>


<a href="{{route('instrucciones.create')}}">Crear</a>
<a href="{{route('instrucciones.show',[1])}}">Ver instrucciones</a>




@endsection