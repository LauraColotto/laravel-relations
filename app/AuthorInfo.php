<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorsInfo extends Model
{
    public function author()
    {
        return $this->belongsTo("App\Author");
    }
}
