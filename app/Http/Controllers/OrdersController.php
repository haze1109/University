<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrdersProduct;
use DB;
use Session;

class OrdersController extends Controller
{
    public function confirmOrder(){
        $orders = DB::select("SELECT order_id FROM orders WHERE status NOT IN ('completed', 'cancelled') AND student_id = " . Session::get('student_id'));
        $order_id = $orders[0]->order_id;
        $order = Order::where("order_id", "=", $order_id)->update([
            'status' => "completed"
        ]);

        return redirect('/orders')->with('success', 'Order successfully completed! Enjoy your meal!');
    }

    public function cancelOrder(){
        $orders = DB::select("SELECT order_id FROM orders WHERE status NOT IN ('completed', 'cancelled') AND student_id = " . Session::get('student_id'));
        $order_id = $orders[0]->order_id;
        $order = Order::where("order_id", "=", $order_id)->update([
            'status' => "cancelled"
        ]);

        return redirect('/orders')->with('success', 'Order successfully cancelled!');
    }

    public function showMyOrders(){
        $orders = DB::select("SELECT o.order_id, time_placed, status, op.product_id, quantity, name, price FROM orders AS o INNER JOIN orders_products AS op ON o.order_id = op.order_id INNER JOIN products AS p ON op.product_id = p.product_id WHERE o.status NOT IN ('completed', 'cancelled') AND o.student_id = " . Session::get('student_id'));
        $total_price = DB::select("SELECT SUM(price * quantity) AS total_price FROM orders AS o INNER JOIN orders_products AS op ON o.order_id = op.order_id INNER JOIN products AS p ON op.product_id = p.product_id WHERE o.status NOT IN ('completed', 'cancelled') AND o.student_id = " . Session::get('student_id'));
        $history = DB::select("SELECT o.order_id, status, time_placed, SUM(quantity * price) AS total_price FROM orders AS o INNER JOIN orders_products AS op ON o.order_id = op.order_id INNER JOIN products AS p ON op.product_id = p.product_id WHERE status IN ('completed', 'cancelled') AND student_id = ". Session::get('student_id') ." GROUP BY o.order_id ORDER BY time_placed DESC");
        return view('my_orders', compact('orders', 'total_price', 'history'));
    }
    public function updateStatus(Request $request, $id){
        $order = Order::where("order_id", "=", $id)->update([
            'status' => $request->input("status")
        ]);

        return redirect('/admin/orders')->with('success', 'Successfully updated status!');
    }
    public function showOrderItems($id)
    {
        $order_items = DB::select("SELECT time_placed, name, quantity, price, stock FROM orders AS o INNER JOIN orders_products AS op ON o.order_id = op.order_id INNER JOIN products AS p ON op.product_id = p.product_id WHERE o.order_id = " . $id);
        return view('orders_show', compact('order_items'));
    }
    public function showOrders()
    {
        $orders = DB::select("SELECT order_id, time_placed, status, first_name, last_name, mobile_number FROM orders AS o INNER JOIN students AS s ON o.student_id = s.student_id ORDER BY time_placed DESC");
        return view('orders', compact('orders'));
    }
    public function placeOrder(Request $request)
    {
        $order = new Order;
        $order->student_id = Session::get('student_id');
        $order->save();

        $products = DB::select("SELECT * FROM products WHERE stock > 0");
        for ($i = 0; $i < count($products); $i++) {
            $ordered = $request->input('order_' . str($products[$i]->product_id));
            if ($ordered > 0) {
                $order_product = new OrdersProduct();
                $order_product->order_id = $order->order_id;
                $order_product->product_id = $products[$i]->product_id;
                $order_product->quantity = $ordered;
                $order_product->save();
            }
        }
        return redirect('/cafeteria/done');
    }
    public function takeOrder(Request $request)
    {
        if (Session::get('id')){
            $products = DB::select("SELECT * FROM products WHERE stock > 0");
            $selected_products = array();
            $total = 0;
            for ($i = 0; $i < count($products); $i++) {
                if (intval($request->input('order_' . str($products[$i]->product_id))) > 0) {
                    $total += $products[$i]->price * $request->input('order_' . str($products[$i]->product_id));
                    array_push($selected_products, $products[$i]);
                }
            }
            return view('users_cafeteria_checkout', compact('total', 'products', 'selected_products', 'request'));
        }else{
            return redirect('/login')->with('fail', 'Log in first!');
        }
       
    }
    public function showCafeteria()
    {
        $menu = DB::select("SELECT * FROM products WHERE stock > 0");
        $orders = array();
        if (Session::get('id')){
            $orders = DB::select("SELECT order_id FROM orders WHERE status NOT IN ('completed', 'cancelled') AND student_id = " . Session::get('student_id'));
        }
        return view('users_cafeteria', compact('menu', 'orders'));
    }
}