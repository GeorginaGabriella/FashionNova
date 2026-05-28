<h2>Register</h2>

<form method="POST" action="{{ route('register.post') }}">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama"><br><br>
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"><br><br>
    <button type="submit">Register</button>
</form>
