<h1>Login</h1>
@if(session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif
<form action="{{ route('auth.store') }}" method="post">
    @csrf
   
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Email">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Password">
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Login</button>
</form>