<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PujaCovid extends Model
{
    protected $table = 'puja_covids';
    protected $fillable = ['name','area','symptoms','date'];
}
