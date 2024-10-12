<form action="{{ route('item_listings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="itemForm" class="form-container" style="display: none;">
        
        <div style="margin: 10px">
            <div class="form-group">
                <label>Title | Item</label>
                <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Name" type="text" required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Item Description</label>
                <textarea rows="3" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">₱</span>
                        </div>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" aria-label="Amount (to the nearest peso)" required value="{{ old('price') }}">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <select name="negotiable" class="form-control select2">
                            <option label="Is this negotiable?" {{ old('negotiable') == null ? 'selected' : '' }}></option>
                            <option value="0" {{ old('negotiable') == '0' ? 'selected' : '' }}>No</option>
                            <option value="1" {{ old('negotiable') == '1' ? 'selected' : '' }}>Yes</option>
                        </select>
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
                            <span class="text-danger">One of your image exceed the size limit of 1024 KB</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row row-sm mg-b-20">
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <p class="mg-b-10">Game</p>
                    <select name="game" class="form-control select2 @error('game') is-invalid @enderror" required>
                        <option label="Choose one" {{ old('game') == null ? 'selected' : '' }}></option>
                        <option value="Valorant" {{ old('game') == 'Valorant' ? 'selected' : '' }}>Valorant</option>
                        <option value="Roblox" {{ old('game') == 'Roblox' ? 'selected' : '' }}>Roblox</option>
                        <option value="Clash of Clans" {{ old('game') == 'Clash of Clans' ? 'selected' : '' }}>Clash of Clans</option>
                        <option value="Mobile Legends" {{ old('game') == 'Mobile Legends' ? 'selected' : '' }}>Mobile Legends</option>
                    </select>
                    @error('game')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <p class="mg-b-10">Type</p>
                    <select name="type" class="form-control select2-no-search @error('type') is-invalid @enderror" required>
                        <option label="Choose one" {{ old('type') == null ? 'selected' : '' }}></option>
                        <option value="In-game item" {{ old('type') == 'In-game item' ? 'selected' : '' }}>Item</option>
                        <option value="In-game currency" {{ old('type') == 'In-game currency' ? 'selected' : '' }}>Coins | Currency</option>
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
