<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Demo</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img
                    src="./img/header.png"
                    class="header__img"
                    alt="image header"
                />
            </div>
            <div class="navbar">
                <div class="navbar__wrap">
                    <ul class="navbar__list">
                        <li class="navbar__link">
                            <a href="/VinaMilk" class="active">Trang chủ</a>
                        </li>

                        <li class="navbar__link">
                            <a href="?go=products-list">Giới thiệu</a>
                        </li>
                        <li class="navbar__link">
                            <a href="/">Tin tức</a>
                        </li>
                        <li class="navbar__link">
                            <a href="/">Dịch vụ</a>
                        </li>
                        <li class="navbar__link">
                            <a href="/">Khách hàng</a>
                        </li>
                        <li class="navbar__link">
                            <a href="/">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main">
                <div class="main__body">
                    <div class="main__body-wrapper">
                        <div class="main__wrap">
                            <div class="classify">
                                <ul class="classify__list">
                                    <li class="classify__list-item active ">
                                        Hãng sữa
                                    </li>
                                    <li class="classify__list-item">
                                        Loại sữa
                                    </li>
                                    <li class="classify__list-item">Sữa</li>
                                    <li class="classify__list-item">Khách hàng</li>
                                    <li class="classify__list-item">Hóa đơn</li>
                                </ul>
                                <div class="baner">
                                    <img src="https://toigingiuvedep.vn/wp-content/uploads/2022/04/hinh-anh-ca-phe-mot-minh.jpg" alt="">
                                </div>
                            </div>
                            <div class="content__center">
                                <div class="content__img">
                                    <img
                                        src="./img/header.png"
                                        alt=""
                                    />
                                </div>
                                <h1 class="content__title">Bảng tin trong ngày</h1>
                                
                                <?php include("connectdb.php");?>
                                <?php include("bodyIndex.php");?>
                            </div>
                            <div class="banner__img">
                                <div class="banner__image">
                                    <img
                                        src="https://toigingiuvedep.vn/wp-content/uploads/2022/04/hinh-anh-ca-phe-mot-minh.jpg"
                                        alt=""
                                    />
                                    <img
                                        src="https://toigingiuvedep.vn/wp-content/uploads/2022/04/hinh-anh-ca-phe-mot-minh.jpg"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <footer class="footer">
                            <div class="empty"></div>
                            <div class="footer__main">
                                <div class="footer-left">
                                    <p class="footer__text">Công ty sữa Vinamilk</p>
                                    <p class="footer__text">Website: ww.vinamilk.com</p>
                                </div>
                                <div class="footer-right">
                                    <p class="footer__text">Công ty sữa Vinamilk</p>
                                    <p class="footer__text">Website: ww.vinamilk.com</p>
                                </div>
                            </div>
                            <div class="empty"></div>

                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
