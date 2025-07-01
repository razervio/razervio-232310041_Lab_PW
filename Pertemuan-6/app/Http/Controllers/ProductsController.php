<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(5);
        return view('module.master-data.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Bisa arahkan ke form create jika ada
        return view('module.master-data.products.create');
    }

    /**
     * Store or Update the resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'required|boolean'
        ]);

        $products = new Products();

        if (!empty($request->id)) {
            $results = $products->updateData($request->all());

            return redirect()->route('products.index')
                ->with('success', ($results) ? 'Product updated successfully.' : 'Product not found or update failed.');
        } else {
            $results = $products->storeData($request->all());

            return redirect()->route('products.index')
                ->with('success', ($results) ? 'Product created successfully.' : 'Product creation failed.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $products = Products::findOrFail($id);
            return view('module.master-data.products.show', compact('products'));
        } catch (\Exception $e) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found or error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Products::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource (if needed separately from store).
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'required|boolean'
        ]);

        $product = Products::find($id);
        if ($product) {
            $product->update($request->all());
            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully.');
        }

        return redirect()->route('products.index')
            ->with('error', 'Product not found.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = new Products();
        $deleted = $product->removeByCondition(['id' => $id]);

        return response()->json([
            'success' => $deleted,
            'message' => $deleted ? 'Product deleted successfully.' : 'Product deletion failed.'
        ]);
    }
}
