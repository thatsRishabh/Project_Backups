<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  // this activate soft delete feature
 

class Forminfo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'forminfo';
    protected $primaryKey = 'id';
}
