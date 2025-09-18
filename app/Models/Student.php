<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    
    /**
     * Get the hobbies for the blog post.
     */
    public function hobbiesRelation(): HasMany
    {
        return $this->hasMany(Hobby::class);
    }
}
