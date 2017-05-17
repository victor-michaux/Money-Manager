<?php

namespace App\Transformers;

use App\Operation;
use League\Fractal\TransformerAbstract;

class OperationTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['user'];

    public function transform(Operation $operation)
    {
        return [
            'title'   =>  $operation->title,
            'date'   =>  $operation->date->toDateTimeString(),
            'date_human'   =>  $operation->date->diffForHumans(),
            'amount'   =>  $operation->amount,
            'type'  =>  $operation->type->name,
            'category'  =>  $operation->category->name,
            'created_at'    =>  $operation->created_at->toDateTimeString(),
        ];
    }

    public function includeUser(Operation $operation)
    {
        return $this->item($operation->user, new UserTransformer());
    }
}