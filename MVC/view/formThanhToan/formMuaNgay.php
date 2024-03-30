<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua hàng</title>
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../assets/css/reset.css" />
    <link rel="stylesheet" href="../../../assets/css/style.css" />
    <link rel="stylesheet" href="../../../assets/css/thanhtoansanpham.css" />
   
</head>

<body>
    <nav class="nav-form__pay fixed">
        <div class="container container__nav">
            <div class="nav-pay__inner">
                <!-- logo -->
                <a href="#" class="nav__link-logo">
                    <img src="../../../assets/img/logo.png" alt="MENSTYLE" class="nav-logo" />
                </a>
                <!-- thanh quy trình -->
                <div class="nav-pay__procedure">
                    <div class="pay__procedure-list">
                        <div class="pay__procedure-item">
                            <div class="procedure-item__icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="procedure-item__title">
                                GIỎ HÀNG
                            </div>
                        </div>
                    </div>
                </div>

                <!-- thanh tiếp tục -->
                <div class="nav-pay__next">

                </div>

            </div>

        </div>
    </nav>

    <div class="grid-container">
        <div class="grid-item item1">
            <div class="menu__sub">
                <div class="container">
                    <ul class="menu__sub-list">
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 1</a>
                        </li>
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 2</a>
                        </li>                      
                    </ul>
                </div>
            </div>       
        </div>
        <div class="grid-item item3">

            <div class="container">
               
            </div>
        </div>

        <div class="grid-item item5">
            <?php 
                require('../Home/footer.php');
                ?>
        </div>
    </div>


</body>

</html>