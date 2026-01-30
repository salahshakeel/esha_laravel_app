<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
     <th>Actions</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
     <td>
        <a href="{{ route('users.edit', $user) }}">Edit</a>
        <a href="{{ route('users.destroy', $user) }}">Delete</a>
     </td>
  </tr>
  @endforeach
</table>