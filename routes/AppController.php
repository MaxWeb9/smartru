<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AppController
{
    public function index(Request $request,$id)
    {
        $json = array (

            "id" => $id,
            "title" => $request->input('title'),
            "body" => $request->input('body'),
        );

        return $json;
    }

    public function edit(Request $request, $id)
    {
        $json = array (

            "id" => $id,
            "title" => $request->input('title'),
            "body" => $request->input('body'),
        );

        return $json;
    }

    public function item(Request $request, $id)
    {
        $json = array (

            "id" => rand(1,100),
            "title" => $request->input('title'),
            "body" => $request->input('body'),
        );

        return $json;
    }
}