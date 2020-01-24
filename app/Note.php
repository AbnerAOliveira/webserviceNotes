<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title', 'note', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App/Category');
    }
}
