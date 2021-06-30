<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');

    public function getData()
    {
        return $this->id . ':' . $this->content . $this->status;
    }
}
