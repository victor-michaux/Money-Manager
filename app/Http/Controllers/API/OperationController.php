<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOperationRequest;
use App\Operation;
use App\OperationType;
use App\Transformers\OperationTransformer;
use App\Transformers\StatsTransformer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function amountPerCategory(){
      $operations = Operation::select('category_id', DB::raw('SUM(amount) as sumAmount'))->groupBy('category_id')->get();
      foreach ($operations as $key => $operation) {
         $operation->category;
      }
      return $operations->toJson();
    }

    public function showPerMonth(int $year, int $month)
    {
        if($month > 12 || $month < 1 ) {
            $operations = new Collection();
        } else {
            $currentMonth = Carbon::create($year, $month, 1, 0, 0, 0);
            $nextMonth = $currentMonth;

            $currentMonth = $currentMonth->toDateString();
            $nextMonth = $nextMonth->addMonth()->toDateString();
            $operations = Operation::where([
                ['user_id', '=', Auth::user()->id],
                ['date', '>=', $currentMonth],
                ['date', '<', $nextMonth],
            ])->get();
        }

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
