<?php

namespace App\Http\Controllers\LandingPage\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main(Request $request){
		return view('content.landing-page.home.main');
	}
}
