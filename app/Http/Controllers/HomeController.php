<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    //
    public function __invoke()
    {

        // $trains = Train::all();



        $today = Carbon::today();

        $trains = Train::whereDate('departure_date', '=', $today)->get();

        return view('home', compact('trains'));
    }
}
