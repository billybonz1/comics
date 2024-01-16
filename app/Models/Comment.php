<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Title;

class Comment extends Model {
    protected $fillable = ['title_id', 'user_id', 'content'];

    public function title() {
        return $this->belongsTo(Title::class);
    }

   
}