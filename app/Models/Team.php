<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Team extends Model
{

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
