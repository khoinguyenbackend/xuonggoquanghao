<?php 
// tương tác với các bẩng sản phẩm trong CSDL.
// hàm và lệnh SQL tương tác với CSDL
function get_categories(){
    global $conn;
    $sql = "SELECT * FROM danhmuc";
    $stmt = $conn-> prepare($sql);
    $stmt -> execute();
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt ->fetchAll();
}
?>