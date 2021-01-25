<?php

namespace Cchivhima\Sendfood\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cchivhima\Sendfood\Models\User;

class Beneficiary extends Model
{
    use HasFactory;

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
