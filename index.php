<?php 
include_once "../_header.php";

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
        ORDER BY id DESC";

$data = db_select($sql);
// dd($data);
?>
<link rel="stylesheet" href="../../asset/css/sp1.css">
<a href="create.php">Giao dịch</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Số lượng sách</th>
            <th>Số lượng độc giả</th>
            <th>Số lượng tác giả</th>
            <th>Số lượng thể loại</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
            <th>Thống kê cơ bản</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
        <tr>
            <td><?= $d["id"]?></td>
            <td>
                <img src="<?= upload($d["quan_ly_sach"])?>" width="50" height="50" />
            </td>
            <td><?= $d["quan_ly_doc_gia"]?></td>
            <td><?= $d["quan_ly_tac_gia"]?></td>
            <td><?= $d["quan_ly_the_loai"]?></td>
            <td><?= $d["muon_sach"]?></td>
            <td><?= $d["tra_sach"]?></td>
            <td><?= $d["thong_ke_co_ban"]?></td>
            <td>
                <a href="delete.php?id=<?= $d["id"] ?>" class="btn-del">Xóa</a>
                <a href="edit.php?id=<?= $d["id"] ?>" class="btn-edit">Sửa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<table>
    
</table>

<?php include_once "../_footer.php" ?>