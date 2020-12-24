<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang chủ | Military Homestay</title>
        <link rel="shortcut icon" type="image/x-icon" href="public/assets/images/icon.png" />
        <link rel="icon" type="image/x-icon" href="public/assets/images/icon.png" />
        <link rel="stylesheet" type="text/css" href="public/assets/css/home.css" />
    </head>
    <body>
        <?php require_once "./mvc/views/phanCoDinh/header.php";?>
        <?php 
        require_once "./mvc/views/phanThayDoi/".$data["page"].".php";
        ?>
        <?php require_once "./mvc/views/phanCoDinh/footer.php";?>
    <script src="public/assets/js/home.js"></script>
    </body>
</html>