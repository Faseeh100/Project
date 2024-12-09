<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','first_name','last_name','phone','address', 'resume','cover_letter'];
    public function users()
    {
        return $this->hasMany(Users::class);
    }

}
