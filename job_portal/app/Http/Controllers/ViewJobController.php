<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ViewJobController extends Controller
{
    public function viewjob(Request $request ,$id){
    
        $jobs = DB::table('job_listings')
        ->join('employers', 'job_listings.employer_id', '=', 'employers.id')
        ->select('job_listings.*', 'employers.company_name as employer_name')
        ->where('job_listings.id',$id)
        ->first();
        
        return view("pages.viewjob",compact('jobs'));
    }
}
