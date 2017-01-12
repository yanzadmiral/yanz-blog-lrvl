<?php

namespace Yblog\Http\Controllers;

use Illuminate\Http\Request;
use Yblog\Artikel;
use Yblog\User;
use Yblog\Tag;
use Carbon\Carbon;

class ShowContenControllerr extends Controller
{
	public function index()
	{
		Carbon::setLocale('id');
		$artikel = Artikel::all()->take(3);

		return view('blogutama.awal',compact('artikel'));
	}
    public function coba()
    {
    	$artikel = Artikel::find('art-2');
    	$artikel = 1;

    	//return User::OrderByRaw('rand()')->first();
    	//return Tag::OrderByRaw('rand()')->first()->id_tag;
    	//return Artikel::OrderByRaw('rand()')->first()->id_artikel;
    	return $artikel;
    }
}
