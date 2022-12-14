<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pincode;
use App\Post;
use Illuminate\Http\Request;


class SitemapController extends Controller
{

    public function index(Request $r)
    {

        $pincode = Pincode::select('slug', 'updated_at')->where('slug', "!=", "")
            ->where('id', '<=', 395)
            ->get()->toArray();

        return response()->view('sitemap', compact('pincode'))
            ->header('Content-Type', 'text/xml');
    }


    public function Sitemap1(Request $r)
    {

        $pincode = Pincode::select('slug', 'updated_at')->where('slug', "!=", "")
            ->where('id', '>', '395')
            ->where('id', '<=', '5000')
            ->get()->toArray();

        return response()->view('sitemap', compact('pincode'))
            ->header('Content-Type', 'text/xml');
    }

    public function Sitemap2(Request $r)
    {

        $pincode = Pincode::select('slug', 'updated_at')->where('slug', "!=", "")
            ->where('id', '>', '5000')
            ->where('id', '<=', '6000')
            ->get()->toArray();

        return response()->view('sitemap', compact('pincode'))
            ->header('Content-Type', 'text/xml');
    }

    public function Sitemap3(Request $r)
    {

        $pincode = Pincode::select('slug', 'updated_at')->where('slug', "!=", "")
            ->where('id', '>', '150000')
            ->get()->toArray();

        return response()->view('sitemap', compact('pincode'))
            ->header('Content-Type', 'text/xml');
    }
}
