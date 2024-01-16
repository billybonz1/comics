<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\Comic;
use App\Models\View;
use App\Models\Rating;
use App\Models\Comment;

class Title extends Model {
    protected $fillable = ['ukrainian_name', 'original_name', 'release_year', 'description', 'poster', 'status', 'age_limit'];
    // Статус: Онгоінг, Завершений

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function publishers() {
        return $this->belongsToMany(Publisher::class);
    }


    public function comics() {
        return $this->hasMany(Comic::class);
    }

    public function views() {
        return $this->hasMany(View::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
