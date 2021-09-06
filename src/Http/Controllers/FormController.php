<?php

namespace RaisulHridoy\FormHandler\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RaisulHridoy\FormHandler\Models\FormData;

class FormController extends Controller
{
    public function create()
    {
        $data = FormData::all();
        return view('FormHandler::form',compact('data'));
    }
    public function store(Request $request)
    {
        $validate = validateName($request->name);
        if ($validate == true)
        {
            FormData::create($request->all());
            return redirect('/form');
        } else
        {
            return response('Name field contains invalid characters.');
        }
    }
}
