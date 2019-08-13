@extends('layouts.master')

@section('title', 'Survivors')

@section('sidebar')

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')



<div class="row clear center_container" id="homepage_more">
<h2 class="">SURVIVORS </h2>


    <div class="center_container clear margin_top_32">
         @foreach ($survs as $surv)
            <div class="floatl no_overflow
            character_list_item border10" >
                 <div class="character_list_item_images"
                 style="background:#111 url(images/survivors/{{$surv->short_name}}_big.png)">
                     </div>
                         <p class="killer_fullname">{{ $surv->long_name }}</p>
                         <p class="font_light italic killer_actualname">"I'm not dying here in this hellhole!"</p>

                         <div class="perk_purple first_perk">
                             <img class="zoomOnHover" src="images/perks/{{ $surv->perk1 }}.png">
                        </div>
                        <div class="perk_purple second_perk">
                             <img class="zoomOnHover" src="images/perks/{{ $surv->perk2 }}.png" alt="">
                        </div>
                        <div class="perk_purple third_perk">
                             <img class="zoomOnHover" src="images/perks/{{ $surv->perk3 }}.png" alt="">
                        </div>
            </div>
        @endforeach
    </div>
@endsection
