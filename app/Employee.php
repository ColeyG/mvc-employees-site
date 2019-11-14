<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
      'name',
      'role',
      'code',
      'imageNumber',
      'gender'
    ];
}
