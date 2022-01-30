<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request as Request;
use App\Http\Requests\StorepasswordRequest;
use App\Http\Requests\UpdatepasswordRequest;
use App\Models\Password;
use stdClass;

class PasswordController extends Controller
{

    /**
     * Used to easily make the object
     * @param $validated = $request->all()
     * @return stdClass
     */
    private function request_to_data($validated)
    {
        $model = [];

        $model['url'] = $validated['url'];
        $model['email'] = $validated['email'];
        $model['username'] = $validated['username'];
        $model['password'] = $validated['password'];
        return $model;


    }


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
     * Display the specified resource.
     *
     * @param \App\Models\password $password
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $existingPassword = password::find($id);
        if ($existingPassword !== 0) {
            return $existingPassword;

        } else {
            return "NO record Found";
        };


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->request_to_data($request->all());


        $passoword = Password::create($data);
        return $passoword;

    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\password $password
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $data_instance = $this->request_to_data($request->all());
        $existingPassword = password::find($id);
        if ($existingPassword !== 0) {

            $existingPassword->update($data_instance);
            $existingPassword->fresh();
        } else {
            $existingPassword = "NO record Found";
        };


        return $existingPassword;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $existingPassword = password::destroy($id);


        return $existingPassword;
    }


}
