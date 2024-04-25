{{$slot}}
<form action={{route('site.contato')}} method="POST">
    @csrf
    <input name="nome" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_mensagem" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>