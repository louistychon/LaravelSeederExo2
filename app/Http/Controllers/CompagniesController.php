<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use App\Http\Requests\StoreCompagniesRequest;
use App\Http\Requests\UpdateCompagniesRequest;
use Illuminate\Http\Request;

class CompagniesController extends Controller
{
    public function index()
    {
        $compagnies = Compagnies::all();
        return view('home', compact('compagnies'));
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
     * @param  \App\Http\Requests\StorepersonnesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Compagnies();
        $store->nom_compagnie = $request->nom_compagnie;
        $store->rue = $request->rue;
        $store->code_commune = $request->code_commune;
        $store->num_porte = $request->num_porte;
        $store->num_tel = $request->num_tel;
        $store->email = $request->email;
        $store->nom_contact = $request->nom_contact;
        $store->prenom_contact = $request->prenom_contact;
        $store->image = $request->image;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personnes  $personnes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = Compagnies::find($id);
        return view('compagnies', compact('id_show'));
    }

    public function update(Request $request, $id)
    {
        $update = Compagnies::find($id);
        $update->nom_compagnie = $request->nom_compagnie;
        $update->rue = $request->rue;
        $update->code_commune = $request->code_commune;
        $update->num_porte = $request->num_porte;
        $update->num_tel = $request->num_tel;
        $update->email = $request->email;
        $update->nom_contact = $request->nom_contact;
        $update->prenom_contact = $request->prenom_contact;
        $update->image = $request->image;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personnes  $personnes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compagnies::find($id)->delete();
        return redirect()->back();
    }
    public function destroy2()
    {
        Compagnies::truncate();
        return redirect()->back();
    }
}
