<!DOCTYPE html>
<html lang="en">

<head>

    {{-- google analytics --}}
    @include('admin.components.g_analytics')


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>GameTrade | Sell Item</title>

    {{-- header --}}
    @include('admin.layouts.header_admin')


</head>



@if (session('success') || $errors->has('images.*'))
@else
    @include('admin.layouts.preloader')
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
                                            <h6 class="card-title">Create Item Listing</h6>
                                            <p class="card-text">Please note that only image with up to 1024 KB
                                                is allowed
                                            </p>
                                        </div>
                                        <div class="az-content-header-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <label>Selling Type</label>
                                                    <h6>Item | Coin</h6>
                                                </div>
                                            </div>
                                            <button id="toggleButton"
                                                onclick="window.location.href='/new-listing-account'"
                                                class="btn btn-purple">Switch to Account</button>
                                        </div>
                                    </div>

                                    <div class="card-body">


                                        {{-- Account listing form --}}
                                        @include('admin.pages.forms.item_listing_form')


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
        document.addEventListener("DOMContentLoaded", function() {
            activateNavItem('sell');
            activateNavItem('add-listing');
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

    <script>
        @if ($errors->has('images.*'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "Image must not exceed 1024 KB",
                showConfirmButton: true,
            });
        @endif
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
