<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer as Customer;
use App\Product as Product;
use Carbon\Carbon;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function customer()
    {
        $customers1 = Customer::all();
        return view('customers')->with('customers',$customers1);
    }
    public function toys()
    {
        $products = Product::where('category','=','toys')->groupBy('customer_id')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {       
            array_push($customers,$products[$i]->customer_id);
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        return view('customers')->with('customers',$customers1);
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
        'phone' => $_POST['phone'],
        'company'=> $_POST['company']
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
        'price' => $_POST['price'],        
        'category' => $_POST['category']
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
        'price' => $_POST['price'],
        'category' => $_POST['category']
        
        ];
        Product::find($id)->update($updateProduct);
        return redirect('products');
        
    }
    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect('products');
        
    }
    public function createProdctForCustomer()
    {
        $updateProduct = [
        'name' => $_POST['name'],
        'customer_id' => $_POST['customer_id'],
        'price' => $_POST['price'],
        'category' => $_POST['category']
        
        ];
        Product::create($updateProduct);
        return redirect('products');        
    }

    public function category($id)
    {
        $products = Product::where('category','=',$id)->groupBy('customer_id')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {
            array_push($customers,$products[$i]->customer_id);
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        return view('customers')->with('customers',$customers1);
    }


    public function company($id)
    {
        $customers1 = Customer::where('company','=',$id)->get();
        return view('customers')->with('customers',$customers1);
    }
 

    public function products1($id)
    {
        $products = Product::where('category','=',$id)->groupBy('name')->get();
        return view('products',compact('products'));
    }


    public function regular()
    {
        $products = Product::where('created_at','>','2016-02-24')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {
            array_push($customers,$products[$i]->customer_id);
            // echo $customers[$i];
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        // echo $customers1;
        return view('customers')->with('customers',$customers1);
    }

}