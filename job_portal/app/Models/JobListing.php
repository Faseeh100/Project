<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;
    protected $fillable = ['employer_id','title','description','requirements','location','job_type','salary','created_at','updated_at','status', 'expierence', 'qualification' ];
}
