@extends('layouts.master')

@section('title', 'Killers')

@section('content')



<div class="row clear center_container" id="homepage_more">
	<div class="clear">
		<h2 class="floatl">PERKS</h2>
		 <button type="button" name="button">Killers</button>
	</div>

    <div class="center_container clear margin_top_32">

         @foreach ($perks as $perk)
         <div class="clear floatl" style="width:50%;margin-bottom:25px;">


            <div class="floatl " style="background:url(images/perks/perk_purple.png);background-size:contain;width:96px;">
                 <img class="floatl" src="images/perks/{{$perk->short_name}}.png" style="width:100%;" alt="">

            </div>
            <p class="floatl">{{$perk->long_name}}</p>
            <p class="floatl font_light">When retrieving an Item from a Chest, there is a 100 %
                 chance that an Add-on IconHelp addons.png of Very Rare Rarity or lower will be attached to it.

<br><br>10/25/50 % chance to find a second Add-on of Uncommon Rarity or lower.</p>
                </div>
        @endforeach

    </div>
@endsection
