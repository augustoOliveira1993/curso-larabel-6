<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Product $product)
    {
        $this->request = $request;
        $this->repository = $product;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // last ordena por id
        $products = Product::latest()->paginate(10);
//        dd($products);
        return view('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreUpdateProductRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUpdateProductRequest $request)
    {
//        dd($request->all());
        $data = $request->only(['name', 'price', 'description', 'photo']);
        $this->repository->create($data);


//        if ($request->file('photo')->isValid()) {
////           $request->file('photo')->store('products');
//            $nameFile = $request->name . '.' . $request->photo->extension();
//            $request->file('photo')->storeAs('products', $nameFile, 'public');
//        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $id)
    {

        if (!$product = $this->repository->find($id)) {
            return redirect()->back();
        }
        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {

        $product = $this->repository->find($id);
        if(!$product){
            return redirect()->back();
        }
        return view('admin.pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateProductRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateProductRequest $request, $id)
    {
        if(!$product = $this->repository->find($id)){
            return redirect()->back();
        }
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = $this->repository->where('id', $id)->first();
        if(!$product){
            return redirect()->back();
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}
