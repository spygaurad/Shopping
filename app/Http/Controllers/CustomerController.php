<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        return view('customer.show',['customer'=> Customer::findOrFail($id)]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return redirect('customer/show/' . $customer->customer_id);
    }
    public function index()
    {
        $customers = Customer::all();
        Log::debug("customer retrieved", ['size' => count($customers)]);
        Log::info('Successfully received customers');
        return view('customer.index', compact('customers'));    # customer.index is blade file
    }
}
