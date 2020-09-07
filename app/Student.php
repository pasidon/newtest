<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected  $fillable=[
        'Sname', 'Major', 'Phone','Address'
    ];
    public $primaryKey='id';
}
