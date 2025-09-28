<?php 
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$quan_ly_sach = $_POST["quan_ly_sach"] ?? "";
$quan_ly_doc_gia = $_POST["quan_ly_doc_gia"] ?? "";
$quan_ly_tac_gia = $_POST["quan_ly_tac_gia"] ?? 0;
$quan_ly_the_loai = $_POST["quan_ly_the_loai"] ?? 0;
$muon_sach = $_POST["muon_sach"] ?? null;
$tra_sach = $_POST["tra_sach"] ?? null;
$thong_ke_co_ban = $_POST["thong_ke_co_ban"] ?? "";


// Câu lệnh SQL thêm dữ liệu
$sql = "INSERT INTO quan_ly_thu_vien (
    quan_ly_sach, quan_ly_doc_gia, quan_ly_tac_gia, quan_ly_the_loai, muon_sach, tra_sach, thong_ke_co_ban
) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Thực thi truy vấn
db_execute($sql, [$quan_ly_sach, $quan_ly_doc_gia, $quan_ly_tac_gia, $quan_ly_the_loai, $muon_sach, $tra_sach, $thong_ke_co_ban]);

// Quay về trang danh sách
redirect_to("/admin/quan_ly_thu_vien");
?>