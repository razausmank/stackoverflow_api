<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [] ;
    protected $with = ['tags'];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
