@extends('master')

@section('content')

<h1>Order details</h1>
  <div class="d-flex justify-content-center align-items-center vh-70">
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>product name</th>
          <th>product price</th>
    <th>quantity</th>

        </tr>
      </thead>
      <tbody>
@foreach ($order->details as $item)
<tr>
    <td>{{$item->product_name}}</td>
    <td>{{$item->product_price}}</td>
    <td>{{$item->quantity}}</td>

  </tr>

@endforeach

      </tbody>
    </table>

  </div>
  <br>
<h1>Order history</h1>
  <div class="d-flex justify-content-center align-items-center vh-60">
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>

            <th>Order number</th>
          <th>status</th>


        </tr>
      </thead>
      <tbody>

        <tr>
          <td>{{$history->order->order_number}}</td>
          <td>{{$history->status->name}}</td>

        </tr>

      </tbody>
    </table>

  </div>

  <br>
<h1>Customer</h1>
  <div class="d-flex justify-content-center align-items-center vh-60">
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>email</th>
          <th>name</th>
    <th>address</th>

        </tr>
      </thead>
      <tbody>

        <tr>
          <td>{{$order->user->email}}</td>
          <td>{{$order->user->name}}</td>
          <td>{{$order->user->address}}</td>

        </tr>

      </tbody>
    </table>

  </div>



  @endsection
