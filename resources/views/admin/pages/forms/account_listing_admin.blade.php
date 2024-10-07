<form action="{{ route('account_listings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="accountForm" class="form-container">
        <div style="margin: 10px">
            <div class="form-group">
                <label>Title | Account</label>
                <input class="form-control" name="title" placeholder="Name" type="text">
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
                        <input type="text" name="price" class="form-control"
                            aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 position-relative">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageUploadAccount" name="images[]"
                                multiple accept="image/*" onchange="validateImages(this)">
                            <label class="custom-file-label" for="imageUploadAccount">Choose Image (Up to
                                5)</label>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary" id="previewBtn" data-toggle="modal"
                                data-target="#previewModal" style="height: 50%;">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <input type="hidden" id="selectedFilesInputAccount" name="selectedFiles[]" multiple>
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
                    <select name="usage" class="form-control select2-no-search">
                        <option label="Choose one"></option>
                        <option value="Good for Main">Good for Main</option>
                        <option value="Good for Smurf">Good for Smurf</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <p class="mg-b-10">Type</p>
                    <select name="type" class="form-control select2-no-search">
                        <option label="Choose one"></option>
                        <option value="Heavy spender | Whale">Heavy spender |
                            Whale</option>
                        <option value="Light spender">Light spender</option>
                        <option value="Free to Play">Free to Play</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <p class="mg-b-10">Platform</p>
                    <select name="platform" class="form-control select2-no-search">
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
