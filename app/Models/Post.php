<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public $fillable = [
        'user_id',
        'title',
        'description',
        'post_image',
        'roles',
        'job_type',
        'address',
        'salary',
        'close_date',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function applicants(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'user_post','post_id','user_id')
            ->withPivot('shortlisted')
            ->withTimestamps();
    }
}
