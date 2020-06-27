<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use App\Http\Resources\PageResource;
use App\Page;

class PageController extends Controller
{
    function index()  {
        return PageResource::collection(Page::all());
    }

    function store(StorePage $request){
        return Page::create($request->validated());
    }


    function update(Page $page, UpdatePage $request){
        return $page->update($request->validated());
    }

    function show(Page $page){
        return new PageResource($page);
    }


    function destroy(Page $page){
        try {
            $page->delete();
        }catch (\Exception $e){
            return response()->json(['status'=>'could not Delete'], 400);
        }
    }
}
