<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['Product 1', 'Product 2', 'Product 3'];
        return $products;
    }

    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";
    }

    public function create($request)
    {
        return 'Formulário de cadastro de produto';
    }

    public function edit($id)
    {
        return "Formulário de edição do produto de id: {$id}";
    }
    public function update($id)
    {
        return "Editando o produto do id: {$id}";
    }

    public function store()
    {
        return 'Cadastrando um produto';
    }
    public function destroy($id)
    {
        return "Deletado o produto do id: {$id}";
    }
}
