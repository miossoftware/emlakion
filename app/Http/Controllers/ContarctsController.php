<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ContarctsController extends Controller
{
    public function index()
    {
        $kira_sozlesmeleri = "test";
        return view('rent_contracts')->with('kira_sozlesmeleri', $kira_sozlesmeleri);
    }
}
