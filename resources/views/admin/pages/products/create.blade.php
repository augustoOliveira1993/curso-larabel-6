@extends('admin.layouts.app')
@section('title', 'Criação de Produtos')

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @include('admin.includes.alerts')

    <form action="{{ route('products.store') }}" method="POST" class="row w-100  mt-2" enctype="multipart/form-data">
        @csrf
        <input hidden type="text" name="_token" value="{{ csrf_token() }}">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input class="form-control" name="name" id="exampleFormControlInput1" placeholder="Nome do produtos">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Preço</label>
            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input type="number" name="price" class="form-control" placeholder="Ex.: R$ 19.99">
            </div>
        </div>
        <div class="mb-3">
            <label for="inputGroupFile01" class="form-label">Foto Produto</label>
            <input type="file" name="image" class="form-control" id="inputGroupFile01">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control no-resize" placeholder="Descrião do produto" name="description"
                      id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12">

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
@endsection


