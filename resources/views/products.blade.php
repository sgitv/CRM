@extends('crm')

@section('content11')

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    category's
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/electronics1">Electronics</a></li>
    <li><a href="/toys1">Toys</a></li>
    <li><a href="/glasses1">Glasses</a></li>
    <li><a href="/pants1">Pants</a></li>
    <li><a href="/bags1">Bags</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="/products">All</a></li>
  </ul>
</div>

<table class="table">
	<tr>
	<th>Product Id</th>
	<th>Name</th>
	<th>Price /-</th>
    <th>Caregory</th>
	<th>Added On</th>
	<th>Add customer</th>
	<th>Options</th>
	</tr>
	@foreach($products as $product)
    <tr>
    	<td style = "text-align:center">{{ $product->id}}</td>
    	<td>{{ $product->name }}</td>
    	<td>{{ $product->price}}</td>
        <td>{{ $product->category}}</td>
    	<td>{{ $product->created_at}}</td>
    	<td>
            <form action="/createProdctForCustomer" method="post">
                <input type="hidden" name='name' value="{{ $product->name }}"></input>
                <input type="text" name='customer_id' value=""></input><input type="submit" class="btn btn-primary" value="add"></input>
                <input type="hidden" name='price' value="{{ $product->price}}"></input>
                <input type="hidden" name='category' value="{{ $product->category}}"></input>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </td>
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
    <th>category</th>
</tr>
<tr>
    <td><input type="text" name = "name" value=""></input></td>
    <td><input type="text" name = "customer_id" value=""></input></td>
    <td><input type="text" name = "price" value=""></input></td>
    <td><select name = "category" value=""><option>electronics</option><option>toys</option><option>glasses</option><option>pants</option><option>bags</option></select></td>
    <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
</tr>
<tr>
    <td colspan="4" style="text-align:center"><input type="submit" class="btn btn-primary" value="Done"></input></td>
</tr>
</table>
</form>

@endsection
