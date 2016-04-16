@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">                    
                        <div class="dropdown">
                            <a href="#"data-toggle="dropdown" class="panel-heading">
                                Select Relationship<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu btn btn-default" role="menu" >
                                <li><a href="{{ url('/customers') }}"><i class="glyphicon glyphicon-user"></i> Customers</a></li>
                                <li><a href="{{ url('/products') }}"><i class="glyphicon glyphicon-gift"></i> Products</a></li>
                            </ul>                            
                        </div>
                </div>   
                
                <div class="panel-body">
                    @yield('content11')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection