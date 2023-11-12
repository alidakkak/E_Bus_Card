<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function socialMedia() {
        return $this->belongsTo(SocialMedia::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
