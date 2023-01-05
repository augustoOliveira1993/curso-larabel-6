@extends('admin.layouts.app')
@section('title', 'Criação de Produtos')

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input hidden type="text" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" id="name" placeholder="Nome">
        <input type="text" name="description" id="description" placeholder="Descrição">

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


