<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table='cart';
    // we have mentioned this above because name of database table and model name is same, had we named it as carts in database we would not have to mention "public $table='cart'" as in above.
    //  see in case of user & product model.
}