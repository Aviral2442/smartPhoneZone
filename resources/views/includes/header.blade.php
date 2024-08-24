<style>
    .header {
        background-color: #f0f0f0;
        padding: 1rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
        width: 100px;
        height: 50px;
        margin-right: 10px;
    }

    .navbar-nav li {
        margin-right: 20px;
    }

    .navbar-nav a {
        color: #337ab7;
        text-decoration: none;
    }

    .navbar-nav a:hover {
        color: #23527c;
    }
    .designHeader{
        display: flex;
        justify-content: space-around;
    }
</style>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid designHeader">
            <!-- Logo on left side -->
            <div>
                <a class="navbar-brand" href="#">
                    <img src="images/smartPhoneLogo.jpg" alt="Logo" width="130px" height="70px">
                </a>
            </div>

            <!-- Menu in center -->
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right side elements -->
            <div>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
