<h1>Listagem das disciplinas</h1>
<a href="/disciplinas/create">+ Nova disciplina</a>
<ul>
	@foreach ($disciplinas as $disciplina)
	<li><a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a></li>
	@endforeach
</ul>