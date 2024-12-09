<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContinentRequest;
use App\Http\Requests\UpdateContinentRequest;
use App\Http\Resources\ContinentResource;
use App\Models\Continent;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Continent::orderBy('id', 'desc')->get();
        return ContinentResource::collection($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContinentRequest $request)
    {
        $data = Continent::create([
            'continent_name' => $request->continent_name,
            'description' => $request->description,
        ]);
        return new ContinentResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Continent $continent)
    {
        return ContinentResource::make($continent);
    }


    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContinentRequest $request, Continent $continent)
    {
        $data = $continent->update([
            'continent_name' => $request->continent_name,
            'description' => $request->description,
        ]);
        return new ContinentResource($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Continent $continent)
    {
        $continent->delete();
        return response()->json(['message' => 'Continent deleted!']);
    }
}
