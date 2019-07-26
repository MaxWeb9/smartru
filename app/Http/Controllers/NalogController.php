<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class NalogController extends Controller
{
    public function index(Request $request)
   {
        $json = array (
           "id" =>rand(0,100),
           "title" =>$request->input('title'),
           "body" =>$request->input('body'),
        );

        return $json;
    }

    public function item (Request $request, $id) {
        $json = array (
            "id" =>rand(0,100),
            "title" =>$request->input('title'),
            "body" =>$request->input('body'),
        );
        return $id;
    }
}





















