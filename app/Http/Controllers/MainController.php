<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $trainsFromToday = Train::whereNowOrFuture("oraPartenza")
        ->orderBy("oraPartenza","asc")
        ->paginate(10);
        return view("home",compact("trainsFromToday"));
    }

    public function get($id){
        $train = Train::findOrFail( $id );  
        return view("details",compact("train"));
    }
}
