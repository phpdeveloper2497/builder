<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Status extends Model
{

    protected $fillable = ['name'];


    public function project() :HasOne
    {
        return $this->hasOne(Project::class);
    }
}
