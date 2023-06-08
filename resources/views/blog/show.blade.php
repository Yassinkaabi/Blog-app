<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Blog SoS</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('../css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('../images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('../css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('../css/owl.carousel.min.css') }}">
      <link rel="stylesoeet" href="{{ asset('../css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   </head>
<body>
<x-nav/>
    <div class="w-4/5 m-auto text-center" style="text-align:center;display:flex;justify-content:center;align-items:center;flex-direction:column;padding-top:40px">
        <div class="w-4/5 rm-auto text-center">
            <img class="rounded float-start img-thumbnail " style="width:50em" src="{{ asset('images/' . $blog->image) }}" alt="">
        </div>
        <div class="w-4/5 m-auto text-center">
            <div class="py-15">
                <h1 class="text-6xl">
                    {{ $blog->title }}
                </h1>
            </div>
        </div>
        <div class="w-4/5 m-auto pt-20">
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $blog->user->name }}</span>, Created on {{ date('jS M Y', strtotime($blog->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $blog->content }}
            </p>
        </div>
    </div>
</body>
</html>
{{-- <x-footer/> --}}
