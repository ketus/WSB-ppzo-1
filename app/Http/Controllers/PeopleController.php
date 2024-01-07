<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people, 200); // 200 OK
    }

    public function create(Request $request)
    {
        $request->validate([
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required',
            'street'      => 'required',
            'phone'       => 'required',
            'country'     => 'required',
            'city'        => 'required',
        ]);

        $person = People::create($request->all());
        return response()->json($person, 201); // 201 Created
    }

    public function getPerson(People $person)
    {
        return response()->json($person, 200); // 200 OK
    }

    public function updatePerson(Request $request, People $person)
    {
        $request->validate([
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required',
            'street'      => 'required',
            'phone'       => 'required',
            'country'     => 'required',
            'city'        => 'required',
        ]);

        $person->update($request->all());
        return response()->json($person, 200); // 200 OK
    }

    public function destroyPerson(People $person)
    {
        $person->delete();
        return response()->json(null, 204); // 204 No Content
    }

    public function fallback() {
      return response()->json("No route found", 404);
    }
}
