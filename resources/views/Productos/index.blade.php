@extends('layout')

@section('content')
    <h1>Listado Productos</h1>

    <form action="http://ventas.com/productos/create">
        <input type="submit" value="Ingresa un Nuevo" />
</form>

@forelse($productos as $producto)

    <li> <a href="{{route('productos.show',$producto['id'])}}">
    {{$producto->title}}</li>
    

    @empty<li>No hay productos para mostrar</li>

@endforelse    

@endsection