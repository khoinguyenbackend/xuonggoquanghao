<?php 
function count_products($start = 0, $limit = 0){
    global $conn;
    $sql = "SELECT count(*) AS soluong FROM sanpham "; 
    $stmt = $conn-> prepare($sql);
    $stmt -> execute();
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt ->fetch();
}

function get_products($start = 0, $limit = 0){
    global $conn;
    $sql = "SELECT sp.*,dm.tendm FROM sanpham sp INNER JOIN danhmuc dm ON sp.madm=dm.madm" ; 

    if($limit > 0){
        $sql .= " LIMIT " . $start . "," . $limit;
    }
    $stmt = $conn-> prepare($sql);
    $stmt -> execute();
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt ->fetchAll();
}
function get_product($id){
    global $conn;
    $sql = "SELECT sp.*,dm.tendm FROM sanpham sp INNER JOIN danhmuc dm ON sp.madm=dm.madm WHERE sp.masp=".$id ;
    $stmt = $conn-> prepare($sql);
    $stmt -> execute();
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt ->fetch();
}
function add_product($tensp, $motachitiet, $motangan, $gia, $giakhuyenmai, $soluong, $madm, $anhsp) {
    global $conn;
    $sql = "INSERT INTO sanpham (`tensp`, `motachitiet`, `motangan`, `gia`, `giakhuyenmai`, `soluong`, `madm`, `anhsp`) VALUES (:tensp, :motachitiet, :motangan, :gia, :giakhuyenmai, :soluong, :madm, :anhsp)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tensp", $tensp);
    $stmt->bindParam(":motachitiet", $motachitiet);
    $stmt->bindParam(":motangan", $motangan);
    $stmt->bindParam(":gia", $gia);
    $stmt->bindParam(":giakhuyenmai", $giakhuyenmai);
    $stmt->bindParam(":soluong", $soluong);
    $stmt->bindParam(":madm", $madm);
    $stmt->bindParam(":anhsp", $anhsp);
    return $stmt->execute();
}
function edit_product($masp, $tensp, $motachitiet, $motangan, $gia, $giakhuyenmai, $soluong, $madm, $anhsp) {
    global $conn;
    $sql = "UPDATE sanpham SET `tensp`=:tensp, `motachitiet`=:motachitiet, `motangan`=:motangan, `gia`=:gia, `giakhuyenmai`=:giakhuyenmai, `soluong`=:soluong, `madm`=:madm, `anhsp`=:anhsp WHERE masp=:masp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":masp", $masp);
    $stmt->bindParam(":tensp", $tensp);
    $stmt->bindParam(":motachitiet", $motachitiet);
    $stmt->bindParam(":motangan", $motangan);
    $stmt->bindParam(":gia", $gia);
    $stmt->bindParam(":giakhuyenmai", $giakhuyenmai);
    $stmt->bindParam(":soluong", $soluong);
    $stmt->bindParam(":madm", $madm);
    $stmt->bindParam(":anhsp", $anhsp);
    return $stmt->execute();
}
function delete_product($masp) {
    global $conn;
    $sql = "DELETE FROM sanpham WHERE masp = :masp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":masp", $masp);
    return $stmt->execute();
}



?>