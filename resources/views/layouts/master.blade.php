<!-- Stored in app/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/abf73c4a8d.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
      <div id="main">
          <div id="content">
               <div class="row clear" id="header">
                  <div class="center_container">
                     <h1 class="floatl"><a href="/">DBD CENTRAL <img id="hook_logo" src="images/hook_icon.png" alt=""> </a></h1>
                     <ul class="floatr" id="navigation">
                          <li > <a @if($route == 'killers') style="color:red;" @endif
                               href="/killers" >KILLERS</a> </li>
                          <li ><a @if($route == 'survivors') style="color:red;" @endif
                                href="/survivors">SURVIVORS</a></li>
                          <li ><a @if($route == 'perks') style="color:red;" @endif
                          href="/perks">PERKS</a></li>
                          <li>BUILDS</li>
                          <li>TOOLS</li>
                          <li>KMOWLEDGEBASE</li>
                          <li style="color:#890A2F;">MEMES</li>
                     </ul>
                  </div>
              </div>

              @yield('content')

            </div>


            <div id="footer" class="row">
                <p style="text-align: center; font-family: Roboto;font-weight:100;">Impressum</p>
            </div>

        </div>

    </body
></html>
