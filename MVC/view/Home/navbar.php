<?php 


?>

<body>
    <!-- nav -->
    <nav class="fixed">
        <div class="container container__nav">
            <div class="nav__inner">
                <!-- logo -->
                <a href="#" class="nav__link-logo">
                    <img src="../../../assets/img/logo.png" alt="" class="nav-logo" />
                </a>
                <!-- <div class="nav__toggle nav__bars" id="nav-toggle">
                        <i class="fa-solid fa-bars"></i>
                        <i class="fa-solid fa-x"></i>
                    </div> -->
                <!-- nav list -->
                <ul class="nav__list">
                    <li class="nav__list-items">
                        <a href="index.php?chon=t&id=1" class="nav__item-link">HÀNG MỚI VÈ</a>
                    </li>
                    <li class="nav__list-items">
                        <a href="#!" class="nav__item-link">ÁO NAM</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#!" class="sub-link">Item 1</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 2</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__list-items">
                        <a href="#!" class="nav__item-link">QUẦN NAM</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#!" class="sub-link">Item 1</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 2</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 3</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 4</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 5</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__list-items">
                        <a href="#!" class="nav__item-link">PHỤ KIỆN</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#!" class="sub-link">Item 1</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 2</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 3</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 4</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 5</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 6</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__list-items">
                        <a href="#!" class="nav__item-link">GIÀY DÉP</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#!" class="sub-link">Item 1</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 2</a>
                            </li>
                            <li>
                                <a href="#!" class="sub-link">Item 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__list-items">
                        <a href="#!" class="nav__item-link">OUTLET SALE</a>
                    </li>
                </ul>
                <!-- search -->
                <!-- Search form -->
                <div class="nav__form">
                    <form action="" class="search-form">
                        <input type="text" class="search-form__input" placeholder="Tìm kiếm ..." />
                        <!-- Submit button -->
                        <button type="submit" class="search-form__btn ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                        <!-- Clear button -->
                        <button type="reset" class="search-form__clear">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </button>
                    </form>
                    <button type="button" class="cart-shopping cart-btn">
                        <i class="fa-solid fa-cart-shopping"></i>
                         <!-- Cart preview -->
                         <div class="cart-preview">
                                <div class="cart-message">Có <span class="cart-message__number">2</span> <span style="color: red;">sản phẩm</span> trong giỏ hàng</div>
                                <ul class="cart__list">
                                    <!-- item 01 -->
                                        <li class="cart-item">
                                            <img src="./assets/img/product01.jpg" alt="" class="cart-item__img">
                                            <div class="cart-item__content">
                                                <a href="#!" class="cart-item__link">TÊN SẢN PHẨM 01</a>
                                                <div class="cart-item__info">
                                                    <div class="cart-item__number">1</div>
                                                    <span>X</span>
                                                    <span class="cart-item__price">400.000</span>
                                                </div>
                                                <div class="cart-item__icon">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                               
                                            </div>
                                        </li>
                                      <!-- item 02 -->
                                      <li class="cart-item">
                                            <img src="./assets/img/product02.jpg" alt="" class="cart-item__img">
                                            <div class="cart-item__content">
                                                <a href="#!" class="cart-item__link">TÊN SẢN PHẨM 02</a>
                                                <div class="cart-item__info">
                                                    <div class="cart-item__number">1</div>
                                                    <span>X</span>
                                                    <span class="cart-item__price">400.000</span>
                                                </div>
                                                <div class="cart-item__icon">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                               
                                            </div>
                                     </li>

                                       <!-- item 03 -->
                                       <li class="cart-item">
                                            <img src="./assets/img/product02.jpg" alt="" class="cart-item__img">
                                            <div class="cart-item__content">
                                                <a href="#!" class="cart-item__link">TÊN SẢN PHẨM 02</a>
                                                <div class="cart-item__info">
                                                    <div class="cart-item__number">1</div>
                                                    <span>X</span>
                                                    <span class="cart-item__price">400.000</span>
                                                </div>
                                                <div class="cart-item__icon">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                               
                                            </div>
                                        </li>

                                </ul>
                                <div class="cart__buy">
                                    <div class="cart__buy-wrap">Tổng: <span class="cart-buy__price">800.000</span></div>
                                    <a href="#!" class="cart__buy-btn" title="Thanh toán">Thanh toán</a>
                                </div>
                        </div>
                    </button>
                </div>
                <!-- login logout -->
                <div class="nav__right">
                    <div class="nav__right-wrap">
                        <a href="../../../MVC/view/login/dangNhap.php" class="nav__signin">Đăng nhập</a>
                        <span>/</span>
                        <a href="../../../MVC/view/login/dangKi.php" class="nav__signup">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>