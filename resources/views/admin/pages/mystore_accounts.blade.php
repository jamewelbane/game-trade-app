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
        .card-box {
            margin-top: 30px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .view-btn,
        .delete-btn {
            width: 100%;
        }

        @media (min-width: 576px) {

            .view-btn,
            .delete-btn {
                width: auto;
                

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
                        <div class="col-sm-12 mg-t-20">

                            <div class="card card-box">
                                <div class="card-body" style="padding: 20px">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6>Account Listing</h6>
                                        <!-- Dropdown button -->
                                        <div class="dropdown">
                                            <button class="btn btn-indigo btn-block dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Options
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Items</a></li>
                                                <li><a class="dropdown-item" href="#">Services</a></li>
                                                <li><a class="dropdown-item" href="#">Sell</a></li>
                                            </ul>
                                        </div>
                                    </div>




                                    <!-- Responsive table with horizontal scroll -->
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Game</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Item A</td>
                                                    <td>Valorant</td>
                                                    <td>In-game item</td>
                                                    <td>₱100</td>
                                                    <td>
                                                        <div class="d-flex flex-wrap justify-content-center">
                                                            <button class="view-btn btn btn-indigo btn-rounded m-1">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button class="delete-btn btn btn-danger btn-rounded m-1">
                                                                <i class="fas fa-trash-alt"></i> Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Item B</td>
                                                    <td>Roblox</td>
                                                    <td>In-game currency</td>
                                                    <td>₱150</td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Item C</td>
                                                    <td>Clash of Clans</td>
                                                    <td>In-game item</td>
                                                    <td>₱200</td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Item D</td>
                                                    <td>Mobile Legends</td>
                                                    <td>In-game currency</td>
                                                    <td>₱250</td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- card-body -->
                            </div>
                        </div><!-- col -->
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
            $('#myTable').DataTable({

                responsive: true,
                scrollX: true, // Enable horizontal scroll for responsiveness
                autoWidth: false, // Disable auto-width to manage table layout properly

                language: {
                    search: "Filter records:"
                }
            });
        });
    </script>
</body>

</html>
