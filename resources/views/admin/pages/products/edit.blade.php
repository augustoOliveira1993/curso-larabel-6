@extends('admin.layouts.app')
@section('title', 'Criação de Produtos')

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')
    <h1>Editar Produto - {{ $product['id']  }}</h1>

    <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @method('PUT')
        @csrf
        <input hidden type="text" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" id="name" placeholder="Nome" value="{{ $product['name'] }}">
        <input type="text" name="description" id="description" placeholder="Descrição" value="{{ $product['description'] }}">

        <button type="submit">Enviar</button>
    </form>
@endsection

@push('styles')
    <style>
        .last {
            background: #CCC;
        }
    </style>
@endpush


