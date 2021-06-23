<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editbobot(Request $request, $id)
    {
        // return $request->all();
        $bobot = \App\Bobot::find($id);
        $bobot->update([$request->name => $request->value]);
    }
}
