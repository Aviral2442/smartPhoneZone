<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>

        /* Adjust sidebar width */
        #wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            width: 250px;
        }

        #page-content-wrapper {
            flex: 1;
        }

        /* Sidebar toggle button */
        #sidebarToggle {
            margin-right: 15px;
        }

        .card-footer i {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-end" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Admin Panel</div>
            <div class="list-group list-group-flush">
                <a 
                {{-- href="{{ route('admin.dashboard') }}" --}}
                    class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a 
                {{-- href="{{ route('admin.products.index') }}" --}}
                    class="list-group-item list-group-item-action bg-light">Products</a>
                <a 
                {{-- href="{{ route('admin.orders.index') }}" --}}
                    class="list-group-item list-group-item-action bg-light">Orders</a>
                <!-- Add more sidebar links here -->
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Sidebar</button>
                    <div class="d-flex ms-auto">
                        <a 
                        {{-- href="{{ route('logout') }}"  --}}
                        class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/admin.js') }}"></script>
    @stack('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidebarToggle = document.getElementById('sidebarToggle');
            var sidebarWrapper = document.getElementById('sidebar-wrapper');

            sidebarToggle.addEventListener('click', function() {
                sidebarWrapper.classList.toggle('d-none');
            });
        });
    </script>
</body>

</html>
