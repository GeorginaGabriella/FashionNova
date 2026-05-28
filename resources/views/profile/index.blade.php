<h2>Profil Saya</h2>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}"><br><br>
    <input type="text" name="phone" value="{{ $user->phone }}"><br><br>

    <button type="submit">Update</button>
</form>
