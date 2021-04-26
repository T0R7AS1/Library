<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Books extends Model
{
    protected $guarded = [];
    use Sortable;

    public $sortable = ['id','title','author_id'];

    public function books(){
        return $this->belongsTo('App\Models\Books');
    }
}
