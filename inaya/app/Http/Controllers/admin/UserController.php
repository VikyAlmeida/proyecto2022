<?php

namespace App\Http\Controllers\admin;

use App\Models\customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function customers(){
        $customers = customer::all();
        return view('admin.customers.index', compact('customers'));
    }
    public function request(){
        $customers_pending = customer::where("estado","en espera")->get();
        return view('admin.customers.request', compact('customers_pending'));
    }
    public function accept(Request $request){
        $customer_pending = customer::where("id",$request->user_id)->first();
        $customer_pending->estado = "aceptado";
        $customer_pending->save();
        return redirect('/admin/customers');
    }
    public function customers_accept(){
        $customers_accept = customer::where("estado","aceptado")->get();
        return view('admin.customers.accept', compact('customers_accept'));
    }
    public function customers_cancel(){
        $customers_cancel = customer::where("estado","cancelado")->get();
        return view('admin.customers.cancel', compact('customers_cancel'));
    }
    public function customers_ban(){
        $customers_ban = customer::where("estado","baneado")->get();
        return view('admin.customers.ban', compact('customers_ban'));
    }
}
