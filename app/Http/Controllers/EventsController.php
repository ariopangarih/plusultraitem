<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class EventsController extends Controller
{
    public function show(){
        $items = Item::where('ends',0)->get();
        return view('events',compact('items'));
    }
}