<?php
namespace App\Repositories;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\OrderHistory;
use App\Models\Status;
use App\Models\User;

class OrderRepository implements OrderRepositoryInterface{

    public function index(){


    return view('order');


}
public function show($id){


}


}
