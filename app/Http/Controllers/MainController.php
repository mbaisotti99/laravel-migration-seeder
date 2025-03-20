<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $trains = Train::all();
        $trainsFromToday = Train::whereNowOrFuture("oraPartenza")->get();
        return view("home",compact("trainsFromToday"));
    }
}
