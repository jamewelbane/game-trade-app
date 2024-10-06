<style>
 /* Full-screen white background for search popup */
/* Full-screen white background for search popup */
.search-popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw; /* Ensure full width */
  height: 100vh; /* Ensure full height */
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center; /* Center vertically */
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
  padding: 20px;
  z-index: 9999; /* Ensure it stays on top */
}

/* Search container centered */
.search-container {
  position: relative;
  width: 80%;
  max-width: 600px;
  text-align: center;
  padding: 30px;
  margin: 0 auto; /* Center horizontally */
}

/* Close (X) icon */
.close-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  cursor: pointer;
  color: black;
}

/* Description above search line */
.search-container p {
  font-size: 18px;
  margin-bottom: 10px;
  color: #555;
}

/* Simple line input with updated color */
.search-line {
  border: none;
  border-bottom: 2px solid #3366ff; /* Line color */
  width: 100%;
  padding: 10px 0;
  font-size: 18px;
  outline: none;
  margin-bottom: 20px;
  color: #3366ff; /* Text color */
}

/* Search button with updated color */
.search-btn {
  padding: 10px 20px;
  background-color: #3366ff; /* Button color */
  border: none;
  color: white;
  cursor: pointer;
  border-radius: 5px;
  margin-top: 20px;
}

/* Show the popup */
.search-popup.show {
  opacity: 1;
  pointer-events: auto;
}

/* Responsive adjustments for screen width up to 991px */
@media screen and (max-width: 991px) {
  .search-container {
    width: 90%; /* Adjust width for smaller screens */
    padding: 20px; /* Reduce padding */
  }

  .search-popup {
    padding: 10px; /* Reduce overall padding to fit better */
    height: 100vh; /* Ensure full height coverage on smaller screens */
  }

  .close-icon {
    font-size: 20px; /* Adjust close icon size */
    top: 15px; /* Adjust positioning */
    right: 15px;
  }

  .search-line {
    font-size: 16px; /* Adjust input text size */
  }

  .search-container p {
    font-size: 16px; /* Adjust description font size */
  }

  .search-btn {
    margin-top: 15px; /* Adjust button spacing */
    padding: 8px 18px; /* Slightly smaller padding */
  }
}


</style>

<div class="az-header">
    <div class="container">
        <div class="az-header-left">
            <a href="index.html" class="az-logo"><span></span> azia</a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="index.html" class="az-logo"><span></span> azia</a>
                <a href="" class="close">&times;</a>
            </div><!-- az-header-menu-header -->
            <ul class="nav">
                <li class="nav-item active show">
                    <a href="index.html" class="nav-link"><i class="fas fa-tachometer-alt"></i>&nbsp Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="fas fa-store"></i>&nbsp Store</a>
                    <nav class="az-menu-sub">
                        <a href="{{ asset('page-signin.html') }}" class="nav-link">Accounts</a>
                        <a href="page-signup.html" class="nav-link">Items/Currency</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="chart-chartjs.html" class="nav-link"><i class="fas fa-tags"></i>&nbsp Sell</a>
                </li>
                <li class="nav-item">
                    <a href="form-elements.html" class="nav-link"><i class="fas fa-gavel"></i>&nbsp Auction</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="fas fa-users"></i>&nbsp Community</a>
                    <div class="az-menu-sub">
                        <div class="container">
                            <div>
                                <nav class="nav">
                                    <a href="elem-buttons.html" class="nav-link">What's New?</a>
                                    <a href="elem-dropdown.html" class="nav-link">Safe Trading Guide</a>
                                    <a href="elem-icons.html" class="nav-link">Customer Service</a>

                                </nav>
                            </div>
                        </div><!-- container -->
                    </div>
                </li>
            </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
            {{-- <a href="https://www.bootstrapdash.com/demo/azia-free/docs/documentation.html" target="_blank" class="az-header-search-link"><i class="far fa-file-alt"></i></a> --}}
            <a href="javascript:void(0);" class="az-header-search-link" id="search-icon">
                <i class="fas fa-search"></i>
            </a>

            <div class="search-popup" id="search-popup">
                <div class="search-container">
                    <span class="close-icon" id="close-icon">&times;</span>
                    <p>Enter Keyword</p>
                    <input type="text" placeholder="Type your search..." class="search-line" />
                    <button class="search-btn">Search</button>
                </div>
            </div>


            <div class="az-header-message">
                <a href="#"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->

            <div class="dropdown az-profile-menu">
                <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img src="../img/faces/face1.jpg" alt="">
                        </div><!-- az-img-user -->
                        <h6>Jame Bane</h6>
                        <span>GameTrade User</span>
                    </div><!-- az-header-profile -->


                    <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign
                        Out</a>
                </div><!-- dropdown-menu -->
            </div>
        </div><!-- az-header-right -->
    </div><!-- container -->
</div><!-- az-header -->
