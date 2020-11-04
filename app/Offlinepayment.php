<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offlinepayment extends Model
{
    protected $table = 'offlinepayment';

    protected $fillable = ['user_id','bank','refno','name'];
}
