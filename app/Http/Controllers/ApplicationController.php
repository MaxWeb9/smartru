<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;

class ApplicationController extends Controller
{
    public function index (Request $request)
    {
        $applications = App\Application::all();
        return $applications;
    }

//    public function store (Request $request)
//    {
//        $application = new App\Application;
//        $application->first_name = $request->first_name;
//        $application->last_name = $request->last_name;
//        $application->password = $request->password;
//        $application->email = $request->email;
//        $application->save();
//        return $application;
//    }

    public function store (Request $request)
    {
        $application = new App\Application;

        $application = $request->only('first_name,last_name');

      return $application;
    }


    public function edit (Request $request,$id)
        //Сделать вывод вот от сюды
    {
        $application = App\Application::find($id);
        $application->first_name = $request->first_name;
        $application->last_name = $request->last_name;
        $application->password = $request->password;
        $application->email = $request->email;
        $application->save();
        return $application;
    }

    public function delete (Request $request,$id)
    {
        $application = App\Application::find($id);
        $application->delete();
        return '';
    }

    public function approve(Request $request, $id)
     {
        $application = App\Application::findOrFail($id);
        $application->is_approved = true;
        $application->save();
        return $application;
     }
}




































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































