<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Vinkla\Hashids\Facades\Hashids;
class ShorterController extends Controller
{
    public function __invoke(Request $request)
	{
		$request->validate(['url' => 'required|url']);
        $url = Url::create(['url' => $request->url]);
        
        return view('shorter')->with('shortUrl', Hashids::encode($url->id));
	}
}
