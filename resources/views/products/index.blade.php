<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add Product</a>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th style="width: 100px">Name</th>
                <th style="width: 350px">Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Type</th>
                <th style="width: 200px">Image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="text-start">{{ $product->name }}</td>
                <td class="text-start">{{ $product->description }}</td>
                <td class="text-end">{{ $product->price }}</td>
                <td class="text-end">{{ $product->stock }}</td>
                <td class="text-start">{{ $product->jenis }}</td>
                <td class="text-center">
                    @if($product->image)
                        @if(Str::startsWith($product->image, 'http'))
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 200px;">
                        @else
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 200px;">
                        @endif
                    @else
                    No image
                    @endif
                </td>
                <td class="text-center">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td class="text-center">
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Semua Transaksi {{ $product->name }} akan Terhapus, Lanjutkan Penghapusan?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
