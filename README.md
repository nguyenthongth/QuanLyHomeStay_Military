## QuanLyHomeStay
Xây dựng website "đặt phòng HomeStay QT "
- Giới thiệu đề tài:
- Mô tả bài toán: hệ thống quản lý homestay và quản lý đặt phòng 
với kiến ​​trúc MVC  được tích hợp nhiều tính năng cho khách hàng của bạn trải nghiệm và đặt phòng nhanh chóng hơn

- Nhiệm vụ:
+ Quân : Xây dựng BackEnd
+ Thông : thiết kế giao diện FontEnd
+ Quân, Thông: xây dựng cơ sở dữ liệu

## Mô tả chức năng<br>
	1.Khách hàng
	+ Có thể book phòng trên website.
	+ Chọn loại phòng và giá phòng phù hợp với nhu cầu của khách hàng.
	+ Đặt phòng.
	+ Hiển Thị Danh Sách Phòng.
	+ Các khuyến mãi hiện có của homeStayQT
	+ Các dịch vụ cung cấp của homeStayQT
	+ Trang liên hệ.<br>
	2.Admin
	+ Trang admin.
	+ Quản lý phòng.
	+ Quản lý dịch vụ.<br>
	3.Giao diện
	- Xây dưng giao diện phù hợp với mục đích, yêu cầu của trang web.
## Công nghệ sử dụng
	+ PHP MVC
	+ MySQL
	+HTML/CSS/JavaScript
	+Bootstrap.

##  Hướng dẫn cài đặt và sử dụng công cụ
Đầu tiên ta vào link github: https://github.com/nguyenthongth/QuanLyHomeStay_Military sau đó click vào nút code **->** Download ZIP

<p align="center">
  <img alt="DownloadZIP" src="/images/DownloadZIP.png">
</p>

**Bước 1** Cài đặt và khởi động môi trường giả lập **XAMPP Control Panel**, khởi chạy **Star** 2 dịch vụ quan trọng là **Apache** và **MySQL**

<p align="center">
  <img alt="XAMPP" src="/images/XAMPP.jpg">
</p>

**Bước 2** Sau khi clone code về ta giải nén ra và đổi tên folder thành **BTL** chuyển Folder về thư mục htdoc của xampp C:\xampp\htdocs\, ta mở bằng một phần mềm soạn thảo code( vscode, sublime text…) 

<p align="center">
  <img alt="vscode" src="/images/vscode.jpg">
</p>

**Bước 3** Chúng ta mở một trình duyệt web vào http://localhost:8012/phpmyadmin/index.php (đổi tên port phù hợp với máy) để tạo một cơ sở dữ liệu mới tên btl và utf8mb4_vietnamese_ci(có thể thay đổi tên cơ sở dữ liệu và mã Unicode phù hợp với máy)

<p align="center">
  <img alt="vscode" src="/images/CSDL.jpg">
</p>

Sau đó click vào tên csdl vừa tạo chọn vào **Nhập** -> Choose File, tìm đến Folder BTL vừa giải nén có csdl **btl.sql** click chọn và thực hiện( đổi mã Unicode trong csdl btl.sql phù hợp với mã csdl vừa tạo ).

<p align="center">
  <img alt="vscode" src="/images/ChooseFile.jpg">
</p>

**Bước 4** Mở lại vscode mở folder core -> connectDB.php kiểm tra tên csdl vừa tạo ở bước 3 trùng với tên $dbname = “btl” và kiểm tra $passwrod = “”

<p align="center">
  <img alt="vscode" src="/images/connectDB.jpg">
</p>

**Bước 5** mở folder views -> admin_index.php, tại đây ở dòng 6 href điền địa chỉ port phù hợp với máy http://localhost:8012/btl/admin

<p align="center">
  <img alt="vscode" src="/images/admin_index.jpg">
</p>

Sau đó tiếp tục vào admin_login.php và home_index.php cũng thay đổi href phù hợp với port của máy http://localhost:8012/btl/login và http://localhost:8012/btl/home_index

admin_login.php

<p align="center">
  <img alt="vscode" src="/images/admin_login.jpg">
</p>

home_index.php

<p align="center">
  <img alt="vscode" src="/images/home_index.jpg">
</p>

**Bước 6** mở trình duyêt web lên và điền địa chỉ http://localhost:8012/btl  ( đổi port phù hợp với máy )

Giao diện trang web sẽ hiện ra  


<p align="center">
  <img alt="vscode" src="/images/tranghome.jpg">
</p>

<p align="center">
  <img alt="phong" src="/images/phong.jpg">
</p>

<p align="center">
  <img alt="dichvu" src="/images/dichvu.jpg">
</p>

<p align="center">
  <img alt="khuyenmai" src="/images/khuyenmai.jpg">
</p>

<p align="center">
  <img alt="vscode" src="/images/lienhe.jpg">
</p>

<p align="center">
  <img alt="vscode" src="/images/datphong.jpg">
</p>

**Bước 7** Thay đổi đường link để vào trang quản lý http://localhost:8012/BTL/admin trước khi vào trang quản lý phải đăng nhập tài khoản đăng nhập nằm trong csdl 

<p align="center">
  <img alt="csdladmin" src="/images/csdladmin.jpg">
</p>


<p align="center">
  <img alt="login" src="/images/login.jpg">
</p>

**Bước 8** Sau khi đăng nhập thành không ta sẽ vào được trang quản lý 

<p align="center">
  <img alt="trangadmin" src="/images/trangadmin.jpg">
</p>

Một số chức năng của trang quản lý
- Tin nhắn 

<p align="center">
  <img alt="trangadmin" src="/images/tinnhan.jpg">
</p>

- đặt phòng

<p align="center">
  <img alt="trangadmin" src="/images/datphong.jpg">
</p>

- phòng
+ thêm phòng mới

<p align="center">
  <img alt="trangadmin" src="/images/themphongmoi.jpg">
</p>

+ xem danh sách phòng

<p align="center">
  <img alt="trangadmin" src="/images/xemdanhsachphong.jpg">
</p>


