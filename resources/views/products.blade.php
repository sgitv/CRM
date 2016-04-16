@extends('crm')

@section('content11')

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Categorys</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">search by category's <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/products1/electronics">Electronics</a></li>
                <li><a href="/products1/toys">Toys</a></li>
                <li><a href="/products1/glasses">Glasses</a></li>
                <li><a href="/products1/pants">Pants</a></li>
                <li><a href="/products1/bags">Bags</a></li>
                <li role="separator" class="divider"></li>              
                <li><a href="/products">display All</a></li>
              </ul>
            </li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

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
