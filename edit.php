<?php 

include_once "../_header.php";
$id = $_GET["id"] ?? "";
$sql = "SELECT
            qltv.id,
            qltv.quan_ly_sach,
            qltv.quan_ly_doc_gia,
            qltv.quan_ly_tac_gia,
            qltv.quan_ly_the_loai,
            qltv.muon_sach,
            qltv.tra_sach,
            qltv.thong_ke_co_ban
        FROM quan_ly_thu_vien qltv
        WHERE id = ? ";
$data = db_select($sql, [$id]);
$data = $data[0];
?>
<link rel="stylesheet" href="../../asset/css/sp.css">
<form action="update.php" method="POST" enctype="multipart/form-data">
    <label>Số lượng sách</label>
    <input type="number" name="quan_ly_sach" value="<?= $data["quan_ly_sach"] ?>" required/>

    <label>Số lượng độc giả</label>
    <textarea name="quan_ly_doc_gia"><?= $data["quan_ly_doc_gia"] ?></textarea>
    <br>

    <label>Số lượng tác giả</label>
    <input type="number" name="quan_ly_tac_gia" value="<?= $data["quan_ly_tac_gia"] ?>" required/>
    <br>

    <label>Số lượng thể loại</label>
    <input type="number" name="quan_ly_the_loai" value="<?= $data["quan_ly_the_loai"] ?>"/>
    <br>

    <label>Ngày mượn</label>
    <input type="datetime-local" name="muon_sach" value="<?= $data["muon_sach"] ?>" accept="image/*"/>
    <br>

    <label>Ngày trả</label>
    <input type="datetime-local" name="tra_sach" value="<?= $data["tra_sach"] ?>" min="0" max="9999"/>
    <br>

    <label>Thống kê cơ bản</label>
    <textarea name="thong_ke_co_ban"><?= $data["thong_ke_co_ban"] ?></textarea>
    <br>

    <button type="submit">Cập nhật giao dịch</button>
</form>
<?php include_once "../_footer.php" ?>