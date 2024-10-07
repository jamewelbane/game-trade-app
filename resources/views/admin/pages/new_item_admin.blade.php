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
                                                                    <input type="file" class="custom-file-input"
                                                                        id="imageUploadAccount" name="images[]" multiple
                                                                        accept="image/*"
                                                                        onchange="validateImages(this)">
                                                                    <label class="custom-file-label"
                                                                        for="imageUploadAccount">Choose Image (Up to
                                                                        5)</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        id="previewBtn" data-toggle="modal"
                                                                        data-target="#previewModal"
                                                                        style="height: 50%;">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="hidden" id="selectedFilesInputAccount"
                                                                    name="selectedFiles[]" multiple>
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
                                                    <button type="submit" class="btn btn-az-primary">Create
                                                        Listing</button>
                                                </div>
                                            </div>


                                        </form>

                                        {{-- Item listing form --}}
                                        <form action="{{ route('item_listings.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div id="itemForm" class="form-container" style="display: none;">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div style="margin: 10px">
                                                    <div class="form-group">
                                                        <label>Title | Item</label>
                                                        <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Name" type="text" required>
                                                        @error('title')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Item Description</label>
                                                        <textarea rows="3" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" required></textarea>
                                                        @error('description')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">₱</span>
                                                                </div>
                                                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" aria-label="Amount (to the nearest peso)" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                                @error('price')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 position-relative">
                                                            <div class="input-group mb-3">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input @error('images.*') is-invalid @enderror" id="imageUploadItem" name="images[]" accept="image/*" onchange="validateImageItem(this)" required>
                                                                    <label class="custom-file-label" for="imageUploadItem">Choose Image (Only 1)</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-secondary" id="previewBtnItem" data-toggle="modal" data-target="#previewModalItem" style="height: 50%;">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="hidden" id="selectedFilesInputItem" name="selectedFiles[]" multiple>
                                                                @error('images.*')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-sm mg-b-20">
                                                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                                            <p class="mg-b-10">Game</p>
                                                            <select name="game" class="form-control select2 @error('game') is-invalid @enderror" required>
                                                                <option label="Choose one"></option>
                                                                <option value="Valorant">Valorant</option>
                                                                <option value="Roblox">Roblox</option>
                                                                <option value="Clash of Clans">Clash of Clans</option>
                                                                <option value="Mobile Legends">Mobile Legends</option>
                                                            </select>
                                                            @error('game')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p class="mg-b-10">Type</p>
                                                            <select name="type" class="form-control select2-no-search @error('type') is-invalid @enderror" required>
                                                                <option label="Choose one"></option>
                                                                <option value="In-game item">In-game item</option>
                                                                <option value="In-game currency">In-game currency</option>
                                                            </select>
                                                            @error('type')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        



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
