<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLoginHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $dateFormat = ['login_at'];
    protected $fillable = ['user_id', 'login_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
