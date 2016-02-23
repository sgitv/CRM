@extends('crm')

@section('content11')
<table class="table">
	<h1>Product's Ordered by {{ $customer->name }}</h1>
	<tr>
	<th><h3>Name</h3></th>
	<th><h3>Product Id</h3></th>
	<th><h3>Price</h3></th>
	</tr>
    @foreach($customer->sid as $customer)
    <tr>
    	<td><h4>{{ $customer->name }}</h4></td>
    	<td><h4>{{ $customer->id }}</h4></td>
    	<td><h4>Rs {{ $customer->price }} /-</h4></td>
    </tr>
	
	@endforeach
  </table>


@endsection