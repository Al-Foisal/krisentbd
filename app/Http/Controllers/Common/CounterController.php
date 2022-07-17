<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function counter()
    {
        $counter = Counter::where('id', 1)->first();

        return view('backend.counter', compact('counter'));
    }

    public function storeCounter(Request $request)
    {
        Counter::updateOrCreate(['id' => 1],
            $request->all());
        return redirect()->back()->withToastSuccess('Counter Added Successfully');
    }
}
