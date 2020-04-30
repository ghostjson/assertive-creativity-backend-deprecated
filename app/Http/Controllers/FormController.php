<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function save(Request $request){

        $form = new Form;

        $form->name = $request->input('name');
        $form->slug = $request->input('slug');
        $form->formData = $request->input('formData');

        $form->save();

        return response('success', 200);

    }
}
