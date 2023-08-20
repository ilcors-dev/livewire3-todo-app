<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'content',
        'user_id'
    ];

    public function htmlContent(): Attribute
    {
        return Attribute::make(get: fn() => e($this->content));
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
