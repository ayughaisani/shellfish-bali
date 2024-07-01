<!doctype html>
<html lang="en">

<head>
    <title>ShellFish | Tours</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('user.component.header');
    <link rel="stylesheet" href="{{ asset('user/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/intlTelInput.css') }}">
    <script src="{{ asset('user/js/intlTelInput.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css"> --}}
</head>

<body class="banner-image-booking">
    <header class="">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <div class="ms-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/home') }}" aria-current="page">Home <span
                                        class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/destination') }}">Destinations</a>
                           </li>
                            <li class="nav-item">
                                <a class="nav-link" href="specialOffers.html">Special Offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/transportation') }}">Transportation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/destination') }}">Wisatabali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/destination') }}">Wisatabanyuwangi</a>
                            </li>
                            <!-- Language -->
                            <!-- <div class="nav-item dropdown">
                      <select class="nav-link dropdown-toggle" id="">
                        <div class="dropdown-menu">
                          <option value="en" class="dropdown-item" style="background: #00000050 0.1; color: black;">EN</option>
                          <option value="id" class="dropdown-item" style="background: #00000050 0.1; color: black;">ID</option>
                        </div>
                      </select>
                    </div>  -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send/?phone=%2B6282129293099&text&type=phone_number&app_absent=0"
            class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </header>

    <div class="m-4"></div>
    <div class="container contet bg-white rounded-2 booking">
        <div class="text-center p-4 text-orange ">
            <h3 class="fw-bolder">Thanks</h3>
        </div>
        <div class="text-center p-4  ">
            <h3 class="fw-bolder">thank you for ordering services on shelfish, wait for further information we will send the order number via WhatsApp</h3>
        </div>
        <center>
            <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
        </center>
       
    </div>


    <footer class="footer-transport fixed-bottom p-2 bg-dark text-center">
        <div class="container text-white">
            <ul>
                <li><i class="bi bi-telephone"></i><a href="https://www.instagram.com/shellfish.balitour/"
                        target="_blank"> +62 821-2929-3099</a></li>
                <li><i class="bi bi-instagram"></i><a href="https://www.instagram.com/shellfish.balitour/"
                        target="_blank"> shellfish.balitour</a></li>
                <li><i class="bi bi-envelope-fill"></i> <a href="mailto:shellfish.cs@gmail.com"
                        target="_blank">shellfish.cs@gmail.com</a></li>
            </ul>
        </div>
    </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    
    
    <script src="{{ asset('user/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors --> --}}
   
</body>

</html>
