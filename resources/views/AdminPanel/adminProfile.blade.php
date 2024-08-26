@extends('AdminPanel.layout.adminLayout')
@section('content')

<style>
    /* Google Fonts - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    
    .admin-profile-container {
        /* height: 60vh; */
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .admin-profile-form {
        max-width: 890px;
        width: 100%;
        padding: 30px;
        border-radius: 6px;
        background: #FFF;
    }
    
    .admin-profile-header {
        font-size: 28px;
        font-weight: 600;
        text-align: center;
        z-index: 1;
    }
    .profileImg{
        border: #CACACA 1px solid;
    }
    
    .admin-profile-field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
        border-radius: 6px;
    }
    
    .admin-profile-field input {
        height: 100%;
        width: 100%;
        padding: 0 15px;
        border: 1px solid #CACACA;
        border-radius: 6px;
        font-size: 16px;
        outline: none;
    }
    .quick-links{
        color: #007bff;
        font-size: 10px;
        margin-top: 1px;
        padding-bottom: 5px;
        text-decoration: none;
    }
    
    @media screen and (max-width: 400px) {
        .admin-profile-form {
            padding: 20px 10px;
        }
    }
</style>

<section class="admin-profile-container">
    <div class="admin-profile-form shadow rounded">
        <header class="admin-profile-header">Admin Profile</header>
        <div class="d-flex p-2">
            <div class="col-md-4 p-4 " >
                <div class="d-flex justify-content-md-center">
                <img class="d-flex justify-content-md-center profileImg" src="/images/aviral.png" width="220px" height="220px" class="p-2" alt="">
            </div>
                <p class="d-flex justify-content-between" >
                    <a href="#" class="quick-links" ><span><i class="fa-solid fa-cloud-arrow-up" style="font-size: 10px"></i></span>  Update Profile</a> 
                    <a href="#" style="font-size: 10px; margin-top: 0px; text-decoration: none;" ><span><i class="fa-solid fa-ban" style="font-size: 10px"></i></span>  Remove Profile</a>
                </p>
            </div>
            <div class="col-md-8">
                <form action="" class="p-4">
        
                    <div class="admin-profile-field">
                        {{-- <input type="text"  class="input"  value="{{ $adminDetails->adminName }}"> --}}
                    </div>        
                    <div class="admin-profile-field">
                        <input type="text" placeholder="Admin Email" class="input" name="adminEmail" id="adminEmail" value="{{ session('adminEmail') }}">
                        <p><a href="#" class="quick-links" ><span><i class="fa-solid fa-pen" style="font-size: 10px"></i></span> Change email</a></p>
                    </div>        
                    <div class="admin-profile-field">
                        <input type="text" placeholder="Admin Phone Number" class="input" name="adminPhoneNumber" id="adminPhoneNumber" value="{{ session('adminPhoneNumber') }}">
                    </div>
                    <div class="admin-profile-field">
                        <input type="password" placeholder="Admin Password" class="input" name="adminPassword" id="adminPassword" value="{{ session('adminPassword') }}">
                        <p class="d-flex justify-content-between">
                            <a href="#" class="quick-links" ><span><i class="fa-solid fa-pen" style="font-size: 10px"></i></span> Change password</a>
                            <a href="#" class="quick-links" ><span><i class="fa-solid fa-repeat" style="font-size: 10px"></i></span> Forget password</a> </p>
                    </div> 
        
                </form>

            </div>
    </div>
    <div class="btn-group d-flex gap-2" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-danger col-6 rounded"> <span><i class="fa-solid fa-trash"></i></span>   Delete Account</button>
        <button type="button" class="btn btn-primary col-6 rounded"> <span><i class="fa-solid fa-pen-to-square"></i></span>  Update Profile</button>
      </div>
    </div>
</section>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script> --}}
@endsection
