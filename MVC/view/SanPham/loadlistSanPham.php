<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../assets/css/reset.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>

<body>
    <section class="product">
        <div class="container">
            <!-- fashion - 03 -->
            <section class="product__fashion">
                <p class="product__title">Tiêu đề</p>
                <div class="product__list-hot">
                    <i class="fa-solid fa-chevron-left product-chevron-left">
                    </i>
                    <i class="fa-solid fa-chevron-right product-chevron-right">
                    </i>
                    <!-- item 01 -->
                    <!-- <section class="product__item-hot">
                        <a href="#!" class="product__link">
                            <div class="product__img-wrap">
                                <img src="./assets/img/product01.jpg" alt="" class="product__img" />
                                <span class="product__img-sale">-50%</span>
                            </div>

                            <div class="product__content">
                                <div class="product__content-price">
                                    xxx VND
                                </div>
                                <p class="product__content-title">
                                    Quần tây
                                </p>
                            </div>
                        </a>
                    </section> -->
                    <?php 
                        require('./sanPhamItem.php');
                        require('./sanPhamItem.php');
                        require('./sanPhamItem.php');
                        require('./sanPhamItem.php');
                        require('./sanPhamItem.php');
                    ?>
                </div>
            </section>
        </div>
    </section>
</body>

</html>