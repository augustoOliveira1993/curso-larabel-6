@extends('admin.layouts.app')
@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar</a>
    <hr>
    @include('admin.includes.alerts', ['content' => 'Alerta de preços'])

    @component('admin.components.card')
        @slot('header')
            <h1>Título Card</h1>
        @endslot
        Um card de exemplo
    @endcomponent

    <hr>


    @if (isset($products))
        <table border="1" width="100%">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th width="100px">Ações</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product['id']) }}">Editar</a>
                        <a href="{{ route('products.show', $product['id']) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
{{--@section('content')--}}
{{--    <h1>Exibindo os produtos</h1>--}}

{{--    @if($testeContent === '123')--}}
{{--        <p>É Igual a '123'</p>--}}
{{--    @elseif($testeContent == 123)--}}
{{--        <p>É um numero 123</p>--}}
{{--    @else--}}
{{--        <p>É Diferente</p>--}}
{{--    @endif--}}

{{--    @unless($testeContent === '123')--}}
{{--        <p>asdkoaskdo</p>--}}
{{--    @else--}}
{{--        <p>asdasdas 22111</p>--}}
{{--    @endunless--}}

{{--    @isset($testeContent2)--}}
{{--        {{ $testeContent2 }}--}}
{{--    @endisset--}}

{{--    @empty($testeContent3)--}}
{{--        <p>Vazio</p>--}}
{{--    @endempty--}}

{{--    @auth--}}
{{--        <p>Autenticado</p>--}}
{{--    @else--}}
{{--        <p>Não Autenticado</p>--}}
{{--    @endauth--}}

{{--    @guest--}}
{{--        <p>Não Autenticado</p>--}}
{{--    @endguest--}}

{{--    @switch($testeContent)--}}
{{--        @case(1)--}}
{{--            Igual 1--}}
{{--            @break--}}
{{--        @case(2)--}}
{{--            Igual 2--}}
{{--            @break--}}
{{--        @case(3)--}}
{{--            Igual 3--}}
{{--            @break--}}
{{--        @case(123)--}}
{{--            Igual 123--}}
{{--            @break--}}
{{--        @default--}}
{{--            Default--}}
{{--    @endswitch--}}

{{--    <hr>--}}
{{--    @if(isset($products))--}}
{{--        <ul>--}}
{{--            @foreach($products as $product)--}}
{{--                <li class="@if($loop->last) last @endif">{{ $product }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}

{{--    <hr>--}}

{{--    @forelse($products as $product)--}}
{{--        <p class="@if($loop->first) last @endif">{{ $product }}</p>--}}
{{--    @empty--}}
{{--        <p>Não existe produtos cadastrado..</p>--}}
{{--    @endforelse--}}

{{--@endsection--}}
@push('styles')
    <style>
        .last {
            background: #CCC;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush
