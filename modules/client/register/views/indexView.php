<?php get_header('', 'Đăng kí') ?>

<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    #wrapper #section h1 {
        padding-top: 40px;
    }

    #section {
        width: 100%;
        height: 800px;
        background-image: url(./assets/media/stock-900x600/32.jpg);
    }

    .top {
        padding-bottom: 10px;
    }

    .top h1 {
        font-size: 30px;
        font-weight: bold;
    }

    .top h3 {
        font-size: 25px;
    }

    .label {
        color: DodgerBlue;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        width: 350px;
        resize: vertical;
        padding: 15px;
        border-radius: 15px;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        display: block;


    }

    input[type=text]:focus,
    input[type=password]:focus {
        outline: none;
        border: 1px solid black;
    }

    #wrapper #section button {
        background-color: rgb(155, 52, 146);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: 2px solid linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
        cursor: pointer;
        width: 200px;
        opacity: 0.9;

    }

    #wrapper #section button:hover {
        opacity: 1;
    }

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .signupbtn {

        width: 200px;
        border-radius: 15px;
        border: 1px solid linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        background-color: rgb(150, 30, 140);
        margin-left: 10px;
    }

    .signupbtn:hover {
        background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
        box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
    }

    .section {
        padding: 16px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .text1 {
        margin-left: 20px;
        font-weight: 700;
    }

    h1,
    h3 {
        text-align: center;
        font-size: 25px;
    }
</style>

<div id="wrapper">
    <div id="section">
        <div class="top">
            <h1>Welcome</h1>
            <h3>Register your account</h3>
        </div>
        <center>
            <form class="form" id="kt_login_signin_form" method="post" action="">
                <div class="form-group">
                    <input class="form-control h-auto text-black placeholder-black opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="Tên người dùng" name="name" autocomplete="off" />
                </div>
                <div class="form-group">
                    <input class="form-control h-auto text-black placeholder-black opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="Email" name="email" autocomplete="off" />
                </div>
                <div class="form-group">
                    <input class="form-control h-auto text-black placeholder-black opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password" />
                </div>
                <div class="form-group">
                    <input class="form-control h-auto text-black placeholder-black opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="Số điện thoại" name="phone" autocomplete="off" />
                </div>
                <div class="form-group">
                    <input class="form-control h-auto text-black placeholder-black opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="Địa chỉ" name="address" autocomplete="off" />
                </div>
                <div class="form-group text-center mt-10">
                    <button id="kt_login_signin_submit" class="btn btn-pill btn-outline-black font-weight-bold opacity-90 px-15 py-3">Đăng ký</button>
                </div>
            </form>
            <br>
            <br>
            <a href="?role=client&mod=login" class="text1">Bạn đã có tài khoản đăng nhập?</a>
        </center>
    </div>
</div>

<?php get_footer() ?>