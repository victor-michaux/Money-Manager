<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrevisionOperationRequest;
use App\Operation;
use App\OperationType;
use App\PrevisionOperation;
use App\Transformers\OperationTransformer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class PrevisionOperationController extends Controller
{
    /**
     * @param StorePrevisionOperationRequest $request
     * @return array
     */
    public function store(StorePrevisionOperationRequest $request)
    {
        $previsionDate = new Carbon($request->date);
        $currentDate = Carbon::now();
        $diff = $currentDate->diffInMonths($previsionDate) + 1;
        $currentDate = $currentDate->startOfDay();
        $operationsCollection = new Collection();

        $this->savePrevisionOperation($request);

        for ($i = 0; $i < $diff; $i++)
        {
            $operation = $this->saveOperation($request, $currentDate, $diff);
            $operationsCollection->add($operation);
        }

        return fractal()
            ->collection($operationsCollection)
            ->parseIncludes(['user'])
            ->transformWith(new OperationTransformer())
            ->toArray();
    }

    private function savePrevisionOperation($request)
    {
        $previsionOperation = new PrevisionOperation();
        $previsionOperation->title = $request->title;
        $previsionOperation->date = $request->date;
        $previsionOperation->amount = $request->amount;
        $previsionOperation->category()->associate(Category::find($request->category));
        $previsionOperation->user()->associate($request->user());

        $previsionOperation->save();
    }

    private function saveOperation($request, Carbon $currentDate, int $diff)
    {
        $operation = new Operation();
        $operation->title = $request->title;
        $operation->date = new Carbon($currentDate->firstOfMonth()->addMonth()->lastOfMonth());
        $operation->amount = ($request->amount / $diff);
        $operation->type()->associate(OperationType::find(3));
        $operation->category()->associate(Category::find($request->category));
        $operation->user()->associate($request->user());

        $operation->save();
        return $operation;
    }
}
