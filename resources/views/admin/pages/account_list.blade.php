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

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">


    <style>
        .head-account-list {
            margin-top: 20px;

        }


        .container-account-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;


        }

        .card-account-list {

            float: left;
            width: 330px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            display: block;
            vertical-align: top;
        }



        .tbody-account {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping */
            justify-content: flex-start;
            /* Align to the left */
        }

        .card-account-list h3 {
            margin-bottom: 10px;
        }

        .card-account-list p {
            margin-bottom: 10px;
        }

        /* Align the search bar to the rightmost side of the table */
        .dataTables_wrapper .dataTables_filter {
            text-align: right;
            /* Aligns the search bar to the right */
            float: right;
            /* Ensures it stays on the right */
            width: 100%
        }

        .dropdown {
            margin-bottom: 10px;
        }


        /* searchbar */
        .container-search-bar {
            position: relative;
            box-sizing: border-box;
            width: fit-content;
        }

        .mainbox {
            box-sizing: border-box;
            position: relative;
            width: 230px;
            height: 50px;
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: center;
            border-radius: 160px;
            background-color: #5a47f8;
            transition: all 0.3s ease;
        }

        .checkbox:focus {
            border: none;
            outline: none;
        }

        .checkbox:checked {
            right: 10px;
        }

        .checkbox:checked~.mainbox {
            width: 50px;
        }

        .checkbox:checked~.mainbox .search_input {
            width: 0;
            height: 0px;
        }

        .checkbox:checked~.mainbox .iconContainer {
            padding-right: 22%;
        }

        .checkbox {
            box-sizing: border-box;
            width: 30px;
            height: 30px;
            position: absolute;
            right: 17px;
            top: 10px;
            z-index: 9;
            cursor: pointer;
            appearance: none;
        }

        .search_input {
            box-sizing: border-box;
            height: 100%;
            width: 170px;
            background-color: transparent;
            border: none;
            outline: none;
            padding-bottom: 4px;
            padding-left: 10px;
            font-size: 1em;
            color: white;
            transition: all 0.3s ease;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .search_input::placeholder {
            color: rgba(255, 255, 255, 0.776);
        }



        .search_icon {
            box-sizing: border-box;
            fill: white;
            font-size: 1.3em;
            /* margin-right: 2px; */
        }









        @media (max-width: 1199px) {
            .card-account-list {
                width: 410px;
            }


        }


        @media (max-width: 991px) {
            .card-account-list {
                width: 96%;

            }

            .group {
                max-width: none;
            }

            .card-row {
                width: 100%;
                /* border: 1px solid black; */
            }

            .card-td {
                width: 100%;
                display: block;
            }


        }
    </style>

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

                            {{-- <div class="group">
                                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                    <g>
                                        <path
                                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                        </path>
                                    </g>
                                </svg>
                                <input placeholder="Search" type="search" class="input" id="myCustomSearchBox">
                            </div> --}}

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
                                                    <h3>Valorant</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Clash of clans</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>One</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>two</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>three</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>four</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Five</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Honey</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Gourd</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Cheese</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="card-row">
                                            <td class="card-td">
                                                <div class="card-account-list">
                                                    <h3>Cake</h3>
                                                    <p>Item details</p>
                                                    <button class="btn btn-indigo btn-rounded">View details</button>
                                                </div>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                            <!-- pagination controls will be generated by DataTables -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

    <!-- Make DataTable responsive with horizontal scroll -->


    <script>
        $(document).ready(function() {
            // Initialize the DataTable and store it in a variable
            var dTable = $('#account-list-table').DataTable({
                "info": false,
                "lengthChange": false,
                "pageLength": 6,
                "ordering": false,
                "dom": "lrtip", // Remove the default search box
                language: {
                    searchPlaceholder: "Search listing",
                    search: "",
                }
            });

            // Custom search box functionality
            $('#myCustomSearchBox').on('keyup', function() {
                dTable.search($(this).val()).draw(); // Use the stored DataTable reference
            });
        });
    </script>

    <script>
        const myDiv = document.getElementById('account-list-table');

        // Get the width and height in pixels
        const divWidth = myDiv.clientWidth; // Includes padding, but not border or margin
        const divHeight = myDiv.clientHeight; // Includes padding, but not border or margin

        console.log(`Width: ${divWidth}px, Height: ${divHeight}px`);
    </script>


</body>

</html>
