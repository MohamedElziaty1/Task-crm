<?php

namespace App\Http\Controllers;
use App\Repositories\OrderRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\OrderHistory;
use App\Models\Status;
use App\Models\User;
class OrderController extends Controller
{
// protected $Order;

// public function __construct(OrderRepositoryInterface $Order)
// {
//     $this->Order = $Order;
// }

public function index()
    {
$orders=Order::all();

        return view('order',['orders'=>$orders]);
        // $this->Order->index();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

$orders= Order::with(['details','history','user'])->findorfail($id);
$history=OrderHistory::with(['status','order'])->findorfail($id);
        return view('show',['order'=>$orders,'history'=>$history]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
