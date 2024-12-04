@extends('master')

@section('content')


  <div class="d-flex justify-content-center align-items-center vh-100">
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Order number</th>
          <th>Total price</th>
    <th>shipping price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    @foreach($orders as $order)
        <tr>
          <td>{{$order->order_number}}</td>
          <td>{{$order->total_price}}</td>
          <td>{{$order->shipping_price}}</td>
    <td> <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">
        Show
    </a></td>
        </tr>
@endforeach
      </tbody>
    </table>
  </div>

  @endsection
