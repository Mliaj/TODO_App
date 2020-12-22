<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $fillable = [
        'title',
        'content',
        'due',
        'completion'
    ];

    //Accessors
    public function getDueAttribute($value) {
        return Carbon::parse($value)->format('M d, y h:i a');
    }
}
