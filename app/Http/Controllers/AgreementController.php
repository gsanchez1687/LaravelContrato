<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgreementRequest;
use App\Http\Requests\UpdateAgreementRequest;
use App\Models\Agreement;
use App\Models\City;
use Illuminate\Http\Request;

class AgreementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['index','create','store','show','edit','update','destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $model = Agreement::all();
       return view('agreement.index')->with([
        'model'=>$model
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modelCity = City::all();
        return view('agreement.create')->with([
            'modelCity'=>$modelCity
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $rules = [
            'name'=>'required|max:100',
            'agreement'=>'required|max:100',
            'city_id'=>'required',
            'date_agreement'=>'required',
            'valor'=>'required'
        ];
    
        $this->validate($request,$rules);
        Agreement::create($request->all());
      
        return redirect('agreement');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agreement $agreement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agreement $agreement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgreementRequest $request, Contraro $agreement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agreement $agreement)
    {
        //
    }
}
