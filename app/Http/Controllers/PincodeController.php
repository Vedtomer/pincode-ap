<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pincode;
use Illuminate\Support\Facades\View;

class PincodeController extends Controller
{
    public function index(Request $request,$state=null,$city=null,$PostOffice=null){
       $reqdata= $request->all();
       //return $request->{'Post-Office'};
        $data['state']=Pincode::select('statename')->distinct()->orderBy('statename')->get()->toArray();
        if(!empty($state)){
            $reqdata['state']=$state;
         $data['city']=Pincode::select('Districtname as name')->where('statename',$state)->distinct()->orderBy('Districtname')->get()->toArray();
        }

        if(!empty($city)){
            $reqdata['city']=$city;
            $data['postoffice']= Pincode::select('officename')->where('statename',$request->state)
       ->where('Districtname',$city)->get();
           }

           if(!empty($PostOffice)){
            $data=Pincode::where('statename',$state)->where('Districtname',$city)
        ->where('officename',$PostOffice)->first()->toArray();

        return View::make('show',compact('data')); 
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
