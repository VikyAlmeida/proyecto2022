<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customers.index');
    }
    public function create(Request $request){
        $this->validate($request,[
        'name' => ['required','min:3'],
        'user' => ['required'],
        'password' => ['required'],
        'email' => ['required'],
        ]);
        
        $customer = new customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->user = $request['user'];
        $customer->password = bcrypt($request['password']);
        $customer->image = "user-default.png";
        $customer->save();
        $customer = new User();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->user = $request['user'];
        $customer->password = bcrypt($request['password']);
        $customer->image = "user-default.png";
        $customer->save();
        return redirect("/")->with("addcustomer","Se le ha enviado la solicitud al administrador. Le llegara un aviso con el estado de su solicitud");
    }
}
