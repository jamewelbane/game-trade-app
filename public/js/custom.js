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