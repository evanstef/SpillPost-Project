<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'image',
        'email',
        'description',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // relasi ke tabel posts
    public function posts():HasMany {
        return $this->hasMany(Post::class);
    }

    // relasi likedPostByUser
    public function likedPost():BelongsToMany {
        return $this->belongsToMany(Post::class, 'post_like_user')->withTimestamps();
    }

    // relasi ke tabel comment
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // untuk menampilkan postingan yang telah di bookmark oleh user
    public function bookmarksByUsers():HasMany {
        return $this->hasMany(Bookmark::class);
    }

    // relasi ke tabel bookmark
    public function bookmarks():BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'bookmarks')->withTimestamps();
    }

    // relasi like komen
    public function likedComment():BelongsToMany
    {
        return $this->belongsToMany(Comment::class, 'comment_like_users')->withTimestamps();
    }

    // relasi ke tabel reply comment
    public function replyComments():HasMany
    {
        return $this->hasMany(ReplyComment::class);
    }


     // User yang mengikuti orang lain
     public function following(): BelongsToMany
     {
         return $this->belongsToMany(User::class, 'follows', 'follower_id', 'following_id');
     }

     // User yang diikuti oleh orang lain
     public function followers(): BelongsToMany
     {
         return $this->belongsToMany(User::class, 'follows', 'following_id', 'follower_id');
     }

     // Cek apakah user mengikuti user lain
     public function isFollowing($userId)
     {
         return $this->following()->where('following_id', $userId)->exists();
     }

     // Cek apakah user diikuti oleh user lain
     public function isFollowedBy($userId)
     {
         return $this->followers()->where('follower_id', $userId)->exists();
     }
}
