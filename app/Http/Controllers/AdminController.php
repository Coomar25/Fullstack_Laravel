<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Newcheckout;
use App\Models\Product;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function admindashboard()
    {
        return view('Admin.dashboard');
    }

    public function adminaddproduct()
    {

        $products = Product::paginate(3);
        // return view('Admin.addproduct');
        return view('Admin.addproduct', compact('products'));
    }

    public function adminorder()
    {
        $order_info = Newcheckout::all();
        return view('Admin.order', compact('order_info'));
    }

    public function adminuser()
    {
        $users_info = User::all();
        return view('Admin.user', compact('users_info'));
    }

    public function message()
    {

        $User_Message = Message::all();
        return view('Admin.message', compact('User_Message'));
    }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        return view('Admin.editproduct', compact('product'));
    }




    public function storeproduct(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',

        ]);

        Product::create($data);
        return redirect(route('AddProduct'));
    }

    public function updateproduct(Request $request, $id)
    {


        $product = Product::find($id);
        $data = $request->all();
        $product->update($data);
        return redirect(route('AddProduct'));
    }

    public function deleteproduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect(route('AddProduct'));
    }


    public function updatecheckout(Request $request, $id)
    {
        $checkout = Newcheckout::find($id);
        $checkout_data = $request->all();
        $checkout->update($checkout_data);
        return redirect(route('Order'));
    }
}
