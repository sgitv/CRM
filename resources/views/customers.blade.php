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
            <li class="active"><a href="/regular">Regular Customers</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">search by category's <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/category/electronics">Electronics</a></li>
                <li><a href="/category/toys">Toys</a></li>
                <li><a href="/category/glasses">Glasses</a></li>
                <li><a href="/category/pants">Pants</a></li>
                <li><a href="/category/bags">Bags</a></li>
                <li role="separator" class="divider"></li>              
                <li><a href="/customer">display All</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">search by company <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/company/sourceeasy">Sourceeasy</a></li>
                <li><a href="/company/tripod">Tripod</a></li>
                <li><a href="/company/mickey">Mickey</a></li>                
                <li><a href="/customer">display All</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<br>
<table class="table">
	<tr>
	<th>Customer ID</th>
    <th>Company</th>
	<th>Name</th>
	<th>Email</th>
	<th>Address</th>
	<th>Phone</th>	
	<th>Products</th>
	<th>Options</th>
	</tr>
    @foreach($customers as $customer)
    
    <tr>
    	<td style = "text-align:center">{{ $customer['id'] }}</td>
        <td>{{ $customer['company'] }}</td>
    	<td>{{ $customer['name'] }}</td>
    	<td>{{ $customer['email'] }}</td>
    	<td>{{ $customer['address'] }}</td>
    	<td>{{ $customer['phone'] }}</td>
    	<td><a href="/pro/{{ $customer->id }}">Click here</a></td>
    	<td><a href="/edit/{{$customer->id}}" class="btn btn-primary">Edit </a> <a href="/delete/{{$customer->id}}" class="btn btn-danger">X</a></td></td>
    </tr>	
	@endforeach
  </table>
  <hr />
  <h3>add customer</h3>
  <form action = "/create" method="post">
<table>
<tr>
    <th>Company</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
</tr>
<tr>
    <td><input type="text" name = "company" value=""></input></td>
    <td><input type="text" name = "name" value=""></input></td>
    <td><input type="text" name = "email" value=""></input></td>
    <td><input type="text" name = "address" value=""></input></td>
    <td><input type="text" name = "phone" value=""></input><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
</tr>
<tr>
    <td colspan="4" style="text-align:center"><input type="submit" class="btn btn-primary" value="Done"></input></td>
</tr>
</table>
</form>



@endsection