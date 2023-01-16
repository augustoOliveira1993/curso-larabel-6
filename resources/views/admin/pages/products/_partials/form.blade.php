@include('admin.includes.alerts')

@csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input class="form-control" name="name" id="exampleFormControlInput1" value="{{ $product->name ?? old('name') }}" placeholder="Nome do produtos">
</div>
<div class="mb-3">
    <label for="inputGroupFile01" class="form-label">Foto Produto</label>
    <input type="file" name="image" class="form-control" id="inputGroupFile01">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Preço</label>
    <div class="input-group mb-3">
        <span class="input-group-text">R$</span>
        <input type="text" name="price" class="form-control" value="{{ $product->price ?? old('price') }}" placeholder="Ex.: R$ 19.99">
    </div>
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
    <textarea class="form-control no-resize" placeholder="Descrião do produto" name="description"
              id="exampleFormControlTextarea1" rows="3">{{ $product->description ?? old('description') }}</textarea>
</div>
<div class="col-12">
    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-primary">{{ $btmSubmit }}</button>
</div>
