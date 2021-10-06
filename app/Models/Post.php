<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "user_id"
    ];

    public function writer()
    {
        // 일대다 관계(belongsTo)
        return $this->belongsTo(User::class, "user_id");
    }
}
