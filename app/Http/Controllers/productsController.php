<?php

namespace App\Http\Controllers;

use App\Http\Requests\productsRequest;
use App\Models\products;

class productsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', products::class);

        return products::all();
    }

    public function store(productsRequest $request)
    {
        $this->authorize('create', products::class);

        return products::create($request->validated());
    }

    public function show(products $products)
    {
        $this->authorize('view', $products);

        return $products;
    }

    public function update(productsRequest $request, products $products)
    {
        $this->authorize('update', $products);

        $products->update($request->validated());

        return $products;
    }

    public function destroy(products $products)
    {
        $this->authorize('delete', $products);

        $products->delete();

        return response()->json();
    }
}
