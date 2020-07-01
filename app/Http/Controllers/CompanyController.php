<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Requests\StoreCompany;
use App\Http\Requests\UpdateCompany;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware = ['auth.admin'];
    }

    function index()
    {
        return CompanyResource::collection(Company::all());
    }

    function store(StoreCompany $request)
    {
        return Company::create($request->validated());
    }


    function update(Company $company, UpdateCompany $request)
    {
        return $company->update($request->validated());
    }

    function show(Company $company)
    {
        return new CompanyResource($company);
    }


    function destroy(Company $company){
        try{
            $company->delete();
            return response()->json(['status'=>'deleted'], 200);
        }
        catch (\Exception $e){
            return response()->json(['status'=>'could not Delete'], 400);
        }
    }
}
