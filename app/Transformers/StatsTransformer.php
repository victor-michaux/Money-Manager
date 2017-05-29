<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class StatsTransformer extends TransformerAbstract
{
    public function transform(Operation $operation)
    {
        return [
            'category'  =>  $operation->category,
            'total_amount'  =>  $operation->SUM(amount)
        ];
    }
}
