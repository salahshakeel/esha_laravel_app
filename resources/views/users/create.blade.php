<h1>Users Create</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Name">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
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
    <button type="submit">Create</button>
</form>