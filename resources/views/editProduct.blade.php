@extends('crm')

@section('content11')

<form action = "/updateProduct/{{ $editProduct->id }}" method="post">
<table>
<tr>
	<th>Name</th>
	<th>customer_id</th>
	<th>price</th>
	
</tr>
<tr>
	<td><input type="text" name = "name" value="{{ $editProduct->name }}"></input></td>
	<td><input type="text" name = "customer_id" value="{{ $editProduct->customer_id }}"></input></td>
	<td><input type="text" name = "price" value="{{ $editProduct->price }}"></input></td>
	<td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
</tr>
<tr>
	<td colspan="4" style="text-align:center"><input type="submit" class="btn btn-primary" value="Done"></input></td>
</tr>
</table>
</form>

@endsection