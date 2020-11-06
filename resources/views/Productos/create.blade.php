<h1>Ingrese un Nuevo Producto</h1>


<form method="POST" action="{{route('productos.store')}}">
{{csrf_field()}}

<label for="title">categoria </label>
<input type="text" name="title" >   

<label for="url">titulo</label>
<input type="text" name="url" >   

<button >Guardar</button>
</form>
