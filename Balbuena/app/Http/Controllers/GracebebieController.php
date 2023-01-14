<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gracebebie;

class GracebebieController extends Controller
{
    public function fetchAll()
    {
        return gracebebie::all();
    }
  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return gracebebie::create([

        //    'name' => $request->input('name'),

        'name' => $request->name,
        'guardian' => $request->name,      
        'address' => $request->address
        
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // CALL MODEL
        //find gracebebie that has id of $id
        // return gracebebie::find($id);
        return gracebebie::where('id', $id)->first();
        // return gracebebie::findOrFail($id);

        // possible daghan array ang mugawas 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //find the gracebebie youre going to update 
        gracebebie::find($id)->update([
            'name' => $request->name,
            'guardian' => $request->name,        
            'address' => $request->address
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return gracebebie::find($id)->delete();
    }
}
