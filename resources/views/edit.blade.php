Edit form for {{ $employee->name }}
<form method="POST" action="{{ route('test.update',$employee) }}">
    @csrf 
    <input type="text" name="name" value="{{ $employee->name }}">
    <input type="email" name="email" value="{{ $employee->email }}">
    <button type="submit">Update</button>
</form>