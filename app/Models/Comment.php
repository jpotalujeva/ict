<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'comment'
    ];


    public function user_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    public function post_id(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'foreign_key');
    }
}
 