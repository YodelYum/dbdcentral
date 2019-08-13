@extends('layouts.master')

@section('title', 'Killers')

@section('content')



<div class="row clear center_container" id="homepage_more">
<h2 class="">KILLERS</h2>

    <div class="center_container clear margin_top_32">
         @foreach ($killers as $killer)
            <div class="floatl no_overflow
            character_list_item border10">
                 <div class="character_list_item_images"
                 style="background:#111 url(images/killers/{{$killer->short_name}}_big.png)">
                 </div>
                 <p class="killer_fullname">{{ $killer->long_name }}</p>
                 <p class="font_light italic killer_actualname" style="font-size:16px !important;">{{ $killer->real_name }}</p>

                 <div class="perk_purple first_perk">
                      <img class="zoomOnHover" src="images/perks/{{$killer->perk1}}.png">
                 </div>
                 <div class="perk_purple second_perk">
                      <img class="zoomOnHover" src="images/perks/{{$killer->perk2}}.png" alt="">
                 </div>
                 <div class="perk_purple third_perk">
                      <img class="zoomOnHover" src="images/perks/{{$killer->perk3}}.png" alt="">
                 </div>
            </div>
        @endforeach
    </div>
@endsection
