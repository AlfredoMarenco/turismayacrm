<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory,SoftDeletes;


    const INACTIVE  = 0, ACTIVE = 1 , MANTENICE = 2;
    protected $guarded = ['id'];
}
