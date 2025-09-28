 <?php 
 include_once "../../include/common.php";

 // Nhận dữ liệu từ form
 $id = $_POST["id"] ?? "";
 $quan_ly_sach = $_POST["quan_ly_sach"] ?? "";
 
 // Tạo câu truy vấn
 $sql = "UPDATE quan_ly_thu_vien 
         SET  quan_ly_sach = ?
         WHERE id = ?  ";

// Gọi hàm để thực thi câu truy vấn
db_execute($sql, [$quan_ly_sach, $id]);


$id = $_POST["id"] ?? "";
 $quan_ly_sach = $_POST["quan_ly_sach"] ?? "";
 
 // Tạo câu truy vấn
 $sql = "UPDATE quan_ly_thu_vien 
         SET  quan_ly_sach = ?
         WHERE id = ?  ";



