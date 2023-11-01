<main>
            <section class="wide contact">
                <div class="contact-info col l-6">
                    <div class="contact-title">
                        <sub>THÔNG TIN</sub>
                        <h3>Liên Hệ</h3>
                        <span>Đến showroom Xuong Go Quang Hao để được tư vấn và xem sản phẩm trực tiếp</span>
                    </div>
                    <div class="license-contact">
                        <strong>Xưởng Gỗ Quang Hào</strong>
                        <p>© 2021 Bản quyền thuộc Công Ty TNHH Phong Thủy Tinh Lâm Giấy chứng nhận đăng ký doanh nghiệp: 0316645318 Do Sở Kế Hoạch và Đầu Tư Thành Phố Hồ Chí Minh – Cấp ngày 17/12/2020 Địa chỉ: 280 E10 Lương Định Của, P. An Phú, Q. 2, TP. Hồ Chí Minh.
                            ĐT: 028 77799917</p>
                    </div>
                    <div class="showroom-location">
                        <i class="fa fa-map-marker" style="font-size:20px;color: var(--second-color);"></i> 
                        <p><b>Showroom :</b> Thôn 1, Xã Ea Tóh ,Huyện Krông Năng, Tỉnh Đắk Lắk</p>
                    </div>

                </div>
                <div class="form-contact col l-6">
                    <form method="POST" action="">
                        <div class="user-box">
                            <input type="text" name="email" required="">
                            <label>Nhập Email</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="matkhau" required="">
                            <label>Nhập mật khẩu</label>
                        </div>
                        <!-- <input type="submit" name="submit-login" value="sign in"> -->
                        <a href="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <input type="submit" name="submit-login" value="Đăng nhập" class="login-btn">
                        
                        </a>
                        <?php if(isset($thongbao)): ?>
                        <div class="alert alert-warning">
                            <?=$thongbao?>
                        </div>
                        <?php endif; unset($thongbao);?>
                    </form>
                </div>
            </section>
        </main>