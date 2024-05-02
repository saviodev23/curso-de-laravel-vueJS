{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="text" value="{{ old('nome') }}" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" type="text" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" type="text" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" value="{{ old('motivo_contato') }}" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}" value="{{old('mensagem')}}">
        @if(old('mensagem') != '')
            {{old('mensagem')}}
        @else
            Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

