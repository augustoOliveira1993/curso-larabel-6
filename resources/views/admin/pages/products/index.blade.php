@extends('admin.layouts.app')
@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os produtos</h1>

    @if($testeContent === '123')
        <p>É Igual a '123'</p>
    @elseif($testeContent == 123)
        <p>É um numero 123</p>
    @else
        <p>É Diferente</p>
    @endif

    @unless($testeContent === '123')
        <p>asdkoaskdo</p>
    @else
        <p>asdasdas 22111</p>
    @endunless

    @isset($testeContent2)
        {{ $testeContent2 }}
    @endisset

    @empty($testeContent3)
        <p>Vazio</p>
    @endempty

    @auth
        <p>Autenticado</p>
    @else
        <p>Não Autenticado</p>
    @endauth

    @guest
        <p>Não Autenticado</p>
    @endguest

    @switch($testeContent)
        @case(1)
            Igual 1
            @break
        @case(2)
            Igual 2
            @break
        @case(3)
            Igual 3
            @break
        @case(123)
            Igual 123
            @break
        @default
            Default
    @endswitch

    <hr>
    @if(isset($products))
        <ul>
            @foreach($products as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ul>
    @endif
    <hr>
    @forelse($products as $product)
        <p>{{ $product->name }}</p>
    @empty
        <p>Não existe produtos cadastrado..</p>
    @endforelse

@endsection
