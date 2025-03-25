<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $trainsFromToday = Train::whereNowOrFuture("oraPartenza")
        ->orderBy("oraPartenza","asc")
        ->paginate(10);
        return view("home",compact("trainsFromToday"));
    }

    public function lost(){
        $lostTrains = Train::where("oraPartenza", "<", Carbon::now())
        ->paginate(10); 
        return view("lost", compact("lostTrains"));
    }

    public function get($id){
        $train = Train::findOrFail( $id );  
        return view("details",compact("train"));
    }
}
