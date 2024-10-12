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



@if (session('success') || $errors->has('images.*'))
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
                                            <p class="card-text">Please note that only images with up to 1MB or 1024KB
                                                are allowed
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
                                        @include('admin.pages.forms.account_listing_form')

                                        {{-- Item listing form --}}
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check localStorage for the last active form
            const lastActiveForm = localStorage.getItem('activeForm');

            if (lastActiveForm) {
                // Hide both forms
                document.getElementById('accountForm').style.display = 'none';
                document.getElementById('itemForm').style.display = 'none';

                // Show the last active form
                document.getElementById(lastActiveForm).style.display = 'block';
            }

            // Event listeners for switching forms
            document.getElementById('toggleButton').addEventListener('click', function() {
                const accountForm = document.getElementById('accountForm');
                const itemForm = document.getElementById('itemForm');

                // Toggle visibility
                if (accountForm.style.display === 'none') {
                    accountForm.style.display = 'block';
                    itemForm.style.display = 'none';
                    localStorage.setItem('activeForm', 'accountForm'); // Store active form
                } else {
                    accountForm.style.display = 'none';
                    itemForm.style.display = 'block';
                    localStorage.setItem('activeForm', 'itemForm'); // Store active form
                }
            });
        });
    </script>

</body>

</html>
