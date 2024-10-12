<!DOCTYPE html>
<html lang="en">

<head>

    {{-- google analytics --}}
    @include('admin.components.g_analytics')


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>GameTrade | MyStore</title>

    {{-- header --}}
    @include('admin.layouts.header_admin')

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        .container-inventory-selection {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            width: 100%;
            padding: 20px;

        }

        .card {
            cursor: pointer;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            text-align: center;
            flex: 1 1 calc(30% - 40px);
            /* Adjusts size for three cards */
            transition: transform 0.3s;
            width: 100%
        }

        .card:hover {
            transform: scale(1.05);
        }

        .icon {
            font-size: 40px;
            /* Adjust icon size */
            margin-bottom: 10px;
        }

        h3 {
            font-size: 20px;
            margin: 0;
        }


        .container-tagline {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero {
            background-color: #ffffff;
            padding: 50px 20px;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            line-height: 1.3;
            color: #333;
            font-weight: bold;
        }

        .hero-content h1 span {
            background: linear-gradient(90deg, hsla(225, 100%, 60%, 1) 0%, hsla(206, 67%, 75%, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


        .hero-content .rating {
            margin-top: 10px;
            font-size: 1rem;
            color: #777;
        }



        /* Responsive Styles */


        @media (max-width: 991px) {
            .card {
                flex: 1 1 100%;
                /* One card per row */
            }
        }
    </style>
</head>


@if (session('success'))
@else
    <!-- Preloader overlay -->
    {{-- <div class="overlay" id="preloader">
        <l-quantum size="100" speed="1.75" color="#3366ff"></l-quantum>
    </div> --}}

    <div id="preloader">
        <div class="loading-wave">
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
        </div>
    </div>
@endif



<body>

    @php
    // Encrypt the string you want to use in the URL
    $urlAccountList = Crypt::encrypt('accounts');
    $urlItemsList = Crypt::encrypt('items-coins');
    $urlServicesList = Crypt::encrypt('services');
    @endphp

    {{-- Navigation bar --}}
    @include('admin.components.nav_admin')

    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <div class="row row-sm mg-b-20">
                    <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">

                            <section class="hero">
                                <div class="container-tagline">
                                    <div class="hero-content">
                                        <h1><span>Boost your sales</span> with confidence! <span>Backed</span> by a
                                            trusted <span>midman</span> <span>🔥</span></h1>
                                        <p class="rating">Excellent <strong>5.0</strong> out of 5.0 <span
                                                class="trustpilot">★ Trustpilot</span></p>
                                        <div class="emoji">

                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="container-inventory-selection">
                                <div class="card" onclick="window.location.href='/mystore/{{ $urlAccountList }}'">
                                    <div class="icon">👤</div>
                                    <h3>Accounts</h3>
                                </div>

                                <div class="card">
                                    <div class="icon">📦</div>
                                    <h3>Items & Coins</h3>
                                </div>
                                <div class="card">
                                    <div class="icon">⚙️</div>
                                    <h3>Services</h3>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!-- az-content-body -->
                </div>
            </div>
        </div>
    </div>

    </div><!-- az-content -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    {{-- footer --}}
    @include('admin.layouts.footer_admin')

    {{-- js include --}}
    @include('admin.components.js_inc_admin')

    {{-- Modal include --}}
    @include('admin.components.modals_admin')

    <script>
        @if (session('success'))
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        @endif
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            activateNavItem('mystore');

        });
    </script>


</body>

</html>
