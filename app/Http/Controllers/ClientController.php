<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    function ClientDashboard(){
        return view('client.client_dashboard');
    }
    function ClientLogin(){
        return view('client.client_dashboard');
    }
    function ClientRegister(){
        return view('client.client_register');
    }
}

