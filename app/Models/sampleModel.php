<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sampleModel extends Model
{
    use HasFactory;

    protected $table = "sample";

    protected $fillables = ["First_name","Middle_name","Last_name","date_of_birth","age","address"];
}
