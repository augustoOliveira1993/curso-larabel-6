@extends('admin.layouts.app')
@section('title', "Editar Produto {$product->name}")

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')
    <h1>Editar Produto - {{ $product->name  }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @include('admin.pages.products._partials.form', ['btmSubmit'=>'Atualiar'])

    </form>
@endsection

@push('styles')
    <style>
        .last {
            background: #CCC;
        }
    </style>
@endpush


