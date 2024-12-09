<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\JobListing;
use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostJobController extends Controller
{
    public function postjob(Request $request, $id){
        return view("pages.postjob", compact('id'));
    }

    public function editjob(Request $request, $id){
        $data = JobListing::where('id', $id)->first();
        return view("employer.pages.editjob", compact('id', 'data'));
    }

    public function deletejob(Request $request, $id) {
        $data = JobListing::where('id', $id)->first();
        $data->delete();
        return redirect()->route('alljobview');
    }

    public function editjobcontroller(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'requirements' => 'required',
            'expierence' => 'required',
            'job_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'qualification' => 'required',
            'salary' => 'required|min:0',
        ]);

        JobListing::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'job_type' => $request->job_type,
            'location' => $request->location,
            'salary' => $request->salary,
            'qualification' => $request->qualification,
            'expierence' => $request->expierence,
            'status'=>'active'

        ]);

        return redirect()->route('alljobview')->with('success', 'Job published successfully');
    }

    public function submit(Request $request){
        $joblist = JobListing::where('id', $request->job_listing_id)->first();
        // Validate the form data
        $request->validate([
            'resume' => 'required',
            'cover_latter' => 'required',
            'expierence' => 'required|integer|min:'. $joblist->expierence,
            'qualification' => 'required|string|in:'. $joblist->qualification,
        ]);

        // Retrieve the validated input data

        $resumePath = $coverLetterPath = "";

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        if ($request->hasFile('cover_latter')) {
            $coverLetterPath = $request->file('cover_latter')->store('cover_latters', 'public');
        }


        $seekerID = JobSeeker::where('user_id', Auth::id())->first()->id;

        // Store the data in the database or process it as needed
        // For example:
        $application = new Application ();
        $application->resume = $resumePath;
        $application->cover_latter = $coverLetterPath;
        $application->job_listing_id = $request->job_listing_id;
        $application->expierence = $request->expierence;
        $application->job_seeker_id = $seekerID;
        $application->qualification = $request->qualification;
        $application->save();

        // Redirect to a success page or display a success message
        return redirect()->route('home')->with('success', 'Form submitted successfully!');
    }

}
