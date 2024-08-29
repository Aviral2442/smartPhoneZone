<style>
    header {
        background-color: #343a40;
        color: #fff;
        padding: 10px 20px;
        position: sticky;
        top: 0;
        z-index: 1000;
        transition: background-color 0.3s ease, padding 0.3s ease;
    }

    header.sticky {
        background-color: #1f1f1f;
        padding: 10px 20px;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
    }

    .header-title {
        font-size: 24px;
        font-weight: bold;
    }

    .search-container {
        max-width: 400px;
        flex-grow: 1;
        margin: 0 20px;
    }

    .search-box {
        display: flex;
        border: 2px solid #0b0b0b;
        border-radius: 25px;
        overflow: hidden;
    }

    .search-box input[type="text"] {
        width: 100%;
        padding: 10px;
        border: none;
        outline: none;
    }

    .search-box button {
        background-color: #000000;
        border: none;
        padding: 10px 15px;
        color: #fff;
        cursor: pointer;
    }

    .search-box button:hover {
        background-color: #0056b3;
    }

    .user-menu {
        display: flex;
        align-items: center;
    }

    .user-menu .dropdown-toggle {
        background-color: #007bff;
        border: none;
        padding: 5px 20px;
        color: #fff;
        border-radius: 25px;
        font-size: 15px;
    }

    .user-menu .dropdown-toggle i {
        margin-right: 5px;
    }

    .user-menu .dropdown-menu {
        min-width: 200px;
        margin-left: 2px;
    }
</style>

<header>
    <div class="container header-container">
        <div class="header-title">
            Admin Dashboard
        </div>
        {{-- <div class="search-container">
            <form class="search-box" id="searchForm">
                <input type="text" id="searchInput" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div> --}}
        @php
            // Retrieve user details from session
            // $user = Auth::admin();
            $adminName = session('adminEmail');
            // $userImage = session('user_image');
        @endphp
        <div class="user-menu">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{-- <i class="fas fa-user"></i> Logout --}}
                    <img src="https://static.vecteezy.com/system/resources/previews/005/544/718/non_2x/profile-icon-design-free-vector.jpg"
                        class="rounded-circle p-0" alt="" width="25px" height="25px">
                    <span class="ms-2" >{{ $adminName }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/admin/adminProfileDetails">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
            <div id="sidebarToggle" style="margin-left: 20px;"><i class="fas fa-bars"></i></div>
        </div>
    </div>
</header>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting

        const query = document.getElementById('searchInput').value.trim();

        if (query) {
            console.log(`Searching for: "${query}"`);
            // Add your search functionality here, like redirecting to a search results page
        } else {
            alert('Please enter a search query.');
        }
    });
</script>
<script>
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 0) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    });
</script>
