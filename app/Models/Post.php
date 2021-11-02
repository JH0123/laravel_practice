<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        "title",
        "content",
        "user_id",
        "image"
    ];

    public function writer()
    {
        // 일대다 관계(belongsTo)
        return $this->belongsTo(User::class, "user_id");
    }
    public function likes()
    {
        return $this->belongsToMany(User::class);
    }
}
