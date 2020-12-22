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

    public function getDueDateValue (TodoList $id) {
        return \Carbon\Carbon::parse($id->due)->format('o-m-d');
    }

    public function getDueTimeValue (TodoList $id) {
        return \Carbon\Carbon::parse($id->due)->format('h:i');
    }

    //Accessors
    public function getDueAttribute($value) {
        return Carbon::parse($value)->format('M d, y h:i a');
    }
}
