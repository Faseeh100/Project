<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function addjobview(Request $request){
        return view("employer.pages.addjob");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'requirements' => 'required',
            'expierence' => 'required',
            'job_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|min:0',
            'qualification' => 'required'
        ]);

        $employer=Employer::where(['user_id'=>Auth::id()])->get();

        JobListing::create([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'job_type' => $request->job_type,
            'location' => $request->location,
            'salary' => $request->salary,
            'qualification' => $request->qualification,
            'expierence' => $request->expierence,
            'employer_id' => $employer[0]->id,
            'status'=>'active'

        ]);

        return redirect()->route('alljobview')->with('success', 'Job published successfully');
    }

    public function avaliblejobview(){

        $employer=Employer::where(['user_id'=>Auth::id()])->get();
        $jobs=JobListing::where(['employer_id'=>$employer[0]->id, 'status'=>'active'])->get();
        return view("employer.pages.avaliblejob", compact('jobs'));
    }

    public function alljobview(){
        $employer=Employer::where(['user_id'=>Auth::id()])->get();
        $jobs=JobListing::where(['employer_id'=>$employer[0]->id])->get();
        return view("employer.pages.alljobs", compact('jobs'));
    }

    public function listjobview(Request $request, $view){
        $employer=Employer::where(['user_id'=>Auth::id()])->get();
        $jobs=JobListing::where(['employer_id'=>$employer[0]->id ,'id'=>$view])->get();
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
        ->where('job_listings.id', '=', $view)
        ->get();
        return view("employer.pages.listjob", compact('jobs', 'applications'));
    }
}
