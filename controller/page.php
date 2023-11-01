<?php 
// quản lý các view như trang chủ , giối thiệu, liên hệ....
if(isset ($_GET['act'])){
    switch ($_GET['act']) {
        case 'home':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_home.php';
            include_once 'view/template_footer.php';
            break;
        case 'about':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_about.php';
            include_once 'view/template_footer.php';
            break;
        case 'landing':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_landing.php';
            include_once 'view/template_footer.php';
            break;
        case 'team':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_team.php';
            include_once 'view/template_footer.php';
            break;
        case 'action':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_action.php';
            include_once 'view/template_footer.php';
            break;
        case 'knowledge':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_knowledge.php';
            include_once 'view/template_footer.php';
            break;
        case 'contact':
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
            include_once 'view/page_contact.php';
            include_once 'view/template_footer.php';
            break;
        case 'dasdboard':
            if(!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')){
                header("location: index.php");
            }
            include_once 'view/template_admin_head.php';
            include_once 'view/template_admin_header.php';
            include_once 'view/dasdboard.php';
            include_once 'view/template_admin_footer.php';
            break;
        default:
            # code...
            break;
    }
}

?>