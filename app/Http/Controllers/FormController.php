<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForm;
use App\Http\Requests\UpdateForm;
use App\Http\Resources\FormResource;
use App\Form;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('auth.admin');
    }

    public function index(){
        return FormResource::collection(Form::all());
    }

    public function store(StoreForm $request){
        return Form::create($request->validated());
    }

    public function destroy(Form $form){
        try {
            return $form->delete();
        }catch (\Exception $e){
            return response('Failed to delete', 400);
        }
    }

    public function update(Form $form, UpdateForm $request){
        return $form->update($request->validated());
    }

    public function show(Form $form){
        return new FormResource($form->all());
    }
}
