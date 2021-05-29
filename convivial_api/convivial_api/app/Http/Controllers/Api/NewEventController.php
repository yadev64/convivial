<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Event;
use App\Models\Sale;

class NewEventController extends Controller
{
    public function createNewEvent(Request $request){
        $event = new Event();
        $cost = new Cost();
        $sale = new Sale();

        $event->name = $request->e_name;
        $event->catagory = $request->e_catagory;
        $event->organizer = $request->e_organizer;
        $event->location = $request->e_location;
        $event->date = $request->e_date;
        $event->description = $request->e_desc;
        $event->duration = $request->e_duration;
        $event->image_title = $request->e_image_url;
        $event->save();

        $sale->event_id = $event->id;
        $sale->n_sold = 0;
        $sale->s_sold = 0;
        $sale->g_sold = 0;
        $sale->p_sold = 0;
        $sale->total_sold = 0;
        $sale->total_revenue = 0;
        $sale->save();

        $cost->event_id = $event->id;
        $cost->t_type = $request->t_type;
        $cost->normal = $request->t_normal;
        $cost->silver = $request->t_silver;
        $cost->gold = $request->t_gold;
        $cost->platinum = $request->t_platinum;
        $cost->save();

        return response()->json([
            "message" => "Event created"
          ], 201);
    }
}
