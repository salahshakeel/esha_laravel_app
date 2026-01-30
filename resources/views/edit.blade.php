Edit form for {{ $employee->name }}
<form method="POST" action="{{ route('test.update',$employee) }}">
    @csrf 
    <label for="">Name</label>
    <input type="text" name="name" value="{{ $employee->name }}">
    <label for="">Email</label>
    <input type="email" name="email" value="{{ $employee->email }}">
    <button type="submit">Update</button>
</form>