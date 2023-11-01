    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Join Now</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Join Now Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">JOIN NOW</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-6 mb-5">
                <div class="contact-form bg-light p-30">
                    <h3 class="mb-4">Create Account</h3>
                    <form method="post" action="">
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" id="name" name="hoten" placeholder="Your Name" required>
                        </div>
                        <div class="control-group mb-3">
                            <input type="date" class="form-control" id="birthday" name="ngaysinh" placeholder="Your birthday" required>
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email"
                                required>
                        </div>
                        <div class="control-group mb-3">
                            <input type="password" class="form-control" id="password" name="matkhau" placeholder="Your Password" required>
                        </div>
                        <div>
                            <input class="btn btn-primary py-2 px-4" type="submit" name="submit-signup" value="Sign Up">
                        </div>
                        <?php if(isset($thongbao2)): ?>
                        <div class="alert alert-warning">
                            <?=$thongbao2?>
                        </div>
                        <?php endif; unset($thongbao2);?>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="contact-form bg-light p-30">
                    <h3 class="mb-4">Sign In</h3>
                    <form method="POST" action="">
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email"
                                required>
                        </div>
                        <div class="control-group mb-3">
                            <input type="password" class="form-control" id="password" name="matkhau" placeholder="Your Password" required>
                        </div>
                        <div>
                            <input class="btn btn-primary py-2 px-4" type="submit" name="submit-login" value="Sign In"/>
                        </div>
                        <?php if(isset($thongbao)): ?>
                        <div class="alert alert-warning">
                            <?=$thongbao?>
                        </div>
                        <?php endif; unset($thongbao);?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Join Now End -->