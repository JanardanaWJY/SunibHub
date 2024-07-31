<h1>Register</h1>
<form method="POST" action="{{ route('registerAccount') }}">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <button type="submit">Register</button>
</form>

