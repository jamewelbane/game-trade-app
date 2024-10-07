// navigation active show
function activateNavItem(pageClass) {
   
    const navItem = document.querySelector(`.nav-item.${pageClass}`);
    const navLink = document.querySelector(`.nav-link.${pageClass}`);
    
    if (navItem) {

        navItem.classList.add('active', 'show');
    }
    
    if (navLink) {
    
        navLink.classList.add('active', 'show');
    }
}

// ------ Sweetalert ------ //
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});


// add item sliding tab
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggleButton');
    const sellingType = document.getElementById('sellingType');
    const accountForm = document.getElementById('accountForm');
    const itemForm = document.getElementById('itemForm');

    toggleButton.addEventListener('click', function() {
        const isAccountVisible = accountForm.style.display !== 'none';

        // Change selling type text and button text
        sellingType.innerText = isAccountVisible ? 'In-game Item' : 'Account';
        toggleButton.innerText = isAccountVisible ? 'Switch to Account' : 'Switch to Item';

        // Animate sliding
        if (isAccountVisible) {
            accountForm.classList.add('slide-out');
            itemForm.classList.add('slide-in');

            setTimeout(() => {
                accountForm.style.display = 'none';
                itemForm.style.display = 'block';
                accountForm.classList.remove('slide-out');
                itemForm.classList.remove('slide-in');
            }, 500);
        } else {
            itemForm.classList.add('slide-out');
            accountForm.classList.add('slide-in');

            setTimeout(() => {
                itemForm.style.display = 'none';
                accountForm.style.display = 'block';
                itemForm.classList.remove('slide-out');
                accountForm.classList.remove('slide-in');
            }, 500);
        }
    });
});

// add item tab button

document.addEventListener('DOMContentLoaded', function() {
    const headerElement = document.querySelector('.az-content-header-right');

    function checkWidth() {
        if (window.innerWidth <= 991) {
            headerElement.classList.remove('az-content-header-right');
            headerElement.classList.add('az-content-header-left');
        } else {
            headerElement.classList.remove('az-content-header-left');
            headerElement.classList.add('az-content-header-right');
        }
    }

    // Run on initial load
    checkWidth();

    // event listener for window resize
    window.addEventListener('resize', checkWidth);
});



//-------- For new_item_admin.blade.php --------- //
// js to handle upload image validation and functions
let selectedFiles = [];

// Function to validate images for account listing
function validateImages(input) {
    const newFiles = Array.from(input.files); // Get newly selected files
    const totalFiles = selectedFiles.length;

    const validImageTypes = ['image/jpeg', 'image/png', 'image/jpg']; // Valid image MIME types

    // Filter out invalid files
    const validFiles = newFiles.filter(file => validImageTypes.includes(file.type));

    // Check if valid files exceed the limit (5)
    if (totalFiles + validFiles.length > 5) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'You can only upload up to 5 images!',
        });
        // Only keep the files that fit within the limit
        const filesToAdd = validFiles.slice(0, 5 - totalFiles);
        selectedFiles = selectedFiles.concat(filesToAdd);
    } else {
        // Add all valid files to the selectedFiles array
        selectedFiles = selectedFiles.concat(validFiles);
    }

    // Update the input field without clearing it
    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file)); // Add valid files to DataTransfer
    input.files = dataTransfer.files; // Update the input file list

    // Update the label to show the number of selected images
    document.querySelector('.custom-file-label').textContent = `Selected ${selectedFiles.length} images`;

    // Display images in the modal
    displayImagesInModal();
    
    // If there were invalid files, notify the user
    if (validFiles.length !== newFiles.length) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid File Type',
            text: 'Only JPEG, JPG, and PNG files are allowed. Others are not supported!',
        });
    }
}


// Function to update the input field with the current files
function updateInputField() {
    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));
    const inputField = document.getElementById('imageUploadAccount');
    inputField.files = dataTransfer.files; // Update the input field's files
}

// Function to display selected images in the modal
function displayImagesInModal() {
    const imagePreviewContainer = document.getElementById('imagePreviewContainer');
    imagePreviewContainer.innerHTML = ''; // Clear previous content

    if (selectedFiles.length == 0) {
        Swal.fire({
            icon: 'info',
            title: 'No images selected',
            text: 'Please select images to preview.',
        });
        return;
    }

    selectedFiles.forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            // Create image preview element
            const imageElement = document.createElement('div');
            imageElement.classList.add('col-md-4', 'mb-3');
            imageElement.innerHTML = `
        <div class="card">
            <img src="${e.target.result}" class="card-img-top" alt="Image Preview">
            <div class="card-body text-center">
                <button type="button" class="btn btn-danger btn-sm" onclick="removeImage(${index})">Remove</button>
            </div>
        </div>
    `;
            imagePreviewContainer.appendChild(imageElement);
        };
        reader.readAsDataURL(file); // Convert file to base64 string for preview
    });
}

// Function to remove image from the selected files list
function removeImage(index) {
    selectedFiles.splice(index, 1); // Remove the file from the array
    updateInputField(); // Update the file input with the current selected files
    document.querySelector('.custom-file-label').textContent = `Selected ${selectedFiles.length} images`;
    displayImagesInModal(); // Update the preview
}


// validatate item
let selectedFileItem = null;

// Function to validate image for the item listing (only one image allowed)
function validateImageItem(input) {
    const file = input.files[0];
    const validImageTypes = ['image/jpeg', 'image/png', 'image/jpg'];

    const label = document.querySelector('.custom-file-label[for="imageUploadItem"]');

    // Check if the file is a valid image type
    if (file) {
        if (!validImageTypes.includes(file.type)) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid File Type',
                text: 'Only JPEG, JPG, and PNG files are allowed. Others are not supported!',
            });
            input.value = ''; // Reset the input
            selectedFileItem = null; // Clear the selected file
            updatePlaceholderItem(label); // Update the placeholder
            clearImagePreviewItem(); // Clear the image preview
            return;
        }

        // Store the valid image
        selectedFileItem = file;
        label.textContent = file.name; // Update the label

        // Display the image in the preview modal
        displayImageInModalItem();
    } else {
        // No file selected, reset the preview and label
        selectedFileItem = null; // Clear the selected file
        updatePlaceholderItem(label); // Update the placeholder
        clearImagePreviewItem(); // Clear the image preview
    }
}

// Function to update the placeholder text for item image input
function updatePlaceholderItem(label) {
    label.textContent = selectedFileItem ? selectedFileItem.name : 'Choose Image (Only 1)';
}

// Function to clear the image preview for item image input
function clearImagePreviewItem() {
    const imagePreviewContainer = document.getElementById('imagePreviewContainerItem');
    imagePreviewContainer.innerHTML = ''; // Clear previous content
}

// Function to display selected image in the modal for item image input
function displayImageInModalItem() {
    const imagePreviewContainer = document.getElementById('imagePreviewContainerItem');
    imagePreviewContainer.innerHTML = ''; // Clear previous content

    if (!selectedFileItem) {
        return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
        const imageElement = document.createElement('div');
        imageElement.classList.add('col-md-12', 'mb-3');
        imageElement.innerHTML = `
            <div class="card">
                <img src="${e.target.result}" class="card-img-top" alt="Image Preview">
            </div>
        `;
        imagePreviewContainer.appendChild(imageElement);
    };
    reader.readAsDataURL(selectedFileItem); // Convert file to base64 string for preview
}
// validatate item end





