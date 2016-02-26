@extends('crm')

@section('content11')
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    category's
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/electronics">customers who buy Electronics</a></li>
    <li><a href="/toys">customers who buy  Toys</a></li>
    <li><a href="/glasses">customers who buy  Glasses</a></li>
    <li><a href="/pants">customers who buy  Pants</a></li>
    <li><a href="/bags">customers who buy  Bags</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="/customer">All</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Select by Company
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/sourceeaasy">Sourceeasy</a></li>
    <li><a href="/tripod">Tripod</a></li>
    <li><a href="/mickey">Mickey</a></li>
  </ul>
</div>


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