<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
    // Methods for CRUD operations
    public function index() {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create() {
        return view('orders.create');
    }

    public function store(Request $request) {
        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function show(Order $order) {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order) {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order) {
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order) {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
