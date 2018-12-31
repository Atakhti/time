<?php

namespace Alitakhti\Time\Controllers\TimeControllers;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TimeController extends Controller
{
    public function showTime(){
        $timezone = config('MyConfig.tehran');
        $time= Carbon::now()->setTimezone($timezone)->toTimeString();
        return view('MyView::time')->with('time',$time);

    }

    public function showDate()
    {
       // return Carbon::now()->toDateString();
        $date=carbon::now()->toDateString();
        return view('MyView::date')->with('date',$date);
    }
}
