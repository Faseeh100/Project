<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    public function searchjob(){
    
        return view("pages.searchjob");
    }
}
