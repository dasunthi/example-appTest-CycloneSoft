<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;

class StudentController extends Controller
{
    //Insert teachers input data to db
    function insertWeightData(Request $data){
        $Weight = new Weight;
        $Weight->name = $data->std_name;
        $Weight->weight = $data->std_weight;

        if($Weight->save()){
            //after save succes data to db page redirect to data list route
            return redirect('/showData');
        }else{
            return view('/error');
        }
    }

    //get data to show in viewData blade page
    function showData(){
        $data = Weight::all(); //get table all data
        return view('viewData', [
            'Data' => $data
        ]);
    }
}
