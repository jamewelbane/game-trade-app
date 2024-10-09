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
                                            <h6 class="card-title">New Listing</h6>
                                            <p class="card-text">Please note that only images with up to 2MB are allowed
                                            </p>
                                        </div>
                                        <div class="az-content-header-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <label>Selling Type</label>
                                                    <h6 id="sellingType">Account</h6>
                                                </div>
                                            </div>
                                            <button id="toggleButton" class="btn btn-purple">Switch to Item</button>
                                        </div>
                                    </div>

                                    <div class="card-body" id="formContainer">

                                        {{-- Account listing form --}}
                                        @include('admin.pages.forms.account_listing_admin')

                                        {{-- Item listing form --}}
                                        @include('admin.pages.forms.item_listing_admin')

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
            activateNavItem('sell');
            activateNavItem('add-listing');
        });
    </script>


</body>

</html>
