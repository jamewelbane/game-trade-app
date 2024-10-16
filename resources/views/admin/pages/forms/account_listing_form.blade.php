<form action="{{ route('account_listings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="accountForm" class="form-container">
        <div style="margin: 10px">
            <div class="form-group">
                <label>Title | Account</label>
                <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Name"
                    type="text" value="{{ old('title') }}" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Item Description</label>
                <textarea rows="3" name="description" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Description" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row row-sm mg-b-20">
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">₱</span>
                        </div>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                            aria-label="Amount (to the nearest dollar)" value="{{ old('price') }}" required>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>

                    </div>
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                        <select name="negotiable"
                            class="form-control select2 @error('negotiable') is-invalid @enderror">
                            <option label="Is this negotiable?" {{ old('negotiable') == null ? 'selected' : '' }}
                                required>
                            </option>
                            <option value="0" {{ old('negotiable') == '0' ? 'selected' : '' }}>No</option>
                            <option value="1" {{ old('negotiable') == '1' ? 'selected' : '' }}>Yes</option>
                        </select>

                    </div>
                    @error('negotiable')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file"
                                class="custom-file-input @error('images') is-invalid @enderror @error('images.*') is-invalid @enderror"
                                id="imageUploadAccount" name="images[]" multiple accept="image/*"
                                onchange="validateImages(this)" required>
                            <label class="custom-file-label" for="imageUploadAccount">Choose Image (Up to 5)</label>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary" id="previewBtn" data-toggle="modal"
                                data-target="#previewModal" style="height: 50%;" required>
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <input type="hidden" id="selectedFilesInputAccount" name="selectedFiles[]" multiple>
                    </div>
                    @error('images.*')
                        <span class="text-danger">One of your image exceeds the size limit of 1024 KB</span>
                    @enderror
                    @error('images')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="row row-sm mg-b-20">
                <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                    <p class="mg-b-10">Game</p>
                    <select name="game" class="form-control select2 @error('game') is-invalid @enderror" required>
                        <option label="Choose one"></option>
                        <option value="Valorant" {{ old('game') == 'Valorant' ? 'selected' : '' }}>Valorant</option>
                        <option value="Roblox" {{ old('game') == 'Roblox' ? 'selected' : '' }}>Roblox</option>
                        <option value="Clash of Clans" {{ old('game') == 'Clash of Clans' ? 'selected' : '' }}>Clash of
                            Clans</option>
                        <option value="Mobile Legends" {{ old('game') == 'Mobile Legends' ? 'selected' : '' }}>Mobile
                            Legends</option>
                    </select>
                    @error('game')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <p class="mg-b-10">Use</p>
                    <select name="usage" class="form-control select2-no-search @error('usage') is-invalid @enderror"
                        required>
                        <option label="Choose one"></option>
                        <option value="Good for Main" {{ old('usage') == 'Good for Main' ? 'selected' : '' }}>Good for
                            Main</option>
                        <option value="Good for Smurf" {{ old('usage') == 'Good for Smurf' ? 'selected' : '' }}>Good
                            for Smurf</option>
                    </select>
                    @error('usage')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <p class="mg-b-10">Type</p>
                    <select name="type" class="form-control select2-no-search @error('type') is-invalid @enderror"
                        required>
                        <option label="Choose one"></option>
                        <option value="Heavy spender | Whale"
                            {{ old('type') == 'Heavy spender | Whale' ? 'selected' : '' }}>Heavy spender | Whale
                        </option>
                        <option value="Light spender" {{ old('type') == 'Light spender' ? 'selected' : '' }}>Light
                            spender</option>
                        <option value="Free to Play" {{ old('type') == 'Free to Play' ? 'selected' : '' }}>Free to
                            Play
                        </option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <p class="mg-b-10">Platform</p>
                    <select name="platform"
                        class="form-control select2-no-search @error('platform') is-invalid @enderror" required>
                        <option label="Choose one"></option>
                        <option value="Desktop" {{ old('platform') == 'Desktop' ? 'selected' : '' }}>Desktop</option>
                        <option value="Mobile" {{ old('platform') == 'Mobile' ? 'selected' : '' }}>Mobile</option>
                        <option value="Both | Cross-platform"
                            {{ old('platform') == 'Both | Cross-platform' ? 'selected' : '' }}>Both | Cross-platform
                        </option>
                    </select>
                    @error('platform')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-az-primary">Create Listing</button>
        </div>
    </div>
</form>
