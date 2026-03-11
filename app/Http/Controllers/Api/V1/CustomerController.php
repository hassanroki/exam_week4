<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::latest()->get();

        return response()->json([
            'status'=>true,
            'data'=>$customers
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'mobile'=>'required'
        ]);

        $customer = Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'description'=>$request->description
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'Customer created',
            'data'=>$customer
        ]);
    }


    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        return response()->json([
            'status'=>true,
            'data'=>$customer
        ]);
    }


    public function update(Request $request,$id)
    {
        $customer = Customer::findOrFail($id);

        $customer->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'description'=>$request->description
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'Customer updated'
        ]);
    }


    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Customer deleted'
        ]);
    }

}
