<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;
use App\Vehicule;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        //return var_dump($clients);
        return view('vehicules')->with('clients', $clients);
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
        $vehicule = new Vehicule();
        $input = $request->all();
        if($request->hasFile('iPhoto'));
        {
            $file = $request->file('iPhoto');
            $filepath = "\\assets\\img\\"; 
            $filename = time() . "-" . $file->getClientOriginalName();
            $file = $file->move(public_path() . $filepath, $filename);
            $fpath = public_path() . $filepath . $filename;
            $vehicule->VHC_Photo = $fpath;
        }
        $vehicule->VHC_Registration = $input["iRegistration"];
        $vehicule->VHC_IDV = $input["iIDV"];
        $vehicule->VHMO_ID = $input["iModel"];
        //$vehicule->VHC_CirculationDate = $input["iCirculationDate"];
        $vehicule->CLI_ID = $input["iClient"];
        $vehicule->save();
        return json_encode($fpath);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function jsonVehiculeClient($filterClient)
    {
        $filteredVehicules = Vehicule::where('CLI_ID', (int)$filterClient)->get();
        return $filteredVehicules; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
