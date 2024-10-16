<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'code'];

    /**
     * A language can be associated with many users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
