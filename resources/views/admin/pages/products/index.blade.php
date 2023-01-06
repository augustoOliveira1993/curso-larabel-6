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
        @include('admin.includes.alerts', ['content' => 'Alerta de preços'])
    </div>



    @component('admin.components.card')
        @slot('header')
            <h1>Título Card</h1>
        @endslot
        Um card de exemplo
    @endcomponent




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
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>{{ $product['description'] }}</td>
                        <td class="col-2">
                            <button id="btn-view" type="button" class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            <button id="btn-edit" type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button id="btn-delete" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent
    @endif
@endsection

@push('script-actions-table')
    <script>
        const btnView = document.getElementById('btn-view');
        const btnEdit = document.getElementById('btn-view');
        const btnDelete = document.getElementById('btn-view');

        btnView.addEventListener('click', function() {
            window.location.href = "{{ route('products.show', $product['id']) }}";
        });
        btnEdit.addEventListener('click', function() {
            window.location.href = "{{ route('products.edit', $product['id']) }}";
        });
        btnDelete.addEventListener('click', function() {
            window.location.href = "{{ route('products.destroy', $product['id']) }}";
        });
    </script>
@endpush
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
