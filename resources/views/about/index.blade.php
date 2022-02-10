@extends('layouts.app')
@section('content')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  
  
    <title>About Us.</title>
  </head>
  <body>
  
    <div class="p-10">  
      <!--Card 1-->
      <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full h-45" src="https://scontent.fbdp1-1.fna.fbcdn.net/v/t1.6435-9/51510843_373607573218138_4666752180676460544_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=YZSXi_gAFsUAX8bkXju&_nc_ht=scontent.fbdp1-1.fna&oh=00_AT9jYv_svqrMeTUPa640pe8vASjuwLaOIySN2KDKAD2Euw&oe=620B8973" alt="About Me.">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">About Me!</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#explore</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#code</span>
        </div>
      </div>
    </div>
  
  </body>


@endsection