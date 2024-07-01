<!doctype html>
<html lang="en">

<head>
    <title>ShellFish | Destination</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('user.component.header')
    <link rel="stylesheet" href="{{ asset('user/css/carousel.css') }}">

</head>

<body>
    <header class="">
        @include('user.component.navbar')

        <div class="banner-image w-100 vh-100 d-flex justify-content align-items-center">
      <div class="container">
        <div class="col-lg-6">
          <div class="content text-white">
            <img src="{{asset('user/assets/icon/Logo.svg')}}" alt="ShellFish Logo" srcset="">
            {{-- <h1>ShellFish</h1> --}}
            {{$data->isi}}
            
            <p class="big">
            <p><span class="open p-1">Buka Setiap Hari: {{$data->opendaily}}</span></p>
          </div>
        </div>
      </div>
    </div>
    

    
    

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send/?phone=%2B6282129293099&text&type=phone_number&app_absent=0"
            class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>    </header>

    <main>
    </main>


    @include('user.component.footer')
    <script src="{{ asset('user/js/carousel.js') }}"></script>

