<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['lastname','firstname','gender','email','postcode','address','opinion'];
    public static $rules = array(
        'lastname'=>'required',
        'firstname'=>'required',
        'gender'=>'required',
        'email'=>'required|email',
        'postcode'=>'required',
        'address'=>'required',
        'opinion'=>'required',
    );
}
