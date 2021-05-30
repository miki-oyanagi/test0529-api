<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tweet extends Model
{
    protected $table = 'tweets';
    protected $guarded = array('id');
    protected $middleware =[];
}
