<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">

    <link rel="stylesheet" href="./assets/css/DangNhap.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>Document</title>
    <?php 
        require('./MVC/view/linkfont.php');
    ?>
</head>

<body>
    <?php 
        require('./MVC/view/header.php');
   
    ?>
    <div class="pageWrapper">
        <div class="pageContent" style="background-image: url(./assets/img/hero-img02.jpg) ;">
            <div class="SignInContent_form">
                <div class="SignInContent_center">
                    <div class="SignInContent_formBox">
                        <div class="SignInContent_formContent">
                            <div class="SignInContent_header">
                                <div class="SignInContent_title">Đăng nhập</div>
                                <div class="SignInContent_title_sign-up">
                                    <p>
                                        Bạn chưa có tài khoản FM?
                                        <a href="">Đăng kí ngay</a>
                                    </p>
                                </div>
                                <form action="">
                                    <div class="SignIn_formfield">
                                        <div class="formfield">
                                            <label for="">Số điện thoại</label>
                                            <input type="text" name="User" id="User" class="formInput"
                                                placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="formfield">
                                            <label for="">Mã PIN</label>
                                            <input type="password" name="Password" id="Password" class="formInput"
                                                placeholder="Nhập mã PIN">
                                        </div>
                                    </div>
                                    <div class="SignIn_formForgetPass">
                                        <a href="">Quên mã PIN</a>
                                    </div>
                                    <div>
                                        <div class="SignIn_formSaveCheck">
                                            <input type="checkbox">Lưu thông tin đăng nhập
                                        </div>
                                        <div class="SignIn_Button">
                                            <button type="button" class="btn">
                                                <span>Đăng nhập</span>
                                            </button>
                                        </div>
                                        <div class="SignIn_Social">
                                            <div class="Bottom_LogIn">
                                                <hr class="crossline">
                                                <span>Hoặc</span>
                                                <hr class="crossline">
                                            </div>
                                            <div class="Social_Wrap">
                                                <div class="flex">
                                                    <button type="button" class="Social_btn">
                                                        <div class="Icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25px"
                                                                height="25px" viewBox="126.445 2.281 589 589"
                                                                id="facebook">
                                                                <circle cx="420.945" cy="296.781" r="294.5"
                                                                    fill="#3c5a9a"></circle>
                                                                <path fill="#fff"
                                                                    d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="Icon_title">Facebook</div>
                                                    </button>
                                                </div>
                                                <div class="flex">
                                                    <button type="button" class="Social_btn">
                                                        <div class="Icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25px"
                                                                height="25px" preserveAspectRatio="xMidYMid"
                                                                viewBox="0 0 256 262" id="google">
                                                                <path fill="#4285F4"
                                                                    d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027">
                                                                </path>
                                                                <path fill="#34A853"
                                                                    d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1">
                                                                </path>
                                                                <path fill="#FBBC05"
                                                                    d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782">
                                                                </path>
                                                                <path fill="#EB4335"
                                                                    d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="Icon_title">Google</div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="d-center">
                                                <span>Bằng việc chọn Đăng Nhập, bạn xác nhận đã đọc & đồng ý với các
                                                    Chính Sách Bảo Mật & Chia Sẻ Thông Tin của FM.</span>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="sign-in-container">
        <form action="#">
            <h2>Đăng nhập</h2>
            <h4>Bạn chưa có tài khoản FM?</h4>
            <a href="#">Đăng kí ngay</a>
            <h5>Số điện thoại</h5>
            <input type="phone" placeholder="Nhập số điện thoại" />
            <h5>Mã PIN</h5>
            <input type="password" placeholder="Nhập mã PIN" />
            <a href="">Quên mã PIN</a>
            <input type="checkbox">Lưu thông tin đăng nhập
            <div class="social-container">
                <a href="https://www.facebook.com/?stype=lo&jlou=Afck-SC5Oi51La_WBgz5x6Iukn1lzb70qUn34qbR6PP65tS6mlsSkF1m2TVqghlx9cD0Ngw81QyAYrRm4q0kkfZM-B5H9aBD0gaLr2RssbAeKA&smuh=2541&lh=Ac9g-dvedqcVWwPsKi0" 
                target="_blank" title="Đăng nhập vào bằng facebook để tiếp tục" class="social"><i class="fa-brands fa-facebook-f"></i></i></a>
                <a href="https://accounts.google.com/v3/signin/identifier?checkedDomains=youtube&dsh=S1241712816%3A1709474421399905&flowEntry=AccountChooser&flowName=GlifWebSignIn&hl=vi&ifkv=ATuJsjytzAh8tNBfBkvYc4g9BVJj-IyDMLZOpQsMMwA7q0QrGqjbCrk_1IxOalupataxK3zdGLuq&pstMsg=1&theme=glif&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount%3Fnc%3D1" 
                target="_blank" title="Đăng nhập vào bằng google để tiếp tục" class="social"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <a>
                <button id="btn" >
                    <a href="../index.html">
                        Đăng nhập
                    </a>
                </button>
            </a>
        </form>
    </div>     -->
</body>

</html>