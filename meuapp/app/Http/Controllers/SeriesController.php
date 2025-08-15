<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        
        $series = [
            (object) ['titulo' => 'Punisher'],
            (object) ['titulo' => 'Daredevil'],
            (object) ['titulo' => 'CountDown'],
            (object) ['titulo' => 'Mobland']
        ];

        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

}
