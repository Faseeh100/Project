<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListJobController extends Controller
{
    public function list_jobview(){
        $jobs = DB::table('job_listings')
        ->join('employers', 'job_listings.employer_id', '=', 'employers.id')
        ->select('job_listings.*', 'employers.company_name as employer_name')->limit(50)
        ->get();
        return view("pages.listjob" ,compact('jobs'));
    }
}
