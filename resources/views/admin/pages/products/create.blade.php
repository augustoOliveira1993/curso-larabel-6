@extends('admin.layouts.app')
@section('title', 'Criação de Produtos')

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')
    <h1>Cadastrar Novo Produto</h1>



    <form action="{{ route('products.store') }}" method="POST" class="row w-100  mt-2" enctype="multipart/form-data">
        @include('admin.pages.products._partials.form', ['btmSubmit'=>'Cadastrar'])
    </form>
@endsection


