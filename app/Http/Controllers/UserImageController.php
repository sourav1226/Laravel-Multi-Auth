<?php

namespace App\Http\Controllers;

use App\Models\user_image;
use Illuminate\Http\Request;

class UserImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_img()
    {
        return view('change');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_image  $user_image
     * @return \Illuminate\Http\Response
     */
    public function show(user_image $user_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_image  $user_image
     * @return \Illuminate\Http\Response
     */
    public function edit(user_image $user_image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_image  $user_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_image $user_image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_image  $user_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_image $user_image)
    {
        //
    }
}
