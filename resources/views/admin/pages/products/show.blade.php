@extends('admin.layouts.app')
@section('title', 'Criação de Produtos')

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')
    <div class="container d-flex flex-column align-items-center">


        <h1>Visualizar Produto</h1>
        <img src="{{ $product->image }}" width="300px" alt="" srcset="">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="">R$ {{$product->price }}</p>
        <p class="">{{ $product->description }}</p>

    </div>
    <div class="d-flex gap-2">
        <a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button id="btn-delete" type="submit" class="btn btn-danger">Deletar produto: {{$product->name}}</button>
        </form>
    </div>

@endsection



