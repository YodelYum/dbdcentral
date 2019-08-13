<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Survivor;
use Illuminate\Support\Facades\DB;

class SurvivorsController extends Controller
{
    public function index(){
	    $survivors =  DB::select("SELECT s.id, s.short_name, s.long_name, s.real_name,
	(SELECT perks.short_name FROM survivors LEFT JOIN survivorperks ON s.id=survivorperks.survivorID
             LEFT JOIN perks ON perks.id = survivorperks.perkID WHERE survivors.id = s.id LIMIT 0,1 ) as perk1,
			 (SELECT perks.short_name FROM survivors LEFT JOIN survivorperks ON s.id=survivorperks.survivorID
             LEFT JOIN perks ON perks.id = survivorperks.perkID WHERE survivors.id = s.id LIMIT 1,2 ) as perk2,
			 (SELECT perks.short_name FROM survivors LEFT JOIN survivorperks ON s.id=survivorperks.survivorID
             LEFT JOIN perks ON perks.id = survivorperks.perkID WHERE survivors.id = s.id LIMIT 2,3 ) as perk3
 FROM survivors as s");

          return view('survivors', ['survs' => $survivors, 'route' => 'survivors']);
    }
}
