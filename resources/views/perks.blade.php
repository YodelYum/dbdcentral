@extends('layouts.master')

@section('title', 'Killers')

@section('content')



<div class="row clear center_container" id="homepage_more">
	<div class="clear">
		<h2 class="floatl">PERKS</h2>
		<button type="button" name="button">Killers</button>
	</div>
	<br><br>

	<div class="center_container clear margin_top_32">

		@foreach ($perks as $perk)
		<div class="clear floatl" style="width:50%;margin-bottom:25px;height:208px;">
			<div class="floatl" style="z-index:10;top:-46px;background:url(images/perks/perk_purple.png) no-repeat;background-size:contain;width:96px;">
				<img class="" src="images/perks/{{$perk->short_name}}.png" style="width:100%;" alt="">
			</div>
			<div class="floatl" style="padding-top:6px;padding-top:8px;left:-48px;width:460px;border-top:2px solid black;">
				<p class="floatl"  style="left:38px;font-size: 24px;">{{$perk->long_name}} </p> <p class="floatr">4.0 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
				<p class="floatl font_light" style="height:200px;width:500px;border-left:2px solid black;padding-left:36px;">{!!$perk->description!!}</p>
			</div>




			</div>
			@endforeach

		</div>
		@endsection
