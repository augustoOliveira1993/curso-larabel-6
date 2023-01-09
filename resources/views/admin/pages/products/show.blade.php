@extends('admin.layouts.app')
@section('title', 'Criação de Produtos')

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')

    <h1>Visualizar Produto</h1>

    <h5 class="card-title">{{$product->name}}</h5>
    <p class="">R$ {{$product->price }}</p>
    <p class="">{{ $product->description }}</p>
    <a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>
    <a href="#" class="btn btn-primary">Comprar</a>

@endsection



