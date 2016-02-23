<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer as Customer;
use App\Product as Product;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function customers()
    {
        // where('address','=','hyderabad')->
        $customers = Customer::get();
        return view('customers',compact('customers'));
    }
     public function products()
    {
        $products = Product::all();
        return view('products',compact('products'));
    }
     public function pro($id)
    {      
        $customer = Customer::find($id);
        return view('pro', array('customer'=>$customer));
        
        // return view('pro',compact('products'));
    }
    public function back($id)
    {
        $update= [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone']
        ];
        Customer::find($id)->update($update);
        return redirect('customers');
    }
    public function edit($id)
    {
        $editCustomer = Customer::find($id);
        return view('edit',compact('editCustomer'));
    }
    public function create()
    {
        $customer= [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone']
        ];
        Customer::create($customer);
        return redirect('customers');
        
    }
    public function delete($id)
    {
        Customer::where('id','=',$id)->delete();
        return redirect('customers');
    }
    public function createProdct()
    {
        $createProdct= [
        'name' => $_POST['name'],
        'customer_id' => $_POST['customer_id'],
        'price' => $_POST['price']        
        ];
        Product::create($createProdct);
        return redirect('products');
    }
    public function editProduct($id)
    {
        $editProduct = Product::find($id);
        return view('editProduct', compact('editProduct'));
        
    }
    public function updateProduct($id)
    {
        $updateProduct = [
        'name' => $_POST['name'],
        'customer_id' => $_POST['customer_id'],
        'price' => $_POST['price']
        
        ];
        Product::find($id)->update($updateProduct);
        return redirect('products');
        
    }
    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect('products');
        
    }
    // deleteProduct
}
