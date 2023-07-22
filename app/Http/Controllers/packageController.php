<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class packageController extends Controller
{
    public function getPackage(){
        return response()->json(Package::all());
    }

    public function search($tracking_number){
       return Package::where("tracking_number",$tracking_number)->get();
    }

    public function add(Request $req){
        $package = new Package;
        $package->name = $req->name;
        $package->tracking_number = $req->tracking_number;
        $package->status = $req->status;
        $result = $package->save();
        if($result){
            return["Result" => "Data has been saved"];
        }
        else {
            return["Result" => "Operation failed"];
        }
    }
}
