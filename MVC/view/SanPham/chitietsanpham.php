<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết sản phẩm</title>
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css -->
    
    <link rel="stylesheet" href="../../../assets/css/reset.css" />
    <link rel="stylesheet" href="../../../assets/css/styleAllForm.css" />
    <link rel="stylesheet" href="../../../assets/css/style.css" />

    <link rel="stylesheet" href="../../../assets/css/chitietsanpham.css" />
</head>

<body>
    <?php 
        require('../Home/navbar.php')
    ?>
    <div class="grid-container">
        <div class="grid-item item1">
            <div class="menu__sub">
                <div class="container container__nav">
                    <ul class="menu__sub-list">
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 1</a>
                        </li>
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 2</a>
                        </li>
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 3</a>
                        </li>
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 4</a>
                        </li>
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 5</a>
                        </li>
                        <li class="menu__sub-item">
                            <a class="menu__sub-link" href="#!">item 6</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid-item item3">
            <div class="container">
                <div class="content__img">
                    <div class="content__img-list">
                        <img src="/assets/img/product03.jpg" alt="" class="content__img-item">
                        <img src="/assets/img/product04.jpg" alt="" class="content__img-item">
                        <img src="/assets/img/product05.jpg" alt="" class="content__img-item">
                        <img src="/assets/img/product06.jpg" alt="" class="content__img-item">
                        <img src="/assets/img/product07.jpg" alt="" class="content__img-item">
                    </div>
                    <div class="content__img-main-wrap"><img src="/assets/img/product03.jpg" alt=""
                            class="content__img-main"></div>
                    <div class="content__info">
                        <div class="content__info-inner">
                            <h2 class="content__info-title">Áo Dài Cách Tân Nữ Lụa Tay Loe</h2>
                            <p class="content__info-price">399.000 VND</p>
                            <p class="content__info-color">Màu sắc: Trắng</p>
                            <form action="" method="post">
                                <div class="content__input">
                                    <label class="content__input-label" for="white"></label>
                                    <input type="radio" name="" id="white">
                                    <label class="content__input-label" for="black"></label>
                                    <input type="radio" name="" id="black">
                                    <label class="content__input-label" for="be"></label>
                                    <input type="radio" name="" id="be">
                                    <label class="content__input-label" for="red"></label>
                                    <input type="radio" name="" id="red">
                                </div>

                                <div class="content__input">
                                    <select name="" id="" class="content__input-select">
                                        <option value="sizeS">S</option>
                                        <option value="sizeL">L</option>
                                        <option value="sizeM">M</option>
                                    </select>

                                    <input type="number" name="" id="" class="content__input-number" value="0">
                                </div>

                                <div class="content__input"><button class="btn btn--primary">Thêm vào giỏ hàng</button>
                                </div>

                                <div class="content__input"><button class="btn ">Mua ngay</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item item5">
            <?php 
                require('../Home/viewProduct02.php');
                require('../Home/footer.php');
                ?>
        </div>
    </div>
</body>

</html>