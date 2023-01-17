<?php

namespace App\Http\Controllers\Api\v1;

use App\Filters\v1\AusFilter;
use App\Http\Controllers\Controller;
use App\Models\Aus;
use App\Http\Requests\v1\StoreAusRequest;
use App\Http\Requests\v1\UpdateAusRequest;
use App\Http\Resources\v1\AusCollection;
use App\Http\Resources\v1\AusResource;
use Illuminate\Http\Request;

class AusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = new AusFilter();
        $filtered_items = $query->filter($request);

        $ausesCollection = Aus::where($filtered_items)->paginate()->appends($request->query());
        return new AusCollection($ausesCollection);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAusRequest $request)
    {
        return new AusResource(Aus::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aus  $aus
     * @return \Illuminate\Http\Response
     */
    public function show(Aus $ause)
    {
        return new AusResource($ause);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAusRequest  $request
     * @param  \App\Models\Aus  $aus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAusRequest $request, Aus $ause)
    {
        $ause->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aus  $aus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aus $aus)
    {
        //
    }
}
