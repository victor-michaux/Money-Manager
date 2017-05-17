<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOperationRequest;
use App\Operation;
use App\OperationType;
use App\Transformers\OperationTransformer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    public function index()
    {
        $operations = Operation::where('user_id', Auth::user()->id)->latestFirst()->get();

        return fractal()
            ->collection($operations)
            ->transformWith(new OperationTransformer())
            ->toArray();
    }

    public function store(StoreOperationRequest $request)
    {
        $operation = new Operation();
        $operation->title = $request->title;
        $operation->date = new Carbon($request->date);
        $operation->amount = $request->amount;
        $operation->type()->associate(OperationType::find($request->type));
        $operation->category()->associate(Category::find($request->category));
        $operation->user()->associate($request->user());

        $operation->save();

        return fractal()
            ->item($operation)
            ->parseIncludes(['user'])
            ->transformWith(new OperationTransformer())
            ->toArray();
    }
}