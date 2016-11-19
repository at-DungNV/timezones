<?php

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

// use Illuminate\Http\Request;

// use App\Http\Requests;

class TimezonesController extends Controller
{
    public function index($timezone = null)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('php8::time', compact('current_time'));
    }
}
