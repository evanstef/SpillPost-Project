<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    // relasi untuk like comment
    public function likedByUsers():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'comment_like_users', 'comment_id', 'user_id')->withTimestamps();
    }

    // relasi ke table reply comment
    public function replyComments():HasMany
    {
        return $this->hasMany(ReplyComment::class);
    }
}
