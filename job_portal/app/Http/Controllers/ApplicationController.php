<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Application;

use App\Models\JobListing;

class ApplicationController extends Controller
{
    
    public function applicationview(Request $request){
        // $applications = DB::table('applications')
        // ->join('job_seekers', 'applications.job_seeker_id', '=', 'job_seekers.id')
        // ->join('job_listings', 'applications.job_listing_id', '=', 'job_listings.id')
        // ->select('applications.*', 'job_seekers.first_name','job_seekers.last_name','job_listings.title')
        // ->get();
        $applications = DB::table('applications')
        ->join('job_seekers', 'applications.job_seeker_id', '=', 'job_seekers.id')
        ->join('job_listings', 'applications.job_listing_id', '=', 'job_listings.id')
        ->join('employers', 'job_listings.employer_id', '=', 'employers.id')
        ->select(
        'applications.*',
        'job_seekers.first_name',
        'job_seekers.last_name',
        'job_listings.title'
    )
        ->where('employers.user_id', '=', Auth::id())
        ->get();


        return view("employer.pages.application", compact("applications"));
    }
    
}
