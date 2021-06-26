<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');

    public function getData()
    {
        return $this->id . ':' . $this->content;
    }
const STATUS = [
  0 => ['button' => '作業中'],
  1 => ['button' => '完了'],
];
}
