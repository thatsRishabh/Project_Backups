<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  // this activate soft delete feature

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    // this function will convert name's 1st letter in upper case than will save in database. Make sure that field 'name' should be in camle case while setting Attribute. If field is 'user_name' than function will in camle case as 'setUserNameAttribute'
    public function setNameAttribute($value){
     
        // ucword is php function. Hover over ucword in VSCode to know how it works
        $this->attributes['name'] = ucwords($value);
    }

    // this function will pull data from database and than convert 'created_at' in d-M-Y format and than will be given as output
    public function getCreatedAtAttribute($value){
        
        // date & strtotime is php function. Hover over ucword in VSCode to know how it works
        return date("d-M-Y", strtotime($value));
    }
}
