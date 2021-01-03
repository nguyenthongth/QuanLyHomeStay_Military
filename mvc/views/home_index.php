<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <base href="http://localhost/BTL/home_index">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang chủ | HomeStay QT</title>

        <link rel="shortcut icon" type="image/x-icon" href="public/assets/images/icon.png" />
        <link rel="icon" type="image/x-icon" href="public/assets/images/icon.png" />
        <link id="ImageLink" rel="image_src" type="image/jpg" href="https://demo.sweetsoft.vn/masova-hotel/public/assets/images/share.jpg" />
        <link rel="alternate" href="https://demo.sweetsoft.vn/masova-hotel/index.htm" hreflang="vi-en" />
        <link href="https://demo.sweetsoft.vn/masova-hotel/index.htm" rel="canonical" id="canonicalLink" />
  
        <link rel="stylesheet" type="text/css" href="public/assets/css/contact.css" />
        <link rel="stylesheet" type="text/css" href="public/assets/css/home.css" />\
        <link rel="stylesheet" type="text/css" href="public/assets/css/room-list.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body>
        <!-- header -->
        <?php require_once "./mvc/views/PhanCoDinh/header.php"; ?>
        <!-- end header -->

        <!-- include trang web con tại đây  -->
        <?php require_once "./mvc/views/PhanThayDoi/".$data["page"].".php"; ?>
        <!-- end include trang web con  -->

        <!-- footer -->
        <?php require_once "./mvc/views/PhanCoDinh/footer.php"; ?>
        <!-- end footer -->

        <!-- include book room -->
        <?php require_once "./mvc/views/PhanCoDinh/bookrom.php"; ?>
        <!-- end book room -->
       
        <script src="public/assets/js/home.js"></script>
    </body>
</html>





			
		