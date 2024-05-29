<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller {
    // Methods for CRUD operations
    public function index() {
        $vendors = Vendor::all();
        return view('vendors.index', compact('vendors'));
    }

    public function create() {
        return view('vendors.create');
    }

    public function store(Request $request) {
        Vendor::create($request->all());
        return redirect()->route('vendors.index');
    }

    public function show(Vendor $vendor) {
        return view('vendors.show', compact('vendor'));
    }

    public function edit(Vendor $vendor) {
        return view('vendors.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor) {
        $vendor->update($request->all());
        return redirect()->route('vendors.index');
    }

    public function destroy(Vendor $vendor) {
        $vendor->delete();
        return redirect()->route('vendors.index');
    }
}
