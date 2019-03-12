<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdsController extends Controller
{
   
    public function index()
    {
        $events = RendezvSaisie::all();
    }

    public function getAdsByUser()
    {
        //$ads =DB::table('ads')->get();
        return view('back.ads.show');
    }

    public function newAds(Request $request)
    {
        //$ads =DB::table('ads')->get();
        return view('back.ads.new');
    }
    public function addNewAd()
    {
        $addAds = DB::table('ads')->insert(
            [   'libelle_ads' =>$request->libelle_ads,
                'category_ads' =>$request->category_ads,
                'description' =>$request->description,
                'created_at' =>date("Y-m-d H:i:s"),
                
            ]
         );
         if($addAds)
         {
            return redirect('dashboard/ads')->with('adAds', 'Ads are added with success');
         }
    }

    public function categories()
    {
        $categories =DB::table('categories_ads')->get();
        return view('back.ads.categories.show', ['categories' => $categories]);
    }

    public function addCategory(Request $request)
    {
        DB::table('categories_ads')->insert(
            [   'english_name' =>  $request->english_name,
                'frensh_name' =>  $request->frensh_name,
                'created_at' => date("Y-m-d H:i:s"),
            ]

        );
        $data = DB::table('categories_ads')->latest()->first();
        return response ()->json ($data );
    }
   
}
