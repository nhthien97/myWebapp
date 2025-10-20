# myWebapp
bài Giữa kì 
Dự án web bán gấu bông 
1. Sơ đồ cơ sở dữ liệu (ERD)
<img width="1178" height="625" alt="image" src="https://github.com/user-attachments/assets/ec4cc5a8-bf4a-480b-aaba-a7f5555f7b2d" />

2. Luồng hoạt động chính (Use Case Flow)
+ Khách hàng

Đăng ký / Đăng nhập

Xem danh sách gấu bông (ProductController@index)

Xem chi tiết sản phẩm (ProductController@show)

Thêm sản phẩm vào giỏ (CartController@store)

Kiểm tra giỏ hàng (CartController@index)

Thanh toán và tạo đơn hàng (OrderController@store)

Theo dõi trạng thái đơn hàng (OrderController@show)

+ Quản trị viên

Đăng nhập admin (AuthController@login)

Quản lý sản phẩm (ProductController@create/update/delete)

Quản lý danh mục (CategoryController)

Quản lý đơn hàng (OrderController@index/update)
3. Cấu trúc thư mục Laravel
app/
├─ Http/
│  ├─ Controllers/
│  │  ├─ ProductController.php
│  │  ├─ CartController.php
│  │  ├─ OrderController.php
│  │  └─ AuthController.php
│
├─ Models/
│  ├─ Product.php
│  ├─ User.php
│  ├─ Order.php
│  ├─ OrderItem.php
│  └─ Category.php
|
resources/
├─ views/
│  ├─ products/
│  │   ├─ index.blade.php
│  │   └─ show.blade.php
│  ├─ cart/
│  ├─ orders/
│  └─ admin/

routes/
└─ web.php
4.Tính năng mở rộng (Đang phát triển)

Tìm kiếm sản phẩm theo tên / danh mục

Đánh giá sản phẩm

Quản lý tồn kho

Tích hợp thanh toán (VNPay, Momo…)
