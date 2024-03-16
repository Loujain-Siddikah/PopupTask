<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'title',
        'color',
        'content',
        'popup_type_id'
    ];


    public function type()
    {
        return $this->belongsTo(PopupType::class, 'popup_type_id');
    } 

}
