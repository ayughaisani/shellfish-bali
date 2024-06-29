@include('user.component.header')

<body class="bg-dark">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/special') }}">Special Offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/transportation') }}">Transportation</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/wisatabali') }}">Wisatabali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/wisatabanyuwangi') }}">Wisatabanyuwangi</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link badge text-bg-orange m-2 p-2" href="{{ url('/booking') }}">Book</a>
                            </li>
                            <-- Language -->
                            <div class="nav-item dropdown">
                        <!--<select class="nav-link dropdown-toggle" id="">
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

    <main class="transport">
        <div class="container">
            <div class="row text-center d-flex justify-content-center mb-5">
                @foreach ($data as $item => $row)
                    <div class="card m-3 col-md-3 col-sm-12" style="width: 15rem;">
                        <img src="{{asset('storage/'.$row->picture_transportation)}}" class="card-img-top" alt="...">
                        <div class="card-body text-blue">
                            <div class="text-center">
                                <h3 class="card-title fw-bolder">{{$row->name_transportation}}</h3>
                                <h5 class="card-text">${{$row->price}}<small class="per">/Day</small></h5>
                                <a href="{{route('detail_transport',$row->id)}}" class="btn btn-orange text-white">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </main>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="{{ asset('user/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('user/js/jquery.bundle.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('user/js/jquery.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('user/js/script.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->

</body>

</html>

