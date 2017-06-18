<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerCreateRequest;
use Auth;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {

        //$customers = Customer::get();
        $customers = Customer::orderBy('name', 'ASC')->paginate(2);

        return view('customers.index')->with(compact('customers'));
    }
    public function create() {
        return view('customers.create');
    }
    public function store(CustomerCreateRequest $request) {

            $customer =Customer::create(['user_id' => Auth::id()] + $request->all());
            return back()->withSuccess('Müşteri bilgisi başarıyla eklendi');

    }
    public function destroy($id) {

        $delete = Customer::where('id', $id)->delete();

        return back()->withSuccess('Müşteri kaydı başarıyla silindi');
    }
    public function edit($id) {

        $customer = Customer::findorfail($id);

        return view('customers.edit')->with(compact('customer'));
    }
    public function update(CustomerCreateRequest $request, $id) {
        $customer = Customer::findorfail($id);

        $customer->name = $request->input('name');
        $customer->company = $request->input('company');
        $customer->save();
        return back()->withSuccess('Müşteri bilgisi başarıyla güncellendi');

    }
}
