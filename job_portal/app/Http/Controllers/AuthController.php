<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\JobSeeker;
use App\Models\JobListing;


class AuthController extends Controller
{
    function index(){

        return view('pages.login');
    }

    function signup_view(){

        return view('pages.signup');
    }

    function signup(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'employer'
        ]);

        Employer::create(['user_id'=> $user->id]);
        JobSeeker::create(['user_id'=> $user->id, 'first_name'=> $user->name]);


        return redirect()->route('login_view')->with('success', 'Signup successful! Please login.');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Invalid email or password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login_view");
    }
    public function home(){
        $jobs = DB::table('job_listings')
            ->join('employers', 'job_listings.employer_id', '=', 'employers.id')
            ->select('job_listings.*', 'employers.company_name as employer_name')->limit(10)
            ->get();



        return view("welcome",compact("jobs"));
    }

}
