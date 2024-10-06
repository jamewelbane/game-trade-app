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

<body>
    {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}


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
                                        <form action="{{ route('account_listings.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div id="accountForm" class="form-container">
                                                <div style="margin: 10px">
                                                    <div class="form-group">
                                                        <label>Title | Account</label>
                                                        <input class="form-control" name="title" placeholder="Name"
                                                            type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Item Description</label>
                                                        <textarea rows="3" name="description" class="form-control" placeholder="Description"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">₱</span>
                                                                </div>
                                                                <input type="text" name="price"
                                                                    class="form-control"
                                                                    aria-label="Amount (to the nearest dollar)">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 position-relative">
                                                            <div class="input-group mb-3">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="imageUpload" name="images[]" multiple accept="image/*" onchange="validateImages(this)">
                                                                    <label class="custom-file-label" for="imageUpload">Choose Image (Up to 5)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        

                                                    </div>
                                                    <div class="row row-sm mg-b-20">
                                                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                                            <p class="mg-b-10">Game</p>
                                                            <select name="game" class="form-control select2">
                                                                <option label="Choose one"></option>
                                                                <option value="Valorant">Valorant</option>
                                                                <option value="Roblox">Roblox</option>
                                                                <option value="Clash of Clans">Clash of Clans</option>
                                                                <option value="Mobile Legends">Mobile Legends</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p class="mg-b-10">Use</p>
                                                            <select name="usage"
                                                                class="form-control select2-no-search">
                                                                <option label="Choose one"></option>
                                                                <option value="Good for Main">Good for Main</option>
                                                                <option value="Good for Smurf">Good for Smurf</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p class="mg-b-10">Type</p>
                                                            <select name="type"
                                                                class="form-control select2-no-search">
                                                                <option label="Choose one"></option>
                                                                <option value="Heavy spender | Whale">Heavy spender |
                                                                    Whale</option>
                                                                <option value="Light spender">Light spender</option>
                                                                <option value="Free to Play">Free to Play</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p class="mg-b-10">Platform</p>
                                                            <select name="platform"
                                                                class="form-control select2-no-search">
                                                                <option label="Choose one"></option>
                                                                <option value="Desktop">Desktop</option>
                                                                <option value="Mobile">Mobile</option>
                                                                <option value="Both | Cross-platform">Both |
                                                                    Cross-platform</option>
                                                            </select>
                                                        </div>
                                                        
                                                    </div>
                                                    <button type="submit" class="btn btn-az-primary">Create Listing</button>
                                                </div>
                                            </div>

                                            
                                        </form>
                                        <div id="itemForm" class="form-container" style="display: none;">
                                            <div style="margin: 10px">
                                                <div class="form-group">
                                                    <label>Title | Item</label>
                                                    <input class="form-control" name="item_name" placeholder="Name"
                                                        type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Item Description</label>
                                                    <textarea rows="3" name="item_descript" class="form-control" placeholder="Description"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">₱</span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="imageUploadItem">
                                                                <label class="custom-file-label"
                                                                    for="imageUploadItem">Choose Image</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-sm mg-b-20">
                                                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                                        <p class="mg-b-10">Game</p>
                                                        <select class="form-control select2">
                                                            <option label="Choose one"></option>
                                                            <option value="Valorant">Valorant</option>
                                                            <option value="Roblox">Roblox</option>
                                                            <option value="Clash of Clans">Clash of Clans</option>
                                                            <option value="Mobile Legends">Mobile Legends</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p class="mg-b-10">Type</p>
                                                        <select class="form-control select2-no-search">
                                                            <option label="Choose one"></option>
                                                            <option value="In-game item">In-game item</option>
                                                            <option value="In-game currency">In-game currency</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

    <script>
        // Check if there's a success message in the session
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false,
            });
        @endif
    </script>

    {{-- footer --}}
    @include('admin.layouts.footer_admin')

    {{-- js include --}}
    @include('admin.components.js_inc_admin')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            activateNavItem('sell');
            activateNavItem('add-listing');
        });
    </script>

  <script>
    function validateImages(input) {
    const fileCount = input.files.length;
    const label = input.nextElementSibling; // Get the label element

    // Validate the number of uploaded images
    if (fileCount > 5) {
        alert("You can only upload a maximum of 5 images.");
        input.value = ''; // Clear the input
        label.textContent = 'Choose Image (Up to 5)'; // Reset label text
    } else {
        // Change the label based on the number of uploaded images
        label.textContent = `${fileCount} image${fileCount > 1 ? 's' : ''} uploaded`;
    }
}

  </script>

</body>

</html>
