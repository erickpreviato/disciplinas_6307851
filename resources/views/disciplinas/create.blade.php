<form method="POST" action="/disciplinas">
	{{ csrf_field() }}
	Nome: <input type="text" value="{{ $disciplina->titulo }}" name="titulo"> <br />
	Ementa: <textarea name="ementa" rows="4">{{ $disciplina->titulo }}</textarea><br />
	<button type="submit">Salvar</button>
</form>