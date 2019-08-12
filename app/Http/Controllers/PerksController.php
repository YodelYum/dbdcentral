<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class PerksController extends Controller
{
    public function index(){


	 //    $images = Storage::allFiles("public/images/perks");
	 //    foreach ($images as $key => $value) {
	 //    	$name =  explode('.',explode('/',$value."<br>")[3])[0];
		// echo $name;
		// $perk = new Perk;
	 // $perk -> short_name = $name;
	 // $perk -> long_name = "long_name";
	 // $perk -> description = "description";
	 // $perk -> rarity = 1;
	 // $perk->save();
	 //    }
	    //
	    // foreach ($perks as $v) {
	    //
		//     $pieces = preg_split('/(?=[A-Z])/',$v->short_name);
	    //
		//     $longname = "";
		//     foreach ($pieces as $value) {
		//     	$longname .= ucfirst($value)." ";
		//     }
		//     $v->long_name = $longname;
		//     $v -> save();
   	    // }
	    $perks = Perk::all();

	    return view('perks', ['perks' => $perks, 'route' => 'perks']);
    }
}
