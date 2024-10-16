// ------ navigation active show ------ //
function activateNavItem(pageClass) {
    const navItem = document.querySelector(`.nav-item.${pageClass}`);
    const navLink = document.querySelector(`.nav-link.${pageClass}`);

    if (navItem) {
        navItem.classList.add("active", "show");
    }

    if (navLink) {
        navLink.classList.add("active", "show");
    }
}

// ------ navigation active show END ------ //

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
    },
});


// ------ Sweetalert END ------ //


// ------ Get element size ------ //
// const myDiv = document.getElementById("account-list-table");

// // Get the width and height in pixels
// const divWidth = myDiv.clientWidth; // Includes padding, but not border or margin
// const divHeight = myDiv.clientHeight; // Includes padding, but not border or margin

// console.log(`Width: ${divWidth}px, Height: ${divHeight}px`);
// ------ Get element size END ------ //
