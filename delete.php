<?php 

include_once "../../include/common.php";

// Nhận id từ URL
$id = $_GET["id"] ?? "";

// // lấy ảnh để xóa
// $sql ="SELECT anh_san_pham FROM san_pham WHERE id=?";
// $record = db_select($sql, [$id])[0];
// if(empty($record["anh_san_pham"]) == false)
// {
//     remove_file($record["anh_san_pham"]);
// }

// Tạo câu query
$sql = "DELETE FROM quan_ly_thu_vien WHERE id=?";
    
// Thực thi câu query
db_execute($sql, [$id]);

// Quay về trang danh sách thư mục
redirect_to("/admin/quan_ly_thu_vien");