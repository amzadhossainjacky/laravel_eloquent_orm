<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function addCustomer(){
        
        $mobile = new Mobile;
        $mobile->model = 'Lava10';

        $customer = new Customer;
        $customer->name = 'Shakib';
        $customer->email = 'shakib@gmail.com';
        $customer->save();

        $customer->mobile()->Save($mobile);

    }

    //show mobile through indivisual customer id
    public function showMobile($id){
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }
}
