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

    public function formsView(){
        $forms = Form::latest()->get();
        return view('form.forms', ['forms' => $forms]);
    }

    public function formEdit($id){
        $form = Form::find($id);
        return view('form.form-edit', ['form'=>$form]);
    }

    public function formRemove($id){
        $form = Form::find($id);
        $form->delete();
        return redirect('/form/forms');
    }

    public function update(Request $request){
        $form = Form::find($request->id);

        $form->name = $request->input('name');
        $form->slug = $request->input('slug');
        $form->formData = $request->input('formData');

        $form->save();

        return response('success', 200);
    }
}
