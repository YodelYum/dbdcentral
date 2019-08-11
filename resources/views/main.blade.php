@extends('layouts.master')

@section('title', 'Home')

           @section('content')
            <div class="row clear" id="main" >
                <div id="slideshow" class="">
                    <img src="images/banners/banner_big.jpg">
                </div>
            </div>

            <div class="center_container row clear" id="news">
              <div class="floatl no_overflow homepage_more_list background_light border10">
                   <div style="background:url(images/killers/ghost.png)"
                   class="homepage_more_list_img">
                   </div>
                   <p>Latest Killer - <span class="font_light">Ghostface</span></p>
              </div>
              <div class="floatl no_overflow homepage_more_list background_light border10">
                   <div style="background:url(images/killers/nea.png)"
                   class="homepage_more_list_img">
                   </div>
                   <p>Latest Survivor - <span class="font_light">Nea</span></p>
              </div>
              <div class="floatl no_overflow homepage_more_list background_light border10">
                   <div style="background:url(images/killers/plague.png)"
                   class="homepage_more_list_img">
                   </div>
                   <p>Latest Killer - <span class="font_light">Plague</span></p>
              </div>
          </div>
            @stop
