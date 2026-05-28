<h2>Alamat Saya</h2>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('addresses.store') }}">
    @csrf
    <input type="text" name="recipient_name" placeholder="Nama"><br><br>
    <input type="text" name="phone" placeholder="No HP"><br><br>
    <textarea name="full_address" placeholder="Alamat"></textarea><br><br>
    <input type="text" name="city" placeholder="Kota"><br><br>
    <input type="text" name="postal_code" placeholder="Kode Pos"><br><br>
    <button type="submit">Simpan</button>
</form>

<hr>

@foreach($addresses as $a)
<p>{{ $a->recipient_name }} - {{ $a->city }}</p>

<form method="POST" action="{{ route('addresses.destroy', $a->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endforeach
