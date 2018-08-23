<h1>Listagem das disciplinas</h1>
<ul>
	@foreach ($disciplinas as $disciplina)
	<li>{{ $disciplina->titulo }} - <?php echo $disciplina->ementa?></li>
	@endforeach
</ul>