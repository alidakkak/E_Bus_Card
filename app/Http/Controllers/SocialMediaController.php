<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialMediaRequest;
use App\Http\Resources\SocialMedisResource;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index() {
        $social = SocialMedia::all();
        return SocialMedisResource::collection($social);
    }

    public function store(SocialMediaRequest $request){
        $social = SocialMedia::create($request->all());
        return SocialMedisResource::make($social);
    }

    public function update(Request $request, SocialMedia $social){
        $social = $social->update($request->all());
        return SocialMedisResource::make($social);
    }

    public function delete(SocialMedia $social) {
        $social->delete();
        return response([
           "deleted SuccessFully",
        ]);
    }



}
