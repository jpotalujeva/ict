<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'created_at'
    ];


    public function user_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'post_categories', 'post_id', 'categories_id');
    }
}
 