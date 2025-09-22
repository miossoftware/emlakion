<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContarctsController extends Controller
{
    public function index()
    {
        return view('rent_contracts');
    }
}
