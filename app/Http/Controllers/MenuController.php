<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{




	public function wine() {

		$wines = \App\MenuItem::where('group', 1)->where('type', 1)->get();
		$dessertWines = \App\MenuItem::where('group', 2)->where('type', 1)->get();
		$specialCocktails = \App\MenuItem::where('group', 3)->where('type', 1)->get();

	    return view('wine-cocktails.index', compact(
	    	['wines','dessertWines','specialCocktails']
	    ));
    }


    public function brunch() {

    	$brunch = \App\MenuItem::where('group', 4)->where('type', 3)->get();
    	$snacks = \App\MenuItem::where('group', 7)->where('type', 3)->get();
    	$alacarte = \App\MenuItem::where('group', 6)->where('type', 3)->get();
    	$brunchtails = \App\MenuItem::where('group', 5)->where('type', 3)->get();

    	return view('brunch-menu.index', compact([
    		'brunch','brunchtails','alacarte','snacks'
    	]));
    }



    public function happyHour() {
    	return view('happy-hour.index');
    }

    public function dinner() {


    	$categories = \App\MenuGroup::where('typeId', 4)->get();



    	$share = \App\MenuItem::where('group', 8)->where('type', 4)->get();
    	$cheesePlate = \App\MenuItem::where('group', 9)->where('type', 4)->get();
    	$sides = \App\MenuItem::where('group', 10)->where('type', 4)->get();
    	$salads = \App\MenuItem::where('group', 11)->where('type', 4)->get();
    	$small = \App\MenuItem::where('group', 12)->where('type', 4)->get();
    	$large = \App\MenuItem::where('group', 13)->where('type', 4)->get();
    	$desserts = \App\MenuItem::where('group', 14)->where('type', 4)->get();
    	$kids = \App\MenuItem::where('group', 15)->where('type', 4)->get();

    	return view('dinner-menu.index', compact([
    		'share','cheesePlate','sides','salads','small','large','desserts','kids','categories'
    	]));
    }




}
