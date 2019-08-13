@extends('layouts.master')

@section('title', 'Killers')

@section('content')



<div class="row clear center_container" id="homepage_more" style="">
	<div class="clear">
		<h2 class="floatl">PERKS</h2>
		<div class="floatl clear"style="margin-left:36px;">
			<button style="top:2px;" type="button" name="button" class="button_dark button_rounded_left floatl">Killers</button>
			<button style="top:2px;" type="button" name="button" class="button_light  floatl">Survivors</button>
<button style="top:2px;background: #777 url(images/killers/hag_big.png) -20px -20px no-repeat;background-size: 100px;padding-left: 64px;filter: contrast(1.5);" type="button" name="button" class="button_light  floatl">Hag</button>
<button style="top:2px;background: #777 url(images/survivors/meg_big.png) -20px -20px no-repeat;background-size: 100px;padding-left: 64px;filter: contrast(1.5);" type="button" name="button" class="button_light  floatl">Doctor</button>
<button style="top:2px;background: #777 url(images/killers/ghostface_big.png) -20px -20px no-repeat;background-size: 100px;padding-left: 64px;filter: contrast(1.5);" type="button" name="button" class="button_light  floatl">Ghostface</button>

			<button style="top:2px;" type="button" name="button" class="button_light button_rounded_right floatl">Both</button>
		</div>
		<div class="floatl clear"style="margin-left:36px;">
			<button style="top:2px;" type="button" name="button" class="button_dark button_rounded_left floatl">Rank</button>
			<button style="top:2px;" type="button" name="button" class="button_light button_rounded_right floatl">Alphabetical</button>
		</div>
		<!-- <div class="floatl clear" style="margin-left:36px; margin-top:96px;" id="perks_survs_list">
			@foreach ($survs as $surv)
			<div class="floatl" style="width:72px;height:72px;
			background-size:contain;transform:rotate(45deg);overflow:hidden;border: 8px solid black;">
				<div class="" style="width:128px;height:128px;
				background:#444 url('images/survivors/{{$surv->short_name}}_portrait.png') center center;
				background-size:128px;transform:rotate(-45deg);left:-12px; top:-32px;">
				</div>
			</div>
			@endforeach
		</div> -->
	</div>
	<br><br>

	<div class="center_container clear margin_top_32">
			@foreach ($perks as $perk)
			<div class="clear floatl" style="width:100%;margin-bottom:25px;height:208px;">
				<div class="floatl" style="z-index:10;top:-46px;background:url(images/perks/perk_purple.png) no-repeat;background-size:contain;width:96px;">
					<img class="" src="images/perks/{{$perk->short_name}}.png" style="width:100%;" alt="">
				</div>
				<div class="floatl" style="padding-left:54px;width: 90%;border-left:2px solid black;padding-top:6px;padding-top:8px;left:-48px;border-top:2px solid black;">
					<p class=""  style="font-size: 24px;">{{$perk->long_name}} </p> <p class="floatr">4.0 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
					<p class=" font_light" style="height:200px;">{!!$perk->description!!}</p>
				</div>
				</div>
				@endforeach
	</div>
			@endsection
