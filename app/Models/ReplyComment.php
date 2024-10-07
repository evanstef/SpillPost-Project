<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReplyComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'comment_id',
        'post_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comment():BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
}
