<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="dangnhap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .rain {
            float: left;
            border-right: 2px solid black;
            border-top-right-radius: 10px;
        }

        #cart {
            font-size: 15px;
            color: black;
            background: pink;
            border: 1px solid transparent;
            min-height: 85px;
            margin-left: 1rem;
            padding: 12px;
            margin-top: -75px;
        }

        #cart:hover {
            border-color: pink;
        }

        h1 {
            padding-top: 40px;
        }

        #section {
            width: 100%;
            height: 700px;
            background-image: url(./assets/media/stock-900x600/32.jpg);
        }

        .top {
            padding-bottom: 100px;
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
            border: 1px solid black;
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

        button {
            background-color: pink;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: 1px solid linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
            cursor: pointer;
            width: 100px;
            opacity: 0.9;

        }

        button:hover {
            opacity: 1;
            outline: none;
        }

        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        .signupbtn {

            width: 200px;
            border-radius: 15px;
            border: 1px solid linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673)e;
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

        .section.signupbtn {
            width: 200px;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .text2 {
            margin-left: 20px;

        }

        h1,
        h3 {
            text-align: center;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="section">
            <form>
                <div class="top">
                    <h1>Welcom</h1>
                    <h3>Login to your account</h3>
                </div>
                <center>
                    <div class="btn1">
                        <label for="name"><b>Tên đăng nhập</b></label>
                        <input type="text" placeholder="Tên đăng nhập" name="name" required>
                        <label for="psw"><b>Mật khẩu</b></label>
                        <input type="text" placeholder="Mật khẩu" name="psw" required>
                        <input type="checkbox"> Ghi nhớ mật khẩu?
                        <br>
                        <br>
                        <b><button type="submit" class="signupbtn" style="background-color: rgb(155, 52, 146);width: 150px; height: 50px;"><a href="">Đăng
                                    Nhập</a></button></b>
                    </div>
                    <a href="?role=client&mod=register" class="text1">Bạn chưa có tài khoản đăng kí?</a>
                </center>
            </form>
        </div>
    </div>
</body>

</html>
<?php get_footer() ?>