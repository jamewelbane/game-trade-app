// navigation active show
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







