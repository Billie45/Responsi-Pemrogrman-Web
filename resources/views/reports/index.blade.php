<!-- reports/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Transaction Report</h1>
    <table class="table table-bordered">
        <thead>
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
                <td>{{ $transaction->created_at }}</td>
                <td>{{ $transaction->product->name }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->product->price }}</td>
                <td>{{ $transaction->quantity * $transaction->product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
