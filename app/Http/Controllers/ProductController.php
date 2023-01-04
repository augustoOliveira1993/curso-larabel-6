<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;
    public array $products = [
        [
            "id" => 1,
            "name" => 'TV',
            "price" => 1000,
            "description" => "Smart TV"
        ],
        [
            "id" => 2,
            "name" => 'Notebook',
            "price" => 5000,
            "description" => "Macbook Pro"
        ],
        [
            "id" => 3,
            "name" => 'Tablet',
            "price" => 2000,
            "description" => "Ipad"
        ]
    ];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products;
        $testeContent = 123;
        $testeContent2 = 321;
        $testeContent3 = [];

        return view('admin.pages.products.index' , compact("products", "testeContent", "testeContent2", "testeContent3"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Formulário para editar o produto de id: {$id}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Atualizando o produto de id: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Deletando o produto de id: {$id}";
    }
}
