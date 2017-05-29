<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailConfirmationToken extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
