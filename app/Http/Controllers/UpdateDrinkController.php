<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;

class UpdateDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a=new Boisson();
        $a->code=$request->input('codeInput'); // prendre une partie ; les 3 premiers caracteres)
        $a->nom=$request->input('nameInput');
        $a->prix=$request->input('priceInput');
        $a->save();

        return redirect('recettes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Boisson::find($id);
        return redirect('update');
       
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
        $majBoisson= Boisson::find($id);
        $majBoisson->code=$request->input('codeInput'); 
        $majBoisson->nom=$request->input('nameInput');
        $majBoisson->prix=$request->input('priceInput');
        $majBoisson->save();

        return redirect('recettes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Boisson::destroy($id);
         return redirect('recettes');
    }
}
