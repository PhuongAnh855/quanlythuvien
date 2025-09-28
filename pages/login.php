<?php
include_once"../include/common.php";


if(is_post_method())
{
    $ten_dang_nhap = $_POST["ten_dang_nhap"] ?? "";
    $mat_khau = $_POST["mat_khau"] ?? "";

    $sql = "SELECT ten_dang_nhap, mat_khau FROM tai_khoan WHERE ten_dang_nhap = ? ";
    $data = db_select($sql, [$ten_dang_nhap]);

    if(count($data ) > 0)
    {
        $data = $data[0];
         $hashed = $data["mat_khau"];
        if(password_verify($mat_khau, $hash) == true )
        {
            //Mật khẩu đúng
            js_alert("Đúng");
        }
        else
        {
            //Sai tên đăng nhập
            js_alert("Tên đăng nhập hoặc mật khẩu không đúng");
        }
    }
    else
    {
        //Sai tên đăng nhập
        js_alert("Tên đăng nhập hoặc mật khẩu không đúng");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../../asset/css/sp.css">
    <style>
        /* Đặt toàn bộ trang ở giữa màn hình */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: #f0f2f5;
            }

            /* Form chính */
            form {
                background: #fff;
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                width: 300px;
                display: flex;
                flex-direction: column;
            }

            /* Label */
            form label {
                margin-bottom: 6px;
                font-size: 14px;
                font-weight: 600;
                color: #333;
            }

            /* Input */
            form input {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 6px;
                outline: none;
                font-size: 14px;
                transition: border-color 0.3s ease;
            }

            /* Hiệu ứng khi focus */
            form input:focus {
                border-color: #007bff;
            }

            /* Nút đăng nhập */
            form button {
                padding: 10px;
                border: none;
                border-radius: 6px;
                background-color: #007bff;
                color: white;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            /* Hiệu ứng hover cho nút */
            form button:hover {
                background-color: #0056b3;
            }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="ten_dang_nhap" required>
        <br><br>

        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="mat_khau" required>
        <br><br>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
