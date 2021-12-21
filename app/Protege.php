<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protege extends Model
{
    protected $table = "proteges";

    public function getPhotoAttribute($value): string
    {
        return "/storage/" . $value;
    }
}
