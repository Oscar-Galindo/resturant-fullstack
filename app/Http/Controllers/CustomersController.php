<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function allOffersMembers(){
        return view('admin/customers/all-offers-members'); 
    }
    public function allReservations(){
    return view('admin/customers/all-reservations');
    }
}
