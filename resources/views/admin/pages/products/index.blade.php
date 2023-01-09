@extends('admin.layouts.app')
@section('title', 'Gestão de Produtos')

@section('content')
    <div class="row justify-content-between align-content-between">
        <div class="col-10">
            <h1>Exibindo os produtos</h1>
        </div>
        <div class="col-auto align-items-end align-self-center justify-content-end">
            <button id="btn-cadastrar" type="button" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>

    @if (isset($products))
        @component('admin.components.tables')
            @slot('header')
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th width="100">Ações</th>
                </tr>
            @endslot
            @slot('body')
                @foreach ($products as $product)
                    <tr class="">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="col-2">

                            <a id="btn-view" type="button" class="btn btn-primary" href="{{ route('products.show', $product->id) }}"><i class="fas fa-eye"></i></a>
                            <a id="btn-edit" type="button" class="btn btn-success" href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent

        @if ($products->lastPage() > 1)
            <ul class="pagination">
                <li class="page-item {{ ($products->currentPage() == 1) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $products->url(1) }}">Primeira</a>
                </li>
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="page-item {{ ($products->currentPage() == $i) ? ' active' : '' }}">
                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $products->url($products->lastPage()) }}">Última</a>
                </li>
            </ul>
        @endif
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
        const btnCadastrar = document.getElementById('btn-cadastrar');
        btnCadastrar.addEventListener('click', () => {
            window.location.href = "{{ route('products.create') }}";
        });
        document.body.style.background = '#efefef';
    </script>
@endpush
