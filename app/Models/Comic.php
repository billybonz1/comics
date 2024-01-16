<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Title;
use App\Models\User;

class Comic extends Model {
    protected $fillable = ['title_id', 'issue_type', 'issue_number', 'translator', 'files', 'status'];
    // Тип: Простий Випуск, Щорічник
    // Статус: На Розгляді, Схвалено, Відхилено

    public function title() {
        return $this->belongsTo(Title::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
