<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
</head>

<body>
    <div id="wrapper">

        <div id="section">
            <div class="top">
                <h1>Welcome</h1>
                <h3>Register your account</h3>
            </div>
            <center>
                <br>
                <label for="name" style="margin-right: 230px;"><b>Tên đăng nhập</b></label>
                <input type="text" placeholder="Tên đăng nhập" name="name" required>
                <label for="psw" style="margin-right: 220px;"><b>Nhập mật khẩu</b></label>
                <input type="text" placeholder="Mật khẩu" name="psw" required>
                <label for="psw-reapet" style="margin-right: 195px;"><b>Nhập lại mật khẩu</b></label>
                <input type="text" placeholder="Nhập lại mật khẩu" name="psw-reapet" required>
                <label for="email" style="margin-right: 290px;"><b>Email</b></label>
                <input type="text" placeholder="Nhập Email" name="email" required>
                <label for="phone" style="margin-right: 225px;"><b>Số điện thoại</b></label>
                <input type="text" placeholder="Số điện thoại" name="phone" required>

                <b><button type="submit" class="signupbtn" style="background-color: rgb(155, 52, 146); width: 150px; height: 50px;"><a href="">Đăng
                            Ký</a></button></b>
                <br>
                <br>
                <a href="?role=client&mod=login" class="text1">Bạn đã có tài khoản đăng nhập?</a>
            </center>


        </div>



    </div>
</body>

</html>
<?php get_footer() ?>