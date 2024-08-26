<h1>Listagen de Contatos</h1>
@foreach ($contacts as $contact)
<div>
    <p>{{ $contact->name}}</p>
</div>
@endforeach

<form action="/contato/store" method="POST">
    @method('POST')
    @csrf
    <button type="submit">Cadastrar Contato</button>
</form>

<form action="/contato/update" method="POST">
    @method('PUT')
    @csrf
    <button type="submit">Atualizar Contato</button>
</form>

<form action="/contato/delete/3" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir Contato</button>
</form>