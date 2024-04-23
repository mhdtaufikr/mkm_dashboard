<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MKM Application</title>
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/logo_kop2.gif') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" crossorigin="anonymous" />

    <style>
        body {
            background-image: url("{{ asset('assets/img/Backround login.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Animation */
        @keyframes cardAnimation {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .card-animation {
            animation: cardAnimation 0.5s ease forwards;
        }

        /* Custom styles for the card */
        .custom-card {
            width: 80%; /* Adjust the width as needed */
            max-width: 600px; /* Maximum width for responsiveness */
            margin: auto; /* Center the card horizontally */
        }

        /* Additional styles */
        .list-group-item {
            padding: 20px;
            font-size: 20px;
            border: none;
            transition: background-color 0.3s ease; /* Tambahkan efek transisi saat hover */
        }

        .list-group-item i {
            margin-bottom: 10px;
            display: block; /* Membuat ikon menjadi blok agar dapat diposisikan dengan mudah */
        }

        .list-group-item:hover {
            background-color: #f8f9fa; /* Warna latar belakang saat dihover */
            border-radius: 10px; /* Membuat sudut item list menjadi sedikit melengkung */
        }

        .list-group-item a {
            color: #333; /* Warna teks */
            text-decoration: none;
        }

        .card-footer {
            background-color: transparent;
            border-top: none;
        }

        .card-footer .small {
            color: #777; /* Warna teks footer */
        }
    </style>
</head>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main style="margin-top: 140px"> <!-- Mengurangi margin-top -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5 card-animation">
                                <div class="card-body">
                                    <!--alert success -->
                                    @if (session('statusLogin'))
                                    <div class="alert alert-warning" role="alert">
                                        <strong>{{ session('statusLogin') }}</strong>
                                    </div>
                                    @elseif(session('statusLogout'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ session('statusLogout') }}</strong>
                                    </div>
                                    @endif

                                    <!--alert success -->
                                    <h1 class="text-center font-weight-bold mb-4">Mitsubishi Krama Yudha Motors and Manufacturing</h1>

                                    <div class="row">
                                        <div class="col-md-4 list-group-item text-center">
                                            <a target=”_blank” href="http://172.17.210.227:8800/">
                                                <i class="fas fa-cogs fa-5x mb-2"></i> <!-- Menambahkan ikon ke blok -->
                                                Asset Management
                                            </a>
                                        </div>
                                        <div class="col-md-4 list-group-item text-center">
                                            <a target=”_blank” href="http://172.17.210.227:8080/">
                                                <i class="fas fa-pallet fa-5x mb-2"></i>
                                                Pallet Tracing
                                            </a>
                                        </div>
                                        <div class="col-md-4 list-group-item text-center">
                                            <a target=”_blank” href="http://172.17.210.227:7000/">
                                                <i class="fas fa-qrcode fa-5x mb-2"></i>
                                                QR Code Generator
                                            </a>
                                        </div>
                                        <div class="col-md-4 list-group-item text-center">
                                            <a target=”_blank” href="http://172.17.210.227:8888/">
                                                <i class="fas fa-check-square fa-5x mb-2"></i>
                                                Checksheet SL-Frame
                                            </a>
                                        </div>
                                        <div class="col-md-4 list-group-item text-center">
                                            <a target=”_blank” href="#">
                                                <i class="fas fa-check-circle fa-5x mb-2"></i>
                                                Checksheet ME Stamping
                                            </a>
                                        </div>
                                        <div class="col-md-4 list-group-item text-center">
                                            <a target=”_blank” href="#">
                                                <i class="fas fa-chart-line fa-5x mb-2"></i>
                                                Checksheet Daily Report Engine Operation
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-center justify-content-center">
                                    <div class="col-12 small">Copyright PT Mitsubishi Krama Yudha Motors and Manufacturing&copy; 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
</body>

</html>
