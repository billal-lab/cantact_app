<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cantact;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        
        $cantacts = Cantact::all();
        // dd($cantacts[0]->created_at->diffForHumans());
        return view('Admin/index', compact('cantacts'));
    }
}
