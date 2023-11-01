<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../assets_user/css/signin.css">
</head>
<body>
    <div class="container">
        <!-- <div class="acount-icon"> -->
            
            <!-- <form method="POST" action="">
                <div class="control-group mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email"
                        required>
                </div>
                <div class="control-group mb-3">
                    <input type="password" class="form-control" id="password" name="matkhau" placeholder="Your Password" required>
                </div>
                <div class="signin-btn">
                    <input class="btn btn-primary py-2 px-4" type="submit" name="submit-login" value="Sign In"/>
                </div>
                <?php if(isset($thongbao)): ?>
                <div class="alert alert-warning">
                    <?=$thongbao?>
                </div>
                <?php endif; unset($thongbao);?>
            </form> -->
            <div class="form-contact">
                <form method="POST" action="">
                    <div class="user-box">
                        <input type="text" name="email" required="">
                        <label>Nhập Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" id="password" name="matkhau" required="">
                        <label>Nhập số mật khẩu</label>
                    </div>
                    <a href="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Gửi đi
                    </a>
                    <?php if(isset($thongbao)): ?>
                    <div class="alert alert-warning">
                        <?=$thongbao?>
                    </div>
                    <?php endif; unset($thongbao);?>
                </form>
            </div>
            
        <!-- </div> -->
    </div>
    
    
    
</body>
</html>
