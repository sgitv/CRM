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
        
        

        // where('address','=','hyderabad')->
        // $products = Product::where('category','=','toys')->groupBy('customer_id')->get();
        // $customers = [];
        // for($i = 0 ; $i < count($products) ; $i++)
        //  {
        //     // $customers1 = Customer::where('id','=',$products[$i]->customer_id)->get();
        //     array_push($customers,$products[$i]->customer_id);
        //     // echo $products[$i]->customer_id.'<br >';

        //  }
        // $customers1 = Customer::whereIn('id', $customers)->get();

          // foreach ($customers as $key) {
          //      echo $key;
          //  } 
        // echo $length;
        // $query = (SELECT customers.id,customers.name,customers.company,customers.email,customers.address,customers.phone,products.customer_id from customers,products where customers.id = products.customer_id);
        // return view('customers',compact('customers'));
         // echo $query;
       
        // $customers = Customer::get();
         // echo $customers;
        // $customer = $customers2[0];
         // dd($customers1);
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
    public function electronics()
    {
        $products = Product::where('category','=','electronics')->groupBy('customer_id')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {
            array_push($customers,$products[$i]->customer_id);
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        return view('customers')->with('customers',$customers1);
    }
     public function glasses()
    {
        $products = Product::where('category','=','glasses')->groupBy('customer_id')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {
            array_push($customers,$products[$i]->customer_id);
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        return view('customers')->with('customers',$customers1);
    }
     public function pants()
    {
        $products = Product::where('category','=','pants')->groupBy('customer_id')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {
            array_push($customers,$products[$i]->customer_id);
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        return view('customers')->with('customers',$customers1);
    }
     public function bags()
    {
        $products = Product::where('category','=','bags')->groupBy('customer_id')->get();
        $customers = [];
        for($i = 0 ; $i < count($products) ; $i++)
         {
            array_push($customers,$products[$i]->customer_id);
         }
        $customers1 = Customer::whereIn('id', $customers)->get();
        return view('customers')->with('customers',$customers1);
    }
    public function sourceeaasy()
    {

        $customers1 = Customer::where('company','=','sourceeasy')->get();
        return view('customers')->with('customers',$customers1);
    }
    public function tripod()
    {
        $customers1 = Customer::where('company','=','tripod')->get();
        return view('customers')->with('customers',$customers1);
    }
    public function mickey()
    {
        $customers1 = Customer::where('company','=','mickey')->get();
        return view('customers')->with('customers',$customers1);
    }
     public function electronics1()
    {
        $products = Product::where('category','=','electronics')->groupBy('name')->get();
        return view('products',compact('products'));
    }
     public function toys1()
    {
        $products = Product::where('category','=','toys')->groupBy('name')->get();
        return view('products',compact('products'));
    }
     public function glasses1()
    {
        $products = Product::where('category','=','glasses')->groupBy('name')->get();
        return view('products',compact('products'));
    }
     public function pants1()
    {
        $products = Product::where('category','=','pants')->groupBy('name')->get();
        return view('products',compact('products'));
    }
     public function bags1()
    {
        $products = Product::where('category','=','bags')->groupBy('name')->get();
        return view('products',compact('products'));
    }

}
