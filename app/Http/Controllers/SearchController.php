<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Search database
     */
    public function search (Request $request) {
        //dd($request->query('q'));
        return view('resourcepage');
    }
}
