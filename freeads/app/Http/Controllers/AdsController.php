<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdsController extends Controller
{
    public function create() {
        return view('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        
        $data = request()->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'image' => ['required', 'image']
        ]);

        auth()->user()->ad()->create($data);
        
        // dd($data);

        // $ad = New Ad;

        // foreach($data as $key => $value) {
        //     $ad->$key = $value;
        // }
        // $ad->user_id = $

        // $ad->save();

        return redirect('home');
    }
}
