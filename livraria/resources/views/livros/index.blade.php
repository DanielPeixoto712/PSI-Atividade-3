<ul>
@foreach($livros as $livro)
<li>
	<a href="{{route('livros.show', ['id'=>$livro->idl])}}"></a>
	{{$livro->titulo}}</li>
@endforeach
</ul>
{{$livros->render()}}

