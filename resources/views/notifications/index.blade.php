@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
<div class="container" style="padding:40px">

    <h1>Notifikasi</h1>

    <hr>

    @forelse($notifications as $notification)

        <div style="margin-bottom:15px; padding:10px; border:1px solid #ccc;">
            <strong>{{ $notification->title }}</strong>
            <br>
            {{ $notification->message }}
        </div>

    @empty

        <p>Tidak ada notifikasi.</p>

    @endforelse

</div>
@endsection