<style>
    #sidebar {
        width: 210px;
        min-height: 100vh;
        transition: width 0.3s ease;
        background-color: #2c3e50;
        padding-top: 20px;
    }

    #sidebar.collapsed {
        width: 80px;
    }

    #sidebar .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        transition: all 0.3s ease;
        color: #ecf0f1;
        text-decoration: none;
    }

    #sidebar .nav-link:hover {
        background-color: #34495e;
        border-radius: 5px;
    }

    #sidebar .nav-link i {
        font-size: 1.5rem;
        color: #ecf0f1;
    }

    #sidebar .sidebar-text {
        margin-left: 10px;
        transition: opacity 0.3s ease;
        white-space: nowrap;
    }

    #sidebar.collapsed .sidebar-text {
        opacity: 0;
        visibility: hidden;
    }

    #sidebarToggle {
        cursor: pointer;
        font-size: 1.5rem;
        color: #ecf0f1;
        text-align: center;
        padding: 10px;
    }

    .main-content {
        flex-grow: 1;
        padding: 20px;
    }

    .dropdown {
        position: relative;
    }

    .profile-button {
        width: 60px;
        height: 60px;
        padding: 0;
        overflow: hidden;
        background-color: #3498db;
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }

    .profile-button img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .dropdown-menu {
        position: absolute;
        top: 70px;
        left: 0;
        display: none;
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        min-width: 150px;
        z-index: 1000;
    }

    .dropdown-menu a {
        display: flex;
        align-items: center;
        padding: 10px;
        color: #2c3e50;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .dropdown-menu a:hover {
        background-color: #f1f1f1;
    }

    .dropdown-menu a i {
        margin-right: 10px;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        #sidebar {
            width: 80px;
        }

        #sidebar .sidebar-text {
            display: none;
        }

        .main-content {
            padding: 10px;
        }

        .profile-button {
            width: 50px;
            height: 50px;
        }

        .dropdown-menu {
            top: 60px;
            min-width: 120px;
        }
    }
</style>
{{-- </head> --}}
{{-- <body> --}}
<div id="sidebar">
    {{-- <div id="sidebarToggle"><i class="fas fa-bars"></i></div> --}}
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-light" href="/admin/dashboard"><i class="fa-solid fa-gauge"></i><span class="sidebar-text">Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('admin.getBlogsList') }}"><i class="fa-brands fa-blogger-b"></i><span class="sidebar-text">Blog</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-store"></i><span class="sidebar-text">Products</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-credit-card"></i><span class="sidebar-text">Bookings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-layer-group"></i><span class="sidebar-text">Categories</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-ticket"></i><span class="sidebar-text">Coupons</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-circle-info"></i><span class="sidebar-text">Enquiry</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="fa-solid fa-users"></i><span class="sidebar-text">Users</span></a>
        </li>
    </ul>
</div>

<script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('collapsed');
    });
</script>