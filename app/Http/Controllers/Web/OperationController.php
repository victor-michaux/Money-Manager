<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\OperationType;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class OperationController extends Controller
{
    public function dashboard()
    {
        return view('operations.index');
    }

    public function create(Request $request)
    {
        $type = OperationType::find($request->type);
        if($type === null) {
            $type = OperationType::find(2);
        }
        return view('operations.create')->with(['type'   => $type]);
    }
}
