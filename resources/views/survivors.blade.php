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
            survivor_list_item border10"
            style="background:#111 url(images/survivors/{{$surv->shortname}}_big.png) 30px -100px">
                 <div class="survivor_list_item_images">
                      <div class="clear">
                           <!-- <img class="floatl" src="images/survivors/claudette_portrait.png" alt=""> -->
                           <p class="floatl">{{ $surv->fullname }}</p>
                           <br><br><p class="font_light italic">"I'm not dying here in this hellhole!"</p>
                      </div>
                      <img src="images/perks/perk__bottany_knowledge.png" alt="">
                      <img src="images/perks/empathy.png" alt="">
                      <img src="images/perks/selfcare.png" alt="">
                 </div>
            </div>
        @endforeach
    </div>
@endsection
