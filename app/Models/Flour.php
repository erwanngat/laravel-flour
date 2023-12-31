<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flour extends Model
{
    use HasFactory;

    protected $table = 'flours';

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
