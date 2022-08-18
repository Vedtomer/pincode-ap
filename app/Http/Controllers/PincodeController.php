<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pincode;

class PincodeController extends Controller
{
    public function index(Request $request){
       $reqdata= $request->all();
       //return $request->{'Post-Office'};
        $data['state']=Pincode::select('statename')->distinct()->orderBy('statename')->get()->toArray();
        if(!empty($request->state)){
         $data['city']=Pincode::select('Districtname as name')->where('statename',$request->state)->distinct()->orderBy('Districtname')->get()->toArray();
        }

        if(!empty($request->city)){
            $data['postoffice']= Pincode::select('officename')->where('statename',$request->state)
       ->where('Districtname',$request->city)->get();
           }

           if(!empty($request->{'Post-Office'})){
            $data=Pincode::where('statename',$request->state)->where('Districtname',$request->city)
        ->where('officename',$request->{'Post-Office'})->first()->toArray();

        return view('show',compact('data')); 
           }

           
        
    
        return view('index',compact('data'),['reqdata'=>$reqdata]);
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
