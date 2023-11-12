<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index() {

    }

    public function store(Request $request) {
        $user = auth()->user();
        $view = View::create([
            'user_id' => $user->id,
            'social_media_id' => $request->social_media_id
        ]);
        return response("SuccessFully");
    }

    public function viewc() {
        $user = auth()->user();
        $views = SocialMedia::join('views', 'social_media.id', '=', 'views.social_media_id')
            ->select('social_media.id', 'social_media.type', 'social_media.link', DB::raw('COUNT(views.id) as views_count'))
            ->where('social_media.user_id', $user->id)
            ->groupBy('social_media.id', 'social_media.type', 'social_media.link')
            ->get();
        return $views;
    }


}
