<body>
    <div class="grid">
        <header>
            <div class="top-header">
                <div class="wide">
                    <p>Hỗ trợ đặt hàng: 09 239 11339</p>
                    <p>Địa chỉ: Thôn 1, Xã Ea Tóh ,Huyện Krông Năng, Tỉnh Đắk Lắk</p>
                </div>
            </div>
            <div class="main-header wide">
                <div class="logo col l-12">
                    <div class="container" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <!-- nav mobile -->
                    <nav class="mobile-navigation hidden">
                        <ul>
                            <li class="menu-item">
                                <a href="index.php?mod=page&act=home" class="menu-link">TRANG CHỦ</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.php?mod=page&act=about" class="menu-link">VỀ QUANG HÀO</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.php?mod=product&act=product" class="menu-link">SẢN PHẨM</a>
                            </li>
                            <li class="menu-item">
                                <a href="landingpage.html" class="menu-link">CÁCH MUA HÀNG</a>
                            </li>
                            <li class="menu-item">
                                <a href="team.html" class="menu-link">ANH EM NGHỆ NHÂN</a>
                            </li>
                            <li class="menu-item">
                                <a href="action.html" class="menu-link">HOẠT ĐỘNG XƯỞNG</a>
                            </li>
                            <li class="menu-item">
                                <a href="knowledge.html" class="menu-link">KIẾN THỨC</a>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html" class="menu-link">LIEN HỆ</a>
                            </li>
                        </ul>

                    </nav>
                    <script>
                        function myFunction(x) {
                            x.classList.toggle("change");
                            var nav = document.querySelector('.mobile-navigation');
                            nav.classList.toggle("hidden");
                        }
                    </script>
                    <img src="./assets_user/img/Logo-Quang-Hao.goc-01.png" alt="Logo-Quang-Hao">
                    <div class="acount-action">
                        <a href="index.php?mod=page&act=contact">Đăng Nhập</a>
                        <a href="index.php?mod=page&act=contact">Đăng Ký</a>
                    </div>
                    
                </div>
                <!-- nav destop -->
                <nav>
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=home" class="menu-link">TRANG CHỦ</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=about" class="menu-link">VỀ QUANG HÀO</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=product&act=product&page=1" class="menu-link">SẢN PHẨM</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=landing" class="menu-link">CÁCH MUA HÀNG</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=team" class="menu-link">ANH EM NGHỆ NHÂN</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=action" class="menu-link">HOẠT ĐỘNG XƯỞNG</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=knowledge" class="menu-link">KIẾN THỨC</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?mod=page&act=contact" class="menu-link">LIEN HỆ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>