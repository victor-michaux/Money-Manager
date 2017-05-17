<?php

namespace App\Traits;

trait Orderable
{
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('date', 'desc');
    }

    public function scopeOldestFirst($query)
    {
        return $query->orderBy('date', 'asc');
    }
}