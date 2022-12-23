<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Newcheckout;

// use App\Models\Checkout;
use App\Models\Message;
use Illuminate\Http\Request;

// This below line used for the cart system Auth::id()
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{

    public function user_index()
    {
        $products = Product::paginate(6);
        return view('welcome', compact('products'));
    }

    public function userabout()
    {
        return view('about');
    }

    // public function userorders()
    // {
    //     // Checkout::where('id', Auth::user()->id)

    //      $checkout_data = Checkout::all();

    //     return view('order', compact('checkout_data'));
    // }


    public function userorders()
    {
        // ModelName::where('usersid', Auth::user()->id) ///////////////////////////// Sample Purpose

        $checkout_data = Newcheckout::where('uid', auth()->user()->id)->get();
        return view('order', compact('checkout_data'));
    }

    public function usershop()
    {
        $products = Product::paginate(6);
        return view('shop', compact('products'));
    }

    public function usercontact()
    {
        return view('contact');
    }

    public function portfoliosite()
    {
        return view('portfoliosite');
    }



    public function usercart()
    {

        // $products = Product::paginate(6);
        // return view('cart', compact('products'));

        $user = auth()->user();
        $carts = Cart::where('uid', auth()->user()->id)->get();
        return view('cart', compact('carts'));
    }




    // This is for the cart system

    public function addcart(Request $request, $id)
    {


        if (Auth::id()) {

            // first accessing the user details
            // We will be able to get login user data at that variable
            $user = auth()->user();
            $product = Product::find($id);
            $cart = new Cart;

            $cart->uid = $user->id;
            $cart->pid = $product->id;
            // cart vanne table kp name vanne datatable ma user vanne table ko name vanne datatable bata intel store gareko
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_name = $product->name;
            $cart->price = $product->price;
            $cart->image = $product->image;
            // For accessing the quantity of the product we need the following line of code
            $cart->qty = $request->qty;
            $cart->save();

            return redirect()->back()->with('message', 'Product Added Successfully');
        } else {
            return redirect('login');
        }
    }


    public function cartdelete($id)
    {
        $cart_details = Cart::find($id);
        $cart_details->delete();
        // $cart_details->delete($id->id);
        // return redirect(route('UserCart'));
        return redirect()->back();
    }



    public function orderproduct()
    {
        $user = auth()->user();
        $carts = Cart::all();
        return view('checkoutform', compact('carts'));
        // $user_orders_details = Cart::all();
        // return view('checkoutform', compact('user_orders_details'));
    }



    // for storing the check out  orders ||||| This is old Checkout which is missing uid and pid 
    // public function checkoutstore(Request $request)
    // {
    //     $checkoutdata = $request->validate([
    //         'checkout_productname' => 'required',
    //         'checkout_price' => 'required',
    //         'checkout_quantity' => 'required',
    //         'checkout_name' => 'required',
    //         'checkout_number' => 'required',
    //         'checkout_email' => 'required',
    //         'checkout_method' => 'required',
    //         'checkout_state' => 'required',
    //         'checkout_city' => 'required',

    //     ]);

    //     Checkout::create($checkoutdata);
    //     return redirect(route('UserOrders'));
    // }


    public function checkoutstore(Request $request)
    {

        $checkoutdata = $request->validate([
            'uid' => 'required',
            'pid' => 'required',
            'checkout_productname' => 'required',
            'checkout_price' => 'required',
            'checkout_quantity' => 'required',
            'checkout_name' => 'required',
            'checkout_number' => 'required',
            'checkout_email' => 'required',
            'checkout_method' => 'required',
            'checkout_state' => 'required',
            'checkout_city' => 'required',

        ]);
        Newcheckout::create($checkoutdata);
        Cart::where('uid', auth()->user()->id)->delete();
        return redirect(route('UserOrders'));
    }


    public function usermessage(Request $request)
    {
        $user_message = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'msg' => 'required',
        ]);

        Message::create($user_message);
        return redirect()->back()->with('message', 'Message has been sent successfully');
    }
}
