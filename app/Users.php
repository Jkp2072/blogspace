<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false; // as we don't want the stamps in our database as our model doesn't have those fields
    protected $fillable = ['username','name','email','mobile','password'];
}
