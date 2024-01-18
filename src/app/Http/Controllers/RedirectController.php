<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Url;
use Vinkla\Hashids\Facades\Hashids;
class RedirectController extends Controller
{
	public function __invoke(string $hashedIds)
	{
		$url = Url::findOrFail(Hashids::decode($hashedIds)[0] ?? null);

	    return Redirect::to($url->url);
	}
}
