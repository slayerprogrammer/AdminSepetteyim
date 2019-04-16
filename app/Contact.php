<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function findOrCreate($id)
    {
        $obj = static::find($id);
        return $obj ?: new static;
    }
}
