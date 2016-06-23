<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;
use App\Vehicule;
use DB;

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
        return view('vehicules', ['clients'=>$clients, 'title'=>"Vehicules"]);
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
        if($request->file('iPhoto') != null)
        {
            $file = $request->file('iPhoto');
            $filepath = "\\assets\\img\\"; 
            $filename = time() . "-" . $file->getClientOriginalName();
            $file = $file->move(public_path() . $filepath, $filename);
            $fpath =  $filepath . $filename;
            $vehicule->VHC_Photo = $fpath;
        }
        $vehicule->VHC_Registration = $input["iRegistration"];
        $vehicule->VHC_IDV = $input["iIDV"];
        $vehicule->VHMO_ID = $input["iModel"];
        $vehicule->VHC_CirrculationDate = $input["iCirculationDate"];
        $vehicule->CLI_ID = $input["iClient"];
        $vehicule->save();
        return json_encode(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jsonShow($idVehicule)
    {
        $Vehicule = DB::table('vehicules')
                        ->join('vehicule_models', 'vehicules.VHMO_ID', "=", "vehicule_models.VHMO_ID")
                        ->join('vehicule_manufacturers', 'vehicule_models.VHMA_ID', "=", "vehicule_manufacturers.VHMA_ID")
                        ->where('VHC_ID', (int)$idVehicule)
                        ->get();// Vehicule::where('VHC_ID', (int)$idVehicule)->get();
        return json_encode($Vehicule);
    }

    public function vehiculeDetail($idVehicule)
    {
        $vehicule = DB::table('vehicules')
                                        ->join('vehicule_models', 'vehicules.VHMO_ID', "=", "vehicule_models.VHMO_ID")
                                        ->join('vehicule_manufacturers', 'vehicule_models.VHMA_ID', "=", "vehicule_manufacturers.VHMA_ID")
                                        ->join('clients', 'vehicules.CLI_ID', "=", "clients.CLI_ID")
                                        ->where('VHC_ID', (int)$idVehicule)
                                        ->first();
        return view('vehiculeDetail', ['vehicule'=>$vehicule]);  
    }

    public function vehiculeConfiguration($idVehicule)
    {
        $vehicule = DB::table('vehicules')
                                        ->join('vehicule_models', 'vehicules.VHMO_ID', "=", "vehicule_models.VHMO_ID")
                                        ->join('vehicule_manufacturers', 'vehicule_models.VHMA_ID', "=", "vehicule_manufacturers.VHMA_ID")
                                        ->join('clients', 'vehicules.CLI_ID', "=", "clients.CLI_ID")
                                        ->where('VHC_ID', (int)$idVehicule)
                                        ->first();
        return view('vehiculeConfiguration', ['vehicule'=>$vehicule]);  
    }

    public function jsonVehiculeClient($filterClient)
    {
        $filteredVehicules = Vehicule::
                                join('vehicule_models', 'vehicules.VHMO_ID', "=", "vehicule_models.VHMO_ID")
                                ->join('vehicule_manufacturers', 'vehicule_models.VHMA_ID', "=", "vehicule_manufacturers.VHMA_ID")
                                ->where('CLI_ID', (int)$filterClient)
                                ->get();
        return json_encode($filteredVehicules); 
    }

    public function jsonVehiculeFilter($filter)
    {
        $filteredVehicules = Vehicule::where('VHC_Registration', "LIKE", "%".$filter."%")->get();
        return json_encode($filteredVehicules); 
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $iVehiculeID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $vehicule = Vehicule::findOrFail($input["iVehiculeID"]);
        $hasPhoto = isset($input['iPhoto']);
        if($hasPhoto)
        {
            $file = $request->file('iPhoto');
            $filepath = "\\assets\\img\\"; 
            $filename = time() . "-" . $file->getClientOriginalName();
            $file = $file->move(public_path() . $filepath, $filename);
            $fpath =  $filepath . $filename;
            $vehicule->VHC_Photo = $fpath;
        }
        $vehicule->VHC_Registration = $input["iRegistration"];
        $vehicule->VHC_IDV = $input["iIDV"];
        $vehicule->VHMO_ID = $input["iModel"];
        $vehicule->VHC_CirrculationDate = $input["iCirculationDate"];
        $vehicule->CLI_ID = $input["iClient"];
        $vehicule->save();
        return(csrf_token());
    }



    /**
     * Toggle Active status from a vehicule
     *
     * @param  int  $idVehicule
     * @param  bool $active
     * @return \Illuminate\Http\Response
     */
    public function toggle(Request $request)
    {
        $input = $request->all();
        $state = (boolean)$input["active"];
        $vehicule = Vehicule::findORFail($input["idVehicule"]);
        $vehicule->VHC_Active = !$state;
        $vehicule->save();
        return (csrf_token());


    }
}
