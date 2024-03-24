<!doctype html>
<html lang="en">

<head>
    <title>ShellFish | banyuwangi</title>
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
                                <a class="nav-link active" href="{{ url('/') }}" aria-current="page">Home <span
                                        class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/destination') }}">Destinations</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="{{ url('/special') }}">Special Offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/transportation') }}">Transportation</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/wisatabali') }}">Wisatabali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/wisatabanyuwangi') }}">Wisatabanyuwangi</a>
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
    <!--<div class="container contet bg-white rounded-2 booking">
    <div class="contet text-white p-4">-->
    <!--<style> <h1 {class=sunsilk: center;} </style>     
    <h1 class="sunsilk">List Tours</h1>-->
    
    
        </div>
        <form id="validate" action="{{ route('store.booking') }}" method="POST">
            @csrf
            <div class="row">
    <!--list wisata-->
    <div class="container">
    <div class="table-responsive">          
    <table class="table">
    <style>
    table, th, td {
  border: 5px solid white;
  border-collapse: collapse;
}
</style>
<style>
h1 { text-align: center;}
</style>
</head>
<body>
<<h1 style="color:white;">Banyuwangi Tourist list</h1>
<table style="width:100%">
</body>
<style>
body {
  color: white;
}
th {
  background-color: orange;
  color: white;
}
</style>
  <tr>
    <th>No</th>
    <th>Wisata</th> 
    <th>Alamat</th>
    <th>Biaya</th>
  </tr>
<?php
$i=1;
?>
  @foreach($data as $a)
  <tr>
    <td>{{$i++}}</td>
    <td>{{$a->wisata}}</td> 
    <td>{{$a->alamat}}</td>
    <td>{{$a->biaya}}</td>
  </tr>
  @endforeach
</table>
  </div>
  

    <footer class="footer-transport fixed-bottom p-2 bg-dark text-center">
        <div class="container-fluid text-white">
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
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/js/validasi.js') }}"></script>
    <script src="{{ asset('user/js/validate.js') }}"></script>

    <script src="{{ asset('user/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors --> --}}
    <!--<script type="text/javascript">
        const input = document.querySelector("#mobileNumber");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");
        // here, the index maps to the error code returned from getValidationError - see readme
        const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
        // initialise plugin
        const iti = window.intlTelInput(input, {

            utilsScript: "{{ asset('user/js/utils.js?1687509211722') }}"
        });
        const reset = () => {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        // on blur: validate
        input.addEventListener('blur', () => {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    const errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });
        document.querySelector("#validate").addEventListener("submit", function(e) {
            var isValid = iti.isValidNumber();
            if (!isValid) {
                e.preventDefault(); // Mencegah pengiriman form jika nomor telepon tidak valid
                input.classList.add("error");
                const errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        });
        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);

        function updatePlaceholder(selectedCountry) {
 
            input.value = '+' + iti.getSelectedCountryData().dialCode;
        }
        updatePlaceholder();
        // Mengatur nilai input dengan kode negara
    </script>
    <script type="text/javascript">
        $("#validate").validate({
            rules: {
                start: {
                    required: true,
                    date: true,
                },
                end: {
                    required: true,
                    date: true,
                    greaterThanStartDate: true,
                },
                firstname: {
                    required: true,
                },
                lastname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,

                },
                country: {
                    required: true,
                },
            },
            messages: {
                start: {
                    required: "Please enter a start date.",
                },
                end: {

                    required: "Please enter an end date.",
                    greaterThanStartDate: "End date must be greater than start date.",

                },
                foto_event: {
                    required: "foto event harus ditambahkan",
                },
                berita: {
                    required: "verita tidak boleh kosong",
                },
            },
        });
    </script>
</body>

</html>
