@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Cashier</h1>
    <form action="{{ route('cashier.checkout') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <thead class="table-primary text-center">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="text-end">{{ $product->price }}</td>
                    <td class="text-end">{{ $product->stock }}</td>
                    <td>
                        <input type="number" class="form-control text-end" name="products[{{ $product->id }}][quantity]" min="1" max="{{ $product->stock }}">
                        <input type="hidden" name="products[{{ $product->id }}][id]" value="{{ $product->id }}">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</div>
@endsection
