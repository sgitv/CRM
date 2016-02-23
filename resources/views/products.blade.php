@extends('crm')

@section('content11')

<table class="table">
	<tr>
	<th>Product Id</th>
	<th>Name</th>
	<th>Price /-</th>
	<th>Added On</th>
	<th>Products</th>
	<th>Options</th>
	</tr>
	@foreach($products as $product)
    <tr>
    	<td style = "text-align:center">{{ $product->id}}</td>
    	<td>{{ $product->name }}</td>
    	<td>{{ $product->price}}</td>
    	<td>{{ $product->created_at}}</td>
    	<td><a href="/products/{{ $product->id }}">Click here</a></td>
    	<td><a href="/editProduct/{{$product->id}}" class="btn btn-primary">Edit </a> <a href="/deleteProduct/{{$product->id}}" class="btn btn-danger">X</a></td>
    </tr>
	
	@endforeach
  </table>
  <h3>add product</h3>
  <form action = "/createProdct" method="post">
<table>
<tr>
    <th>name</th>
    <th>customer_id</th>
    <th>price</th>
</tr>
<tr>
    <td><input type="text" name = "name" value=""></input></td>
    <td><input type="text" name = "customer_id" value=""></input></td>
    <td><input type="text" name = "price" value=""></input></td>
    <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
</tr>
<tr>
    <td colspan="4" style="text-align:center"><input type="submit" class="btn btn-primary" value="Done"></input></td>
</tr>
</table>
</form>

@endsection
