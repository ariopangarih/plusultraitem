<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function enter(){
        session()->forget(['incorrect','correct']);
        $user = Auth::user();
        $events = Event::where('user_id',Auth::id())->get();
        return view('dashboard',compact('user','events'));
    }
}
