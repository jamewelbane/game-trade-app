<!DOCTYPE html>
<html lang="en">

<head>
    {{-- google analytics --}}
    @include('admin.components.g_analytics')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GameTrade | Sell</title>

    {{-- header --}}
    @include('admin.layouts.header_admin')

</head>

@if (session('success'))
@else
    <!-- Preloader overlay -->
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

    {{-- Navigation bar --}}
    @include('admin.components.nav_admin')


    <div class="container">
        <div class="az-content-body">
            <div class="row row-sm mg-b-20">
                <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                    <div class="row row-sm">

                        <div class="card-body" style="padding: 20px">
                            <div class="head-account-list d-flex justify-content-between align-items-center">
                                <h2>Account Listing</h2>
                                <div class="dropdown">
                                    <button class="btn btn-indigo btn-block dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Items</a></li>
                                        <li><a class="dropdown-item" href="#">Services</a></li>
                                        <li><a class="dropdown-item" href="#">Sell</a></li>
                                        <li><a class="dropdown-item" href="#">Archived List</a></li>
                                    </ul>
                                </div>
                            </div>

                            

                            <div class="container-search-bar">
                                <input checked="" class="checkbox" type="checkbox">
                                <div class="mainbox">
                                    <div class="iconContainer">
                                        <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg"
                                            class="search_icon">
                                            <path
                                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input class="search_input" placeholder="search" id="myCustomSearchBox"
                                        type="text">
                                </div>
                            </div>

                            <div class="container-account-list">
                                <table id="account-list-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-account">
                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3 class="listing-title">Valorant Account For Sale</h3>
                                                    <p><i class="fas fa-tags"></i> NyZz09Iiwib</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Valorant</p>

                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3 class="listing-title">Max th15 account with skins</h3>
                                                    <p><i class="fas fa-tags"></i> NyZz09Iiwib</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Clash of Clans</p>

                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>BloxFruit With Perma Fruit</h3>
                                                    <p><i class="fas fa-tags"></i> Ny1511Iiwib</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Roblox</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>BloxFruit with Leopard</h3>
                                                    <p><i class="fas fa-tags"></i> NyZz214iwib</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Roblox</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>LOM EN100 58M Power</h3>
                                                    <p><i class="fas fa-tags"></i> asg25121</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Legend Of Mushroom</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>COC Max th16</h3>
                                                    <p><i class="fas fa-tags"></i> asa11124</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Clash of Clans</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Valorant Diamond 22 skins</h3>
                                                    <p><i class="fas fa-tags"></i> NyZz09Iiwib</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Valorant</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>GTAV Steam Account</h3>
                                                    <p><i class="fas fa-tags"></i> 1srsa314</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> GTAV</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Albion good stats</h3>
                                                    <p><i class="fas fa-tags"></i> wafs112</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Albion Online</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Ran account Good stats</h3>
                                                    <p><i class="fas fa-tags"></i> Swe2425</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> RAN Online</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Ark Survival Evolved Account</h3>
                                                    <p><i class="fas fa-tags"></i> RTsf15</p>
                                                    <p><i class="fas fa-money-bill-wave"></i> $100</p>
                                                    <p><i class="fas fa-gamepad"></i> Ark: Survival Evolved</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- az-content-body -->
            </div>
        </div>
    </div>


    {{-- footer --}}
    @include('admin.layouts.footer_admin')

    {{-- js include --}}
    @include('admin.components.js_inc_admin')

    {{-- Modal include --}}
    @include('admin.components.modals_admin')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            activateNavItem('mystore');

        });
    </script>

    <script>
        @if (session('success'))
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        @endif
    </script>

  


   



</body>

</html>
