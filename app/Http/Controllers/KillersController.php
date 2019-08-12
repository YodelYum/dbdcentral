<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Killer;
use Illuminate\Support\Facades\DB;

class KillersController extends Controller
{
     public function index(){

 	    $killers =  DB::select("SELECT k.id,k.short_name, k.long_name,
	(SELECT perks.short_name FROM killers LEFT JOIN killerperks ON k.id=killerperks.killerID
             LEFT JOIN perks ON perks.id = killerperks.perkID WHERE killers.id = k.id LIMIT 0,1 ) as perk1,
			 (SELECT perks.short_name FROM killers LEFT JOIN killerperks ON k.id=killerperks.killerID
             LEFT JOIN perks ON perks.id = killerperks.perkID WHERE killers.id = k.id LIMIT 1,2 ) as perk2,
			 (SELECT perks.short_name FROM killers LEFT JOIN killerperks ON k.id=killerperks.killerID
             LEFT JOIN perks ON perks.id = killerperks.perkID WHERE killers.id = k.id LIMIT 2,3 ) as perk3
 FROM killers as k");

          return view('killers', ['killers' => $killers, 'route' => 'killers']);
     }

}
