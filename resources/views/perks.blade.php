@extends('layouts.master')

@section('title', 'Killers')

@section('content')



<div class="row clear center_container" id="homepage_more">
<h2 class="">PERKS</h2>

    <div class="center_container clear margin_top_32">

         @foreach ($perks as $perk)
         <div class="clear floatl" style="width:25%;margin-bottom:25px;">


            <div class="floatl " style="background:url(images/perks/perk_purple.png);background-size:contain;width:96px;">
                 <img class="floatl" src="images/perks/{{$perk->short_name}}.png" style="width:100%;" alt="">

            </div>
            <p class="floatl">{{$perk->long_name}}</p>
            <p class="floatl font_light">Lorem ipdasd as dmet</p>
                </div>
        @endforeach

    </div>
@endsection
