<!DOCTYPE html>
<html lang="en">

<head>
     @include("layouts/head")
    <title>Document</title>
</head>
 
<body>
@include("layouts/navbar")
<h1>Order List</h1>
<table class="table">
    <tr>
        <th>Order ID</th>
        <th>Time Placed</th>
        <th>Status</th>
        <th>Change Status</th>
        <th>Name</th>
        <th>Mobile Number</th>
        <th>Show Order</th>
     </tr>
    @foreach($orders as $order)
    <tr>
        <td>{{$order->order_id}}</td>
        <td>{{$order->time_placed}}</td>
        <td>{{$order->status}}</td>
        <td><a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal{{$order->order_id}}">Update</a></td>
        <td>{{$order->last_name}}, {{$order->first_name}}</td>
        <td>{{$order->mobile_number}}</td>
        <td><a class="btn btn-primary" href="/admin/orders/{{$order->order_id}}">Show Ordered Items</a></td>
    </tr>
    <div
    class="modal fade"
    id="modal{{$order->order_id}}"
    tabindex="-1"
    >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order #{{$order->order_id}}</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                ></button>
            </div>
            <div class="modal-body">
                <p>Select new status</p>
                <form action="/admin/orders/{{$order->order_id}}" method="POST">
                    @csrf
                    <select name="status">
                        <option value="waiting">Waiting</option>
                        <option value="approved">Approved</option>
                        <option value="preparing">Preparing</option>
                        <option value="delivering">Delivering</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    <input type="submit" class="btn btn-success" value="Update"></input>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </form>
            </div>
        </div>
    </div>
   @endforeach
</table>
</body>

</html>