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

Add new employee

<form method="POST" action="{{ route('test.store') }}">
    @csrf 
    <label for="">Name</label>
    <input type="text" name="name">
    <label for="">Email</label>
    <input type="email" name="email">
    <label for="">Password</label>
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>

List of employees

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
     <th>Actions</th>
  </tr>
  @foreach($employees as $employee)
  <tr>
    <td>{{ $employee->id }}</td>
    <td>{{ $employee->name }}</td>
    <td>{{ $employee->email }}</td>
     <td>
        <a href="{{ route('test.edit', $employee) }}">Edit</a>
        <a href="{{ route('test.destroy', $employee) }}">Delete</a>
     </td>
  </tr>
  @endforeach
</table>