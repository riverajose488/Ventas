<h1>Edite un Producto</h1>


<form method="POST" action="{{route('productos.update',$productos->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="patch">

<label for="title">nombre </label>
<input type="text" name="title" value="{{$productos->title}}" >   

<label for="url">url</label>
<input type="text" name="url" value="{{$productos->url}}" >   



<button >Guardar</button>
</form>


