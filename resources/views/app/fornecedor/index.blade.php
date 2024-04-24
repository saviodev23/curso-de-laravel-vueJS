<h3>Fornecedor</h3>

{{-- teste--}}

{{-- @php

    echo 'teste'
@endphp --}}

{{-- @dd($fornecedores) --}}

Fornecedor: {{$fornecedores[0]['nome'] }}
<br>
Status: {{$fornecedores[0]['status']}}
<br>

@if (!($fornecedores[0]['status']=='S'))
    <h3>Fornecedor inátivo</h3>
@endif

<br>
<br>

<h2>COUNT</h2>

@if (count($fornecedores) > 0 && count($fornecedores) < 4)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 4)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif

<br>
<br>
<h2>ISSET</h2>

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome'] }}
    <br>
    status: {{$fornecedores[0]['status']}}
    <br>

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj']}}

        @empty($fornecedores[0]['cnpj'])
            - vazio
        @endempty

    @endisset
@endisset

{{-- O endisset verifica a existencia da variavel --}}
{{-- o empty verifica se a variavel está vazia ou não --}}

<br>
<br>
<h2>condição DEFAUL usando '??'</h2>

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome'] }}
    <br>
    status: {{$fornecedores[0]['status']}}
    <br>

    CNPJ: {{$fornecedores[0]['cnpj'] ?? 'dado não preenchido'}}

    {{-- variavel testada não estiver definida (isset)
     ou
     variavel testada for igual tiver o vallor null
    --}}

@endisset

<br>
<br>
<h2>Switch Case</h2>

@isset($fornecedores)
    Fornecedor: {{$fornecedores[1]['nome'] }}
    <br>
    status: {{$fornecedores[1]['status']}}
    <br>
    
    Telefone: ({{$fornecedores[1]['ddd'] ?? 'ddd vaio' }}) {{$fornecedores[1]['telefone'] ?? 'telefone vazio' }}
    @switch($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo SP
            @break
        @case ('32')
            Juiz de Fora MG
            @break
        @case ('85')
            Fortaleza CE
            @break
        @default
            Estado não identificado
    @endswitch

@endisset

<br>
<br>
<h2>For</h2>

@isset($fornecedores)
    @for($i=0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['nome'] }}
        <br>
        status: {{$fornecedores[$i]['status']}}
        <br>
        Telefone: ({{$fornecedores[$i]['ddd'] ?? 'ddd vaio' }}) {{$fornecedores[$i]['telefone'] ?? 'telefone vazio' }}
        <hr>
    @endfor    
@endisset

<br>
<br>
<h2>While</h2>


@isset($fornecedores)
    @php $i = 0 @endphp

    @while(isset($fornecedores[$i]))
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        status: {{$fornecedores[$i]['status']}}
        <br>
        Telefone: ({{$fornecedores[$i]['ddd'] ?? 'ddd vaio' }}) {{$fornecedores[$i]['telefone'] ?? 'telefone vazio' }}
        <hr>
        @php $i++ @endphp
    @endwhile    
@endisset

<br>
<br>
<h2>ForEach</h2>

@isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        status: {{$fornecedor['status']}}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? 'ddd vaio' }}) {{$fornecedor['telefone'] ?? 'telefone vazio' }}
        <hr>
        @php $i++ @endphp
    @endforeach
@endisset

<br>
<br>
<h2>ForElse</h2>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        status: {{$fornecedor['status']}}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? 'ddd vaio' }}) {{$fornecedor['telefone'] ?? 'telefone vazio' }}
        <hr>

    @empty
        nao existe fornecedores cadastrados!!
    @endforelse

@endisset