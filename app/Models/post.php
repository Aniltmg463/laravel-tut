<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public $timestamps = false;

    //use this guarded method only when mass assignmen is used
    protected $guarded = [];
    //  protected $fillable = ['name','email','age','city']; //wokr opposite to guarded

}
