<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopupType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function popups()
    {
        return $this->hasMany(Popup::class);
    }
}
