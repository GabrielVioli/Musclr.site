<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('products.adicionar');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'category' => 'required|string',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('images', 'public');
            $data['urlImage'] = $path;
        } else {
            return back()->withErrors(['image' => 'Erro na imagem.']);
        }

        unset($data['image']);

        Product::create($data);

        return redirect()->route('home')->with('success', 'Produto criado!');
    }

public function show($id)
{
    $product = Product::findOrFail($id);
    
    return view('produto', compact('product'));
}

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
    public function suplementos()
{
    $products = Product::where('category', 'suplementos')->get();
    return view('suple', compact('products'));
}

public function equipamentos()
{
    $products = Product::where('category', 'equipamentos')->get();
    return view('equipamentos', compact('products'));
}
}