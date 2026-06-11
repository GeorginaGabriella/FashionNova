@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container" style="padding:40px">

    <h1>Admin Dashboard</h1>

    <hr>

    <p>Pending Orders: {{ $pendingOrders }}</p>

    <p>Processing Orders: {{ $processingOrders }}</p>

    <p>Total Revenue: Rp {{ number_format($totalRevenue,0,',','.') }}</p>

    <p>Total Products: {{ $totalProducts }}</p>

</div>
@endsection