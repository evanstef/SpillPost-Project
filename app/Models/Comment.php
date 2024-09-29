<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'post_id'
    ];

    // relasi ke user satu comment cuman dimiliki satu user
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // relasi ke user satu comment cuman dimiliki satu post
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
