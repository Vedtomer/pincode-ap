<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pincode;
use App\Models\Slug;
use Illuminate\Support\Facades\View;
use DataTables;

class PincodeController extends Controller
{
    public function index(Request $request, $state = null, $city = null, $PostOffice = null)
    {
        $reqdata = $request->all();
        //return $request->{'Post-Office'};
        $data['state'] = Pincode::select('statename')->distinct()->orderBy('statename')->get()->toArray();

        //return $data['state'];
        if (!empty($state)) {
            $reqdata['state'] = $state;
            $data['city'] = Pincode::select('Districtname as name')->where('statename', $state)->distinct()->orderBy('Districtname')->get()->toArray();
        }

        if (!empty($city)) {
            $reqdata['city'] = $city;
            $data['postoffice'] = Pincode::select('officename')->where('statename', $request->state)
                ->where('Districtname', $city)->get();
        }

        if (!empty($PostOffice)) {
            $data = Pincode::where('statename', $state)->where('Districtname', $city)
                ->where('officename', $PostOffice)->first()->toArray();

            return View::make('show', compact('data'));
        }




        return view('index', compact('data'), ['reqdata' => $reqdata]);
    }

    public function getDistrict(Request $request)
    {
        $state = $request->data;
        $data['a'] = Pincode::select('Districtname as name')->where('statename', $state)->distinct()->orderBy('Districtname')->get()->toArray();

        // $data['b']=Pincode::select('City as name')->where('state',$state)->distinct()->orderBy('City')->get()->toArray();

        $data['City'] = $data['a'];
        return response()->json(['data' => $data]);
    }


    public function getpostoffice(Request $request)
    {
        $keyword = $request->data;
        $data['City'] = Pincode::select('officename')->where('statename', $request->state)
            ->where('Districtname', $keyword)->get();
        return response()->json(['data' => $data]);
    }

    // public function findpincode(Request $request)
    // {
    //     // return $request;
    //     $data = Pincode::where('statename', $request->state)->where('Districtname', $request->district)
    //         ->where('officename', $request->officename)->first()->toArray();

    //     return view('show', compact('data'));
    // }



    public function PincodeFinder(Request $request)
    {
           
        if ($request->ajax()) {
            
            $data = Pincode::select('slug','Districtname','statename','officename','pincode');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('Details', function ($row){
                    
                    $url= url("Open.png");
                    $btn = "<a href={$row['slug']} target='_blank'>
                    <img src=$url alt='Details' title='Details'></a>";

                    return $btn;
                })
                ->rawColumns(['Details'])
                ->make(true);
        }

        return view('finder');
    }



    public function API()
    {

        
        $pin=Pincode::orderBy('id','desc')->whereNull('slug')->limit(30000)->get()->toArray();
       set_time_limit (0);
       ini_set('memory_limit', '-1');
        if(!empty($pin)){
       foreach($pin as $dd){
        $slug=new Slug();
        $name= $dd['statename']."-".$dd['Districtname'].'-'.$dd['officename'];
        $name=str_replace(' B.O', '', $name);
        $name=str_replace(' S.O', '', $name);
      // echo $name;
       echo "<br>";
       $slug= $slug->CreateSlug($name);
       $pp=Pincode::find($dd['id']);
       $pp->slug=$slug;
       $pp->save();
       
       echo $slug;
       //echo "<br>";
       }
    }else{
        echo "done";
    }
       
      
        // $data = Pincode::whereNull("statename")->get()->toArray();
        // foreach ($data as $rc) {
        //     $pin = $rc['pincode'];
        //     $url = "https://api.postalpincode.in/pincode/" . $pin;
        //     $content = json_decode(file_get_contents($url));
        //     $postof = $content[0]->PostOffice;
        //     foreach ($postof as $post) {
        //         // echo "<pre>";
        //         // print_r($rc);
        //         // print_r($post);
        //         // echo "next";
        //         // echo "</pre>";

        //         $offname = str_replace(' B.O', '', $rc['officename']);
        //         // echo "=====";
        //         $appname = $post->Name;
        //         // echo "<br>";

        //         $offDeliveryStatus = $rc['Deliverystatus'];
        //         $appDeliveryStatus = $post->DeliveryStatus;

        //         $offDivision = $rc['divisionname'];
        //         $appDivision = $post->Division;


        //         $offCircle = $rc['circlename'];
        //         $appCircle = $post->Circle;

        //         $offRegion = $rc['regionname'];
        //         $appRegion = $post->Region;

        //         if (
        //             $offDeliveryStatus == $appDeliveryStatus &&
        //             $offname == $appname  &&
        //             $offDivision == $appDivision &&
        //             $offCircle == $appCircle &&
        //             $offRegion == $appRegion
        //         ) {
        //             echo "cccc";
        //             $pincode = Pincode::find($rc['id']);
        //             $pincode->statename = $post->State;;
        //             $pincode->Districtname = $post->District;
        //             $pincode->save();
        //         }
        //     }
        // }
    }


    public function FindPincode($slug=null){

        if (!empty($slug)) {
            $data = Pincode::where('slug', $slug)->first()->toArray();

            return View::make('show', compact('data'));
        }else{
            $data['state'] = Pincode::select('statename')->distinct()->orderBy('statename')->get()->toArray();
            return view('index', compact('data'));
        }

    }
    
}
