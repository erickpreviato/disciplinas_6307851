<h1>Listagem das disciplinas</h1>
<ul>
	@foreach ($disciplinas as $disciplina)
	<li><a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a></li>
	@endforeach
</ul>