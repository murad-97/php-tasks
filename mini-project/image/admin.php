<?php
session_start();
if (!isset($_SESSION["cards"])) {
    $_SESSION["cards"] = array();
    // $_POST["Delete"] = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.csss">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container-menu-desktop">
            <!-- Topbar -->


            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="../images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="../cards.php">Home</a>
                            </li>

                            <li class="active-menu">
                                <a href="product.html">products</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="shoping-cart.html">Features</a>
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search fa-solid fa-cart-shopping"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#"
                            class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                            data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="../images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                    data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="../images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>


        </div>
    </div>

    <!-- <img src="./images/about-01.jpg" alt=""> -->
    <form class="form hi" method="POST" action="#" enctype="multipart/form-data">
        <h2 class="h2">ADD your product</h2>
        <label for="">product name</label>
        <input class="form-control form-control-lg" type="text" name="product-name" Required>
        <label for="">product description</label>
        <input class="form-control form-control-lg" type="text" name="product-desc" Required>
        <label for="">product image url</label>
        <input class="form-control form-control-lg" type="file" name="product-image" Required>
        <label for="">product price</label>
        <input class="form-control form-control-lg" type="product price" name="product-price" Required>
        <input class=" add flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" type="submit"
            name="submit" value="add">
    </form>
    <div>
        <table class='table container'>
            <tr>
                <th scope='col'>NAME</th>
                <th scope='col'>DESCRIPTION</th>
                <th scope='col'>IMAGE</th>
                <th scope='col'>PRICE</th>
                <th scope='col'>Delete</th>
            <tr>
                <?php
                // echo $_GET["Delete"];
                // echo "<br>";
                
                if (isset($_POST["Delete"])) {
                    foreach ($_SESSION["cards"] as $key => $value) {
                        if ($key == $_POST["Delete"]) {
                            // print_r($key);
                            array_splice($_SESSION["cards"], $key, 1);
                            // header("Location:admin.php");
                

                        }
                    }
                }
                // print_r($_POST);
                if ($_SESSION["status"] == true) {
                    if (isset($_POST["submit"])) {
                        $Name = $_FILES["product-image"]["name"];
                        $tempName = $_FILES["product-image"]["tmp_name"];
                        $folder = $Name;
                        move_uploaded_file($tempName, $folder);


                        $check = true;
                        foreach ($_SESSION["cards"] as $value) {
                            if ($_POST['product-name'] === $value[0] && $_POST['product-desc'] === $value[1] && $Name === $value[2] && $_POST['product-price'] === $value[3]) {
                                $check = false;
                            }
                        }

                        if ($check) {

                            array_push(
                                $_SESSION["cards"],
                                array(
                                    $_POST['product-name'],
                                    $_POST['product-desc'],
                                    $Name,
                                    $_POST['product-price'],
                                )
                            );
                        }
                    }
                    if ($_SESSION["cards"] != null) {


                        foreach ($_SESSION["cards"] as $key => $value) {

                            echo "<tr>";
                            echo "<td>$value[0]</td>";
                            echo "<td>$value[1]</td>";
                            echo "<td>";
                            echo "<img class = 'image' src= $value[2] >";
                            echo "</td>";
                            echo "<td>$value[3]</td>";
                            echo "<td><form class = 'del' action='' method='POST'> <input type='submit' placeholder='hi' value='Delete' style='color: red' name='' > <input type='hidden' placeholder='hi' value=$key style='color: red' name='Delete' ></td>";
                            echo "</tr>";
                        }

                    } else {
                        echo "no pruduct to show";
                    }
                } else {
                    header("Location:./login.php");
                }



                ?>
        </table>
    </div>
    <div class="co">
        <a href="../cards.php" class=" see add flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">over
            view</a>
    </div>
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shoes
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in store at irbid jordan or call us on +962778310048
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">


                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i
                        class="fa fa-heart-o" aria-hidden="true"></i> by MURAD ALSHORMAN
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>
    <!--===============================================================================================-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../js/slick.min.js"></script>
    <script src="../js/slick-custom.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>