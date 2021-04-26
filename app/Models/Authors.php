<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $guarded = [];

    public function authors(){
        return $this->belongsTo('App\Models\Authors');
    }
}
