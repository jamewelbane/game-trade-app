// Preloader 1 script
// window.addEventListener("DOMContentLoaded", function () {
//     var preloader = document.getElementById("preloader");

//     // Immediately disable scrolling
//     document.body.classList.add("loading");
//     document.documentElement.classList.add("loading");

//     // Show preloader
//     preloader.style.opacity = "1";
// });

// window.addEventListener("load", function () {
//     var preloader = document.getElementById("preloader");

//     setTimeout(function () {
//         preloader.style.opacity = "0";
//         setTimeout(function () {
//             preloader.style.display = "none";

//             // Re-enable scrolling
//             document.body.classList.remove("loading");
//             document.documentElement.classList.remove("loading");
//         }, 500);
//     }, 500);
// });

// preloader 2
//   Disable scroll while preloader is active

const preloader = document.getElementById("preloader");
if (preloader) {
    document.body.classList.add("preloader-active");

    // Hide preloader after page load
    window.addEventListener("load", function () {
        setTimeout(function () {
            preloader.classList.add("hidden"); // Start fade out

            setTimeout(function () {
                preloader.style.display = "none"; // Hide preloader
                document.body.classList.remove("preloader-active"); // Enable scroll
            }, 500);
        }, 1000);
    });
}
