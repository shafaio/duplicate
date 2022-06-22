<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use App\Http\Requests\StorePariwisataRequest;
use App\Http\Requests\UpdatePariwisataRequest;
use Illuminate\Support\Facades\Validator;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pariwisata' ,[
            "title" => "pariwisata"
        ]);
    }
    public function submit()
    {
        return view('/pariwisata/submit' ,[
            "title" => "pariwisata"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePariwisataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePariwisataRequest $request)
    {
        $ValidateData = Validator::make($request->all(),
        [
            'img' => 'image|file|max:2048'
        ]);
        if ($ValidateData->fails()) {
            return redirect('/pariwisata/submit')
            ->withErrors($ValidateData)
            ->withInput();
        }
        // $ValidateData = $validator['user_id']=1;
        if($request->file('img')){
            $ValidateData['img']=$request->file('img')->store('pariwisata-image');
        }
        Pariwisata::create($ValidateData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function show(Pariwisata $pariwisata)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Pariwisata $pariwisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePariwisataRequest  $request
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePariwisataRequest $request, Pariwisata $pariwisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pariwisata $pariwisata)
    {
        //
    }
}
