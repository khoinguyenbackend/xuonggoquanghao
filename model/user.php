<?php 
// tương tác với các bẩng user/ tài khoàn trong CSDL.
// hàm và lệnh SQL tương tác với CSDL
function login($email,$password){
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE email = '".$email."' AND matkhau = '".$password."'";
    $stmt = $conn-> prepare($sql);
    $stmt -> execute();
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt ->fetch();
}
function signup($hoten,$ngaysinh,$email,$matkhau){
    global $conn;
    $sql = "INSERT INTO taikhoan(`hoten`,`ngaysinh`,`email`,`matkhau`) VALUE(:hoten, :ngaysinh,:email,:matkhau)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":hoten",$hoten);
    $stmt->bindParam(":ngaysinh",$ngaysinh);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":matkhau",$matkhau);
    return $stmt->execute();
}
function checkMail($email){
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE email = :email";
    $stmt = $conn-> prepare($sql);
    $stmt->bindParam(":email",$email);
    $stmt -> execute();
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt ->fetch();
}
?>