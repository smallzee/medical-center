<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $guarded = [];

    function department(){
        return $this->hasOne(Departments::class,'id','department_id');
    }
}
