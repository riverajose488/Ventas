<h1> Listado De Productos</h1>
<table>
	<tr>
		
		<td>title</td>
		<td>url</td>

	
	</tr>
        
	<tr>
	<tr>

     	 <td>{{$productos->title}}</td> 
		 <td>{{$productos->url}}</td>
		
	</tr>
	</tr>
</table>


<form method="POST" action="{{route('productos.destroy',$productos->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="delete">

<button>Eliminar</button>
</form>


<a href="{{route('productos.edit', $productos)}}">Editar</a>