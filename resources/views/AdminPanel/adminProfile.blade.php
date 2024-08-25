@extends('AdminPanel.layout.adminLayout')
@section('content')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> --}}

<style>
    /* Google Fonts - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    .container {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #4070f4;
    }
    
    .form {
        max-width: 430px;
        width: 100%;
        padding: 30px;
        border-radius: 6px;
        background: #FFF;
    }
    
    header {
        font-size: 28px;
        font-weight: 600;
        color: #232836;
        text-align: center;
    }
    
    .field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 20px;
        border-radius: 6px;
    }
    
    .field input {
        height: 100%;
        width: 100%;
        padding: 0 15px;
        border: 1px solid #CACACA;
        border-radius: 6px;
        font-size: 16px;
        outline: none;
    }
    
    .eye-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 12px;
        color: #050000;
        cursor: pointer;
        padding: 5px;
    }
    
    .field button {
        height: 100%;
        width: 100%;
        color: #fff;
        background-color: #0171d3;
        border: none;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .field button:hover {
        background-color: #016dcb;
    }
    
    @media screen and (max-width: 400px) {
        .form {
            padding: 20px 10px;
        }
    }
</style>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<section class="container forms">
    <div class="form login">
        <header>Admin Login</header>
        <form action="/admin/login" method="POST" >
            @csrf

            <div class="field input-field">
                <input type="email" placeholder="Email" class="input" name="adminEmail" id="adminEmail">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true">
                    @error('adminEmail')
                        <p class="red">{{ $message }}</p>
                    @enderror
                </span>
            </div>

            <div class="field input-field">
                <input type="password" placeholder="Password" class="password" id="password" name="adminPassword">
                <span class="eye-icon" id="togglePassword"><i class="fa-regular fa-eye"></i></span>
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true">
                    @error('adminPassword')
                        <p class="red">{{ $message }}</p>
                    @enderror
                </span>
            </div>

            <div class="field button-field">
                <button type="submit" name="submit" value="login">Login</button>
            </div>
        </form>
    </div>
</section>

<!-- Font Awesome for icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>


<!-- JavaScript to toggle password visibility -->
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // Toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // Toggle the icon
        this.classList.toggle("fa-regular fa-eye");
        this.classList.toggle("fa-regular fa-eye-slash");
    });
</script>
@endsection