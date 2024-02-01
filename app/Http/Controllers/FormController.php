<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\FormController;

class FormController extends Controller
{
    public function form(): Response
    {
        return response()->view("form");
    }

    public function submitForm(Request $request): Response
    {
        $name = $request->input("name");
        // return Response($name);
        // return Response($name)->header('Content-Type', $name);
        return response()->view("hello", [
            "name" => $name
        ]);
    }
}
