<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use App\Models\users;

class ControllerA extends Controller
{
    public function employees(){

        return employees::all();


    }

    public function users(){

        return users::all();

    }
}
