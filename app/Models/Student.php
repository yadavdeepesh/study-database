<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // if we use same name of table and datebase then same.
//    protected $table = 'college_students';

function test()
    {
        return "called test function in model";
    }
}
