<?php 
include_once "../_header.php";

?>
<link rel="stylesheet" href="../../asset/css/qltv.css">
<form action="insert.php" method="POST" enctype="multipart/form-data">
    <label>Số lượng sách</label>
    <input type="number" name="quan_ly_sach" required/>

    <label>Số lượng độc giả</label>
    <textarea name="quan_ly_doc_gia"></textarea>
    <br>

    <label>Số lượng tác giả</label>
    <input type="number" name="quan_ly_tac_gia" required/>
    <br>

    <label>Số lượng thể loại</label>
    <input type="number" name="quan_ly_the_loai"/>
    <br>

    <label>Ngày mượn</label>
    <input type="datetime-local" name="muon_sach" accept="image/*"/>
    <br>

    <label>Ngày trả</label>
    <input type="datetime-local" name="tra_sach" min="0" max="9999"/>
    <br>

    <label>Thống kê cơ bản</label>
    <textarea name="thong_ke_co_ban"></textarea>
    <br>

    <button type="submit">Thêm giao dịch</button>
</form>
<?php include_once "../_footer.php" ?>