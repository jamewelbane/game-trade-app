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



    {{-- Navigation bar --}}
    @include('admin.components.nav_admin')

    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <div class="row row-sm mg-b-20">
                    <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">

                            <div class="col-sm-12 mg-t-20">
                                <div class="card card-dashboard-one">
                                    <div class="card-header">

                                        <div>
                                            <h6 class="card-title">Account listing</h6>

                                        </div>

                                    </div>

                                        <div class="card-body" style="padding: 20px">
                                            <table id="myTable" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Game</th>
                                                        <th>Type</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Item A</td>
                                                        <td>Valorant</td>
                                                        <td>In-game item</td>
                                                        <td>₱100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Item B</td>
                                                        <td>Roblox</td>
                                                        <td>In-game currency</td>
                                                        <td>₱150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Item C</td>
                                                        <td>Clash of Clans</td>
                                                        <td>In-game item</td>
                                                        <td>₱200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Item D</td>
                                                        <td>Mobile Legends</td>
                                                        <td>In-game currency</td>
                                                        <td>₱250</td>
                                                    </tr>
                                                </tbody>
                                            </table>
      
                                    </div><!-- card-body -->
                                </div><!-- card -->
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- az-content-body -->
                </div>
            </div>
        </div>
    </div>

    </div><!-- az-content -->


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
 <!-- Include jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Include DataTables CSS -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

 <!-- Include DataTables JS -->
 <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>
