<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index()
    {
        return inertia('Home');
    }



    public function customerDashboard()
    {
        return inertia('Customer/Dashboard');
    }


    public function productsListing()
    {
        return inertia('Products');
    }
}
