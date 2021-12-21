<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protege extends Model
{
    protected $table = "proteges";

    public function setPhotoAttribute($value)
    {
        if(!str_contains($value, "storage"))
            $value = '/storage/'. $value;
        $this->attributes['photo'] = $value;
    }
}
