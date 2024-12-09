<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profileview(){
        $user=User::where(['id'=>Auth::id()])->get();
        $employer=Employer::where(['user_id'=>$user[0]->id ])->get();
        return view("employer.pages.profile",compact('user','employer'));
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Get the authenticated user
        $userid = Auth::id();

        // Update user details
        $user = [
            'name' => request('name'),
            'email' => request('email'),
        ];

        // Update employer details
        $employer = [
            'address' => request('address'),
            'company_name' => request('company_name'),
            'phone' => request('phone'),
        ];

        User::where('id', $userid)->limit(1)->update($user);
        Employer::where('user_id', $userid)->limit(1)->update($employer);
        

        return redirect()->route('profileview')->with('success', 'Details updated successfully.');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'newpassword' => 'required|min:8',
            'confirmnewpassword' => 'required|same:newpassword',
        ]);

        

        // Check if the current password matches
        if (!Hash::check(request('password'), Auth::user()->password)) {
            return back()->withErrors(['password' => 'Current password is incorrect']);
        }

        // Update the user's password
        $password = Hash::make(request('newpassword'));
        User::where('id', Auth::id())->limit(1)->update(['password'=>$password]);

        return redirect()->route('profileview')->with('success', 'Password changed successfully');
    }
}
