<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mobile;
use App\Models\Customer;

class MobileController extends Controller
{
    //fetch customer through inverse relation one to one (passing mobile id)
    public function showCustomer($id){

        $customer = Mobile::find($id)->customer;
        return $customer;
    }
}
