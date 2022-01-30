<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepasswordRequest;
use App\Http\Requests\UpdatepasswordRequest;
use App\Models\password;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepasswordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function show(password $password)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function edit(password $password)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepasswordRequest  $request
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepasswordRequest $request, password $password)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\password  $password
     * @return \Illuminate\Http\Response
     */
    public function destroy(password $password)
    {
        //
    }
}
