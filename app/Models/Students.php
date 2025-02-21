<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = "students";
    protected $fillable = [
        "image","name","email","password","contact","age"
        ];
}
