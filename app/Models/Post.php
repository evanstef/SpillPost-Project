<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'body',
        'image',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // relasi untuk likePost
    public function likedByUsers():BelongsToMany {
        return $this->belongsToMany(User::class, 'post_like_user')->withTimestamps();
    }

    // relasi komenan orang pada postingan
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
