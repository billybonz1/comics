<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Title;
use App\Models\User;

class View extends Model {
    protected $fillable = ['title_id', 'user_id'];

    public function title() {
        return $this->belongsTo(Title::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
