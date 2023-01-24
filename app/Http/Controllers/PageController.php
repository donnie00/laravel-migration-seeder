<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $today_trains = Train::whereDate('departure_hour', now())->get();

        return view('home', [
            'trains' => $trains,
            'today_trains' => $today_trains
        ]);
    }
}
