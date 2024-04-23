<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    public function getCompany(){
        return $this->hasOne('App\Models\Company','emp_id','id'); //'emp_id','id' is not needed if table name matches the convention
    }
}
