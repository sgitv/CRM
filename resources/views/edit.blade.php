@extends('crm')

@section('content11')

<form action = "/update/{{ $editCustomer->id }}" method="post">
<table>
<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Address</th>
	<th>Phone</th>
</tr>
<tr>
	<td><input type="text" name = "name" value="{{ $editCustomer->name }}"></input></td>
	<td><input type="text" name = "email" value="{{ $editCustomer->email }}"></input></td>
	<td><input type="text" name = "address" value="{{ $editCustomer->address }}"></input></td>
	<td><input type="text" name = "phone" value="{{ $editCustomer->phone }}"></input><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
</tr>
<tr>
	<td colspan="4" style="text-align:center"><input type="submit" class="btn btn-primary" value="Done"></input></td>
</tr>
</table>
</form>

@endsection