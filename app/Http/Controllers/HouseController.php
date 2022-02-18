<?php

namespace App\Http\Controllers;

use App\House;
use App\Agent;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {

        $houses = House::all();
        $agents = Agent::first();
        dd($houses, $agents);
    }

    public function createHouse()
    {
        $house = new House();
        $house->fill([
            'name' => 'Villa Mare',
            'title' => 'Villa vista mare',
            'price' => 575000,
            'city' => 'Napoli',
            'address' => 'via Roma',
            'number' => '23ab',
            'description' => 'Lorem Ipsum',
            'owner' => 'Mario Rossi',
            'start_date' => '2022/01/12',
        ]);
        $result = $house->save();
        dd($result, $house);
    }
}
