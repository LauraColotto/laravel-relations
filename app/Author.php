<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function authorInfo()
    {
        return $this->hasOne("App\AuthorInfo");
    }
}
