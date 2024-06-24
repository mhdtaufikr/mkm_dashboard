<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MKM Digitalization</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/logo_kop2.gif') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="{{ asset('particles.json') }}"></script>


    <style>
        body {
            background: linear-gradient(180deg, #000000 0%, #0f0c20 100%);
            color: #000000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            cursor: pointer; /* Allow particles to interact with cursor */
        }

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

        .custom-card {
            width: 90%;
            max-width: 600px;
            margin: auto;
            padding: 0px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .list-group-item {

            padding: 0px;
            font-size: 14px;
            border: none;
            transition: background-color 0.3s ease;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .list-group-item i {
            margin-bottom: 0px;
            display: block;
        }

        .list-group-item:hover {
            background-color: rgba(83, 79, 79, 0.2);
        }

        .list-group-item a {
            color: #000000;
            text-decoration: none;
        }

        .card-footer {
            background-color: rgba(255, 255, 255, 0.1);
            border-top: none;
        }

        .card-footer .small {
            color: #ccc;
        }

        .search-container {
            text-align: center;
            margin-bottom: 0px;
        }

        .search-box {
            width: 40%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #000000;
            outline: none;
        }

        .search-box::placeholder {
            color: #070707;
        }

        .location-title {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .fade-in {
            animation: fadeInAnimation 1s ease forwards;
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div id="particles-js"></div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main style="margin-top: -15px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-4 card-animation custom-card">
                                <div class="card-body">
                                    @if (session('statusLogin'))
                                    <div class="alert alert-warning" role="alert">
                                        <strong>{{ session('statusLogin') }}</strong>
                                    </div>
                                    @elseif(session('statusLogout'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ session('statusLogout') }}</strong>
                                    </div>
                                    @endif
                                    <div class="text-center">
                                        <img width="150" height="200" class="img-fluid mb-3" src="{{ asset('assets/img/logo.png') }}" alt="">
                                    </div>

                                    <h3 class="text-center font-weight-bold mb-3">PT. Mitsubishi Krama Yudha Motors and Manufacturing</h3>

                                    <div class="search-container">
                                        <input type="text" id="searchBox" class="search-box" placeholder="Search applications...">
                                    </div>

                                    <div class="location-title">General Application</div>
                                    <div class="row fade-in" id="generalApplication">
                                        <div class="col-md-6 col-lg-4 list-group-item text-center">
                                            <a target="_blank" href="http://172.17.210.227:8800/">
                                                <img width="40" height="220" class="img-fluid mb-2" src="{{ asset('assets/img/assets.png') }}" alt="">
                                                <p style="margin-top: -5px;margin-bottom:-5px">Asset Management</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 list-group-item text-center">
                                            <a target="_blank" href="http://172.17.210.227:7000/">
                                                <img width="40" height="220" class="img-fluid mb-2" src="{{ asset('assets/img/laptop.png') }}" alt="">
                                                <p style="margin-top: -5px;margin-bottom:-5px">QR Code Generator</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="location-title">Engine Plant</div>
                                    <div class="row fade-in" id="enginePlant">
                                        <div class="col-md-6 col-lg-4 list-group-item text-center">
                                            <a target="_blank" href="http://172.17.210.227:8080/">
                                                <img width="40" height="220" class="img-fluid mb-2" src="{{ asset('assets/img/pallet.png') }}" alt="">
                                                <p style="margin-top: -5px;margin-bottom:-5px">Pallet Tracing</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="location-title">Stamping Plant</div>
                                    <div class="row fade-in" id="stampingPlant">
                                        <div class="col-md-6 col-lg-4 list-group-item text-center">
                                            <a target="_blank" href="http://172.17.210.227:8888/">
                                                <img width="40" height="220" class="img-fluid mb-2" src="{{ asset('assets/img/chassis.png') }}" alt="">
                                                <p style="margin-top: -5px;margin-bottom:-5px">Checksheet SL-Frame</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-lg-4 list-group-item text-center">
                                            <a target="_blank" href="http://172.17.210.227:7070/">
                                                <img width="40" height="220" class="img-fluid mb-2" src="{{ asset('assets/img/checksheet.png') }}" alt="">
                                                <p style="margin-top: -5px;margin-bottom:-5px">Checksheet Preventive Maintenance</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small">Copyright PT Mitsubishi Krama Yudha Motors and Manufacturing &copy; 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', '/particles.json', function() {
        console.log('particles.js loaded - callback');
    });

        document.getElementById('searchBox').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('.list-group-item');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
