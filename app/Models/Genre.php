<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Title;

class Genre extends Model {
    protected $fillable = ['name'];

    public function titles() {
        return $this->belongsToMany(Title::class);
    }
}
