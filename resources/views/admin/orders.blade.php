@extends('layouts.app')

@section('title', 'Admin Orders')

@section('content')
<div class="container" style="padding:40px">

    <h1>Admin Orders</h1>

    <hr>

    @if($orders->count())

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Status</th>
                <th>Total</th>
            </tr>

            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name ?? '-' }}</td>
                <td>{{ $order->status }}</td>
                <td>Rp {{ number_format($order->total_price,0,',','.') }}</td>
            </tr>
            @endforeach

        </table>

    @else

        <p>Belum ada pesanan.</p>

    @endif

</div>
@endsection