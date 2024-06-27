<!-- reports/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Transaction Report</h1>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th>Time</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td class="text-start">{{ $transaction->created_at }}</td>
                <td class="text-start">{{ $transaction->product->name }}</td>
                <td class="text-end">{{ $transaction->quantity }}</td>
                <td class="text-end">{{ $transaction->product->price }}</td>
                <td class="text-end">{{ $transaction->quantity * $transaction->product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
