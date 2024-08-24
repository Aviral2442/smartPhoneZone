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
        max-width: 630px;
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

    form {
        margin-top: 30px;
    }

    .formInRow {
        display: flex;
        gap: 20px;
    }

    .field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 20px;
        border-radius: 6px;
    }

    .field input,
    .field button {
        height: 100%;
        width: 100%;
        border: none;
        font-size: 16px;
        font-weight: 400;
        border-radius: 6px;
    }

    .field input {
        outline: none;
        padding: 0 15px;
        border: 1px solid #CACACA;
    }

    .field input:focus {
        border-bottom-width: 2px;
    }

    .eye-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 18px;
        color: #8b8b8b;
        cursor: pointer;
        padding: 5px;
    }

    .field button {
        color: #fff;
        background-color: #0171d3;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .field button:hover {
        background-color: #016dcb;
    }

    .form-link {
        text-align: center;
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }

    .form-link span,
    .form-link a {
        font-size: 14px;
        font-weight: 400;
        color: #232836;
    }

    .form a {
        color: #0171d3;
        text-decoration: none;
    }

    .line {
        position: relative;
        height: 1px;
        width: 100%;
        margin: 36px 0;
        background-color: #d4d4d4;
    }

    .line::before {
        content: 'Or';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FFF;
        color: #8b8b8b;
        padding: 0 15px;
    }

    .straight-line {
        position: relative;
        height: 1px;
        width: 100%;
        margin: 36px 0;
        background-color: #d4d4d4;
    }

    .straight-line::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FFF;
        color: #8b8b8b;
        padding: 0 15px;
    }

    .media-options {
        display: flex;
        justify-content: space-between;
    }

    .media-options a {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }

    a.facebook {
        color: #fff;
        background-color: #4267b2;
        padding: 8px;
        border-radius: 6px;
        width: 48%;
    }

    .facebook-icon,
    img.google-img {
        margin-right: 8px;
    }

    img.google-img {
        height: 20px;
        width: 20px;
        object-fit: cover;
    }

    a.google {
        border: 1px solid #CACACA;
        padding: 8px;
        border-radius: 6px;
        width: 48%;
    }

    a.google span {
        font-weight: 500;
        opacity: 0.6;
        color: #232836;
    }

    .profileSection {
        margin-left: 50px;
    }

    .profile-pic {
        width: 60px;
        height: 60px;
        border-radius: 10%;
        object-fit: cover;
        /* margin: 10px auto; */
        display: block;
    }

    .profilePic {
        display: flex;
        justify-content: space-around;
        gap: 20px;
        align-items: center;
    }

    @media screen and (max-width: 400px) {
        .form {
            padding: 20px 10px;
        }
    }
</style>

<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>User Signup</header>
            <form action="#">
                
                <div class="straight-line"></div>

                <div class="profileSection">
                    <div class="text-center profilePic">
                        <div>
                            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png"
                                alt="Profile Picture" id="profileImage" class="profile-pic">
                        </div>
                        <div>
                            <label for="profilePic" style="display:block; margin-bottom:10px;">Upload Profile
                                Picture</label>
                            <input type="file" id="profilePic" accept="image/*" onchange="loadProfilePic(event)"
                                style="display:block; margin: 0 auto;">
                        </div>
                    </div>
                </div>



                <div class="formInRow">
                    <div class="field input-field">
                        <input type="text" placeholder="First Name" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Last Name" class="input">
                    </div>
                </div>

                <div class="formInRow">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="number" placeholder="Phone Number" class="input">
                    </div>
                </div>

                <div class="formInRow">
                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                </div>

                <div class="field button-field">
                    <button type="submit">Signup</button>
                </div>

                <div class="form-link">
                    <a href="#" class="forgot-pass">Forgot password?</a>
                    <span>Already having account <a href="/login" class="link signup-link">Login</a></span>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <span>Login with Facebook</span>
                    </a>
                    <a href="#" class="field google">
                        <span>Login with Google</span>
                    </a>
                </div>

            </form>
        </div>
    </div>
</section>

<!-- Script to Preview Profile Picture -->
<script>
    function loadProfilePic(event) {
        var profileImage = document.getElementById('profileImage');
        profileImage.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
