<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'waldo',
        'grault',
        'user_id',
    ];


    public function getOrdanAttribute()
    {
        if (is_null($this->waldo)) {
            return 'empty';
        }

        return $this->grault < 3.1415927 ? 'low' : 'normal';
    }

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
