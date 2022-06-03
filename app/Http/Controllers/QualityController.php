<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQualityRequest;
use App\Http\Requests\UpdateQualityRequest;
use App\Models\Quality;

class QualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Quality::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQualityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQualityRequest $request, Quality $quality)
    {
        $quality = Quality::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function show(Quality $quality)
    {
        return $quality->load('users');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQualityRequest  $request
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQualityRequest $request, Quality $quality)
    {
        $response = $quality->update($request->validated());

        return $quality;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quality $quality)
    {
        $quality->delete();
    }
}
