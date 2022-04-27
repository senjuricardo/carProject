<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Owner;

class Country extends Model
{
    public function Owners()
    {
        return $this->hasMany(Owner::class);
    }
}
