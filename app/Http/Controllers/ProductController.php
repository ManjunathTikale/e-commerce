<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id) 
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $req->validate([
                'product_id' => 'required|integer|exists:products,id',
            ]);
    
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->input('product_id');
            $cart->save();
    
            return redirect('/')->with('success', 'Product added to cart!');
        } else {
            return redirect('/login')->with('error', 'Please login to add products to your cart.');
        }
    }

    static function  cartItem(){
        $userId=session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    
    function cartlist() {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId) // Corrected syntax
            ->select('products.*','cart.id as cart_id')
            ->get();
    
        return view('cartlist', ['products' => $products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }      

    function orderNow()
    {
        $userId = Session::get('user')['id'];

       $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId) // Corrected syntax
            ->sum('products.price');
    
        return view('ordernow', ['total' => $total]);
    }

    public function orderPlace(Request $req) 
{
    $userId = Session::get('user')['id'];
    $allCart = Cart::where('user_id', $userId)->get();

    foreach ($allCart as $cart) {
        $order = new Order();
        $order->product_id = $cart->product_id; // Correct property access
        $order->user_id = $cart->user_id;       // Correct property access
        $order->status = "pending";
        $order->payment_method = $req->payment;
        $order->payment_status = "pending";    // Fixed constant value
        $order->address = $req->address;       // Corrected property name
        $order->save();
    }

    // Clear the cart after placing the order
    Cart::where('user_id', $userId)->delete();

    return redirect('/')->with('success', 'Order placed successfully!');
}

function myOrders()
{
    $userId = Session::get('user')['id'];
    $orders =  DB::table('orders')
         ->join('products', 'orders.product_id', '=', 'products.id')
         ->where('orders.user_id', $userId) // Corrected syntax
         ->get();
 
     return view('myorders', ['orders' => $orders]);
}
    

    }

    



