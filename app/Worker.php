<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable=['Full_name','Date_of_Birth','Date_of_employment','Department'];
}
