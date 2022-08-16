<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pincode;

class PincodeController extends Controller
{
    public function index(){
        $data=Pincode::select('statename')->distinct()->orderBy('statename')->get()->toArray();
    
        return view('index',compact('data'));
    }

    public function getDistrict(Request $request){
        $state=$request->data;
        $data['a']=Pincode::select('Districtname as name')->where('statename',$state)->distinct()->orderBy('Districtname')->get()->toArray();

       // $data['b']=Pincode::select('City as name')->where('state',$state)->distinct()->orderBy('City')->get()->toArray();

        $data['City']=$data['a'];
        return response()->json([ 'data'=>$data]); 
    }


    public function getpostoffice(Request $request){
        $keyword=$request->data;
        $data['City']= Pincode::select('officename')->where('statename',$request->state)
       ->where('Districtname',$keyword)->get();
       return response()->json([ 'data'=>$data]); 
    }

    public function findpincode(Request $request){
       // return $request;
     $data=Pincode::where('statename',$request->state)->where('Districtname',$request->district)
        ->where('officename',$request->officename)->first()->toArray();

        return view('show',compact('data')); 
    }
}
