<?php

namespace App;

use App\Traits\Orderable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use Orderable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(OperationType::class, 'operation_type_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getDateAttribute($value)
    {
        return new Carbon($value);
    }
}
