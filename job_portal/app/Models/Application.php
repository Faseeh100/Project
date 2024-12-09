<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['job_seeker_id','job_listing_id','status','created_at','updated_at','cover_latter','resume', 'expierence', 'qualification' ];

}
