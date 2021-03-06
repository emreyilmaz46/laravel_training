<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        //$customers = Customer::get(); //SİLME.Bunu kapatarak paginate ile getiriyoruz ekrana.
        //$customers = Customer::get()->where('id','>',2);
        $customers = Customer::orderBy('id','ASC')->paginate(5);
        //dd($customers);
        return view('customers.index')->with(compact('customers'));
    }

    public function create(){

        return view ('customers.create');
    }

    public function store(CustomerCreateRequest $request){

        $customer = Customer::create(['user_id'=> Auth::id()] + $request->all());

        return back()->withSuccess('Customer saved successfully!');
    }

    public function destroy($id){

        //dd($id);
        $delete = Customer::where('id',$id)->where ('user_id', Auth::id())->delete();

        return back()->withSuccess ('Customer deleted successfully!');

    }

    public function edit($id){

        $customer = Customer::findOrFail($id);

        return view('customers.edit')->with(compact('customer'));

    }

    public function update(CustomerCreateRequest $request, $id){

        //dd($id);
        $customer = Customer::findOrFail($id);

        $customer->name = $request->input('name');
        $customer->company = $request->input('company');
        $customer->save();

        return back()->withSuccess('Customer updated successfully!');
    }
}
