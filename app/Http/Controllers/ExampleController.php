<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test(){
        clock()->startEvent('event_name', 'Event description.'); // event called 'Event description.' appears in Clockwork timeline tab

        clock('Message text.'); // 'Message text.' appears in Clockwork log tab
        
        clock(['hello' => 'world']); // logs json representation of the array

        clock()->endEvent('event_name');
    }
}
