<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club_members extends Model
{
    use HasFactory;
    
    protected $fillable = [

        'fname', 'lname', 'departement', 'level', 'gender', 'email', 'telephone', 'address', 'club_name' 


    ];

}
