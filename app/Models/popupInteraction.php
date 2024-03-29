<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class popupInteraction extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'popup_id',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    } 

    public function popup()
    {
        return $this->belongsTo(Popup::class, 'popup_id');
    } 
}
