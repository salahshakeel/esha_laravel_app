<h1>Edit User {{ $user->name }}</h1>

<form action="{{ route('users.update', $user) }}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Update</button>
</form>