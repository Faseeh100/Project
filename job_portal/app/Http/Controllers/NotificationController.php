<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notificationview(){
        return view("employer.pages.notification");
    }
}
