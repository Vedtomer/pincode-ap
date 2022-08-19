<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Models\Pincode;
use App\Post;
use Illuminate\Http\Request;


class SitemapController extends Controller
{
    
    public function index(Request $r)
    {
       
        $pincode = Pincode::select('slug','updated_at')->where('slug',"!=","")->limit(10)->get()->toArray();

        return response()->view('sitemap', compact('pincode'))
          ->header('Content-Type', 'text/xml');

    }
}