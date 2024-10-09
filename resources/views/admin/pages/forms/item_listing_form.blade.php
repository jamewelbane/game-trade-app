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
                <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Name"
                    type="text" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Item Description</label>
                <textarea rows="3" name="description" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Description" required></textarea>
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
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                            aria-label="Amount (to the nearest peso)" required>
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
                            <input type="file" class="custom-file-input @error('images.*') is-invalid @enderror"
                                id="imageUploadItem" name="images[]" accept="image/*" onchange="validateImageItem(this)"
                                required>
                            <label class="custom-file-label" for="imageUploadItem">Choose Image (Only 1)</label>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary" id="previewBtnItem" data-toggle="modal"
                                data-target="#previewModalItem" style="height: 50%;">
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
                    <select name="type" class="form-control select2-no-search @error('type') is-invalid @enderror"
                        required>
                        <option label="Choose one"></option>
                        <option value="In-game item">Item</option>
                        <option value="In-game currency">Coins | Currency</option>

                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-az-primary">Create Listing</button>
        </div>
    </div>
</form>
