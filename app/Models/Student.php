<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class student extends Model
{
    //protected $table = 'students';
    
    /**
     * Get the phone associated with the user.
     */
    public function phoneRelation(): HasOne
    {
        return $this->hasOne(Phone::class);
    }
}
