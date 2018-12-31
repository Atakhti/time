<?php
Route::get('time','Alitakhti\Time\Controllers\TimeControllers\TimeController@showTime');//->middleware('checkTime');


Route::get('date','Alitakhti\Time\Controllers\TimeControllers\TimeController@showDate');
;