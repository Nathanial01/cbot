<?php

namespace Cyrox\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ChatHistory extends Model
{
    // Allow mass assignment for these attributes
    protected $fillable = [
        'user_id', 'message', 'sender'
    ];

    // If you're using timestamps, Eloquent does this automatically
    // protected $timestamps = true; (unnecessary as Eloquent's default is true)

    // If you're not using timestamps, disable them explicitly
    // public $timestamps = false;

    /**
     * Define a relationship to the User model (optional).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
