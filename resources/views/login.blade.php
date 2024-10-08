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

.form-content {
    margin-top: 5px;
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

@media screen and (max-width: 400px) {
    .form {
        padding: 20px 10px;
    }
}

</style>
<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>User Login</header>
            <form action="#">
                <div class="field input-field">
                    <input type="email" placeholder="Email" class="input">
                </div>
                <div class="field input-field">
                    <input type="password" placeholder="Password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button>Login</button>
                </div>
            </form>
            <div class="form-link">
                <a href="#" class="forgot-pass">Forgot password?</a>    
                <span>Don't having account ? <a href="/register" class="link signup-link">Signup</a></span>
            </div>
        </div>
    </div>
</section>
