<!-- <?php $users = get_auth(); ?> -->
<?php $notifications = get_notification(); ?>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        ul.img {
            height: 10px;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        #wrapper {
            width: 100%;
            margin: 0px auto;
        }

        ul#main-menu {
            display: flex;
            background: pink;

        }

        ul#main-menu a {
            padding: 5px 10px;
            display: block;
            color: black;
            padding-top: 85px;
            font-weight: 700;
            font-size: 25px;
            padding-right: 50px;

        }

        ul#main-menu li:hover a {
            color: #4f4242;
        }

        ul.form {
            float: left;
        }

        .timkiem {
            border: 2px solid pink;
            border-radius: 0;
            margin-top: 90px;
            border-radius: 25px/20px;
            text-align: center;

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
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <ul id="main-menu">
                <img src="assets/media/logos/logo-kaka.png" class="w-[10%]">
                <li><a href="?role=client&mod=home" class="menu-link">Trang Chủ</a></li>
                <li><a href="?role=client&mod=product" class="menu-link">Sản Phẩm</a></li>
                <li><a href="?role=client&mod=introduce" class="menu-link">Giới Thiệu</a></li>

                <form>
                    <input type="search" class="timkiem" required>
                    <button>Tìm kiếm</button>
                </form>
                <button id="cart">
                    <a href="?role=client&mod=cart" class="menu-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>

                </button>
                <li><a href="?role=client&mod=login">Đăng Nhập </a></li>
                <li><a href="?role=client&mod=register">Đăng Kí </a></li>
            </ul>

        </div>

    </div>
</body>

</html>

<?php foreach ($notifications as $notification) : ?>
    <div class="container">
        <?php foreach ($notification['msgs'] as $msg) : ?>
            <div class="alert alert-<?php echo $notification['type'] ?>" role="alert"><?php echo $msg ?></div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>