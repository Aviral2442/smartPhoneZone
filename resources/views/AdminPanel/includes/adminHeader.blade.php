<style>
    .profile-button {
        width: 20px;
        height: 20px;
        padding: 0;
        overflow: hidden;
    }

    .profile-button img {
        width: 20%;
        height: 20%;
        object-fit: cover;
    }

    .profile-dropdown {
        display: none;
        min-width: 150px;
    }

    .dropdown:hover .profile-dropdown {
        display: block;
        margin-top: 5px;
        border-radius: 5px;
    }
</style>

<header class="navbar navbar-dark sticky-top bg-dark d-flex px-5 p-0">
    <div>
        <img src="{{ asset('images/images.png') }}" width="140px" alt="logo" class="logo">
    </div>
    <div>
        <a class="navbar-brand col-md-12 fs-2 fw-bolder col-lg-12  text-center p-1" href="#">Smart Phone Zone</a>
    </div>
    <div>
        <div class="container text-center d-flex">
            <div class="dropdown">
                <button id="profileButton" class="btn btn-primary rounded-circle profile-button" type="button">
                    <img src="/images/defaultProfile.png" alt="Profile" class="rounded-circle">
                </button>
                <ul class="dropdown-menu profile-dropdown" aria-labelledby="profileButton">
                    <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
            <div id="sidebarToggle" style="margin-left: 20px" ><i class="fas fa-bars"></i></div>
        </div>
    </div>
</header>