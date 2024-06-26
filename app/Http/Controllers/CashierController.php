<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;

class CashierController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('cashier.index', compact('products'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'nullable|integer|min:1',
        ]);

        try {
            foreach ($request->products as $productId => $productData) {
                if (isset($productData['quantity']) && $productData['quantity'] > 0) {
                    $product = Product::findOrFail($productId);

                    // Check Stock
                    if ($product->stock < $productData['quantity']) {
                        return redirect()->back();
                    }

                    // Create Report
                    Transaction::create([
                        'product_id' => $productId,
                        'quantity' => $productData['quantity'],
                    ]);

                    // Update Stock
                    $product->stock -= $productData['quantity'];
                    $product->save();
                }
            }

            // Redirect
            return redirect()->route('reports.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
