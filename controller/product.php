<?php 
// quản lý các view như trang chủ , giối thiệu, liên hệ....
if(isset ($_GET['act'])){
    switch ($_GET['act']) {

            case 'product':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if(isset($_GET['page'])){
                    $soluongSp = count_products()['soluong'];
                    $sotrang = ceil($soluongSp /2);
                    $data['dssp'] = get_products(($_GET['page'] - 1)*3,3); 
                }

                include_once 'view/template_head.php';
                include_once 'view/template_header.php';
                include_once 'view/page_product.php';
                include_once 'view/template_footer.php';
                break;

            case 'admin':
                if(!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')){
                    header("location: index.php");
                }

                include_once 'model/connect.php';
                include_once 'model/product.php';
                //  Điềug kiện phân trang
                if(isset($_GET['page'])){
                    $soluongSp = count_products()['soluong'];
                    $sotrang = ceil($soluongSp /3);
                    $data['dssp'] = get_products(($_GET['page'] - 1)*10,10); 
                }
                include_once 'view/template_admin_head.php';
                include_once 'view/template_admin_header.php';
                include_once 'view/product_admin.php';
                include_once 'view/template_admin_footer.php';
                break;

            case 'add':
                if(!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')){
                    header("location: index.php");
                }
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'model/categories.php';
                $data['dsdm'] = get_categories();
                if(isset ($_POST['submit'])){
                    $kq = add_product($_POST['tensp'],
                    $_POST['motachitiet'],
                    $_POST['motangan'],
                    $_POST['gia'],
                    $_POST['giakhuyenmai'],
                    $_POST['soluong'],
                    $_POST['madm'],
                    $_FILES['anhsp']['name'],);
                };
                if( isset($kq) ){
                //    kQ đúng, đã thêm đưuọc sản phẩm vào csdl
                    $kq = move_uploaded_file(
                        $_FILES['anhsp']['tmp_name'],"upload/product/".$_FILES['anhsp']['name']
                    );
                }
                if(isset($kq) ){
                    header("Location: admin.php?mod=product&act=admin");
                }
                else{
                    // KQ sai, thông báo lỗi 
                    $thongbao = "co loi da xay ra vui long thu lai sau";
                }



                include_once 'view/template_admin_head.php';
                include_once 'view/template_admin_header.php';
                include_once 'view/product_add.php';
                include_once 'view/template_admin_footer.php';
                break;
            case 'edit':
                if(!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')){
                    header("location: index.php");
                }
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'model/categories.php';
                $data['dsdm'] = get_categories();
                if(isset($_GET['id'])){
                    $data['sp'] = get_product($_GET['id']);
                }
                if(isset ($_POST['submit'])){
                    $anh = $_FILES['anhsp']['name'];
                    if($_FILES['anhsp']['error']!=0){
                        $anh = $data['sp']['anhsp'];
                    }
                    $kq = edit_product(
                    $_GET['id'],
                    $_POST['tensp'],
                    $_POST['motachitiet'],
                    $_POST['motangan'],
                    $_POST['gia'],
                    $_POST['giakhuyenmai'],
                    $_POST['soluong'],
                    $_POST['madm'],
                    $anh );
                };
                if( isset($kq) ){
                //    kQ đúng, đã thêm đưuọc sản phẩm vào csdl
                    $kq = move_uploaded_file(
                        $_FILES['anhsp']['tmp_name'],"upload/product/".$_FILES['anhsp']['name']
                    );
                }
                if(isset($kq) ){
                    header("Location: admin.php?mod=product&act=admin");
                }
                else{
                    // KQ sai, thông báo lỗi 
                    $thongbao = "co loi da xay ra vui long thu lai sau";
                }



                include_once 'view/template_admin_head.php';
                include_once 'view/template_admin_header.php';
                include_once 'view/product_edit.php';
                include_once 'view/template_admin_footer.php';
                break;
                case 'delete':
                    if(!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')){
                        header("location: index.php");
                    }
                    include_once 'model/connect.php';
                    include_once 'model/product.php';
                    if(isset($_GET['id'])){
                        $kq = delete_product($_GET['id']);
                        if($kq ){
                            header("Location: admin.php?mod=product&act=admin");
                        }
                        else{
                            $thongbao = "Vui lòng thử lại sau";
                        }
                    }
                    break;
                case 'cart':
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/cart.php';
            include_once 'view/template_footer.php';
            break;
            default:
                # code...
                break;
    }
}

?>