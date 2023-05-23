<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playerModel extends Model
{
    use HasFactory;
    
    protected $table = "player";

    protected $fillables = ["fullname","ign","username","password"];
}
