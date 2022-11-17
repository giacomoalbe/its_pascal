<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public $guarded = [];

    public $appends = [
        "fullName",
    ];

    public function getFullNameAttribute() {
        return $this->name . " " . $this->surname;
    }

    public function articles() {
        return $this->hasMany(Article::class);
    }
}
