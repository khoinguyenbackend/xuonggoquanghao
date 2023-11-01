<?php 
// quản lý view và model liên quan đến user 

if(isset ($_GET['act'])){
    switch ($_GET['act']) {
        case 'joinnow':
            include_once 'model/connect.php';
            include_once 'model/user.php';
            if(isset($_POST['submit-login'])){
                $kq = login($_POST['email'],$_POST['matkhau']);
                if($kq){
                    // Đăng nhập thành công
                    $_SESSION['user'] = $kq;
                    if($kq['quyen']=='admin'){
                        header("location: admin.php");
                    }
                    else{
                        header("location: index.php");
                    }
                }
                else{
                    $thongbao = "email hoặc mật khẩu không đúng !";
                }
            }
            if(isset($_POST['submit-signup'])){
                // Kiểm tra xem đã có email này trong tài khoản chưa ?
                // nếu chưa có thì cho đăng ký
                $kq =checkMail($_POST['email']);
                if($kq){
                    //kêt quả đúng là đã có email rồi
                    // báo lỗi không cho đăng ký 
                    $thongbao2 = "Email đã tông tại không thể đăng ký!";
                }
                else{
                    // kết quả không có email 
                    // cho đăng ký 
                    $kq = login($_POST['hoten'],$_POST['ngaysinh'],$_POST['email'],$_POST['matkhau'],);
                }
                $kq = signup($_POST['hoten'],$_POST['ngaysinh'],$_POST['email'],$_POST['matkhau'],);
            }
            

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/joinnow.php';
            include_once 'view/template_footer.php';
            break;
        case 'signin':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/signin.php';
            include_once 'view/template_footer.php';
            break;
        case 'logout':
            unset($_SESSIO['user']);
            header("Location: index.php");
            break;
        
        default:
            # code...
            break;
    }
}

?>