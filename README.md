# myWebapp
bài Giữa kì 
Dự án web bán gấu bông 
1. Sơ đồ cơ sở dữ liệu (ERD)
<img width="1178" height="625" alt="image" src="https://github.com/user-attachments/assets/ec4cc5a8-bf4a-480b-aaba-a7f5555f7b2d" />

2. Luồng hoạt động chính (Use Case Flow) - Web bán gấu bông
2.1 Khách hàng xem danh sách sản phẩm
Mô tả: Người dùng truy cập vào website và xem danh sách các gấu bông.
Dữ liệu liên quan: Bảng products
Các thao tác chính:
Truy vấn tất cả sản phẩm từ bảng products.
Hiển thị: tên, hình ảnh, giá.
2.2 Khách hàng chọn sản phẩm để đặt hàng
Mô tả: Người dùng chọn một hoặc nhiều sản phẩm và thêm vào giỏ hàng.
Dữ liệu liên quan: products, order_items (chưa lưu vào DB cho đến khi đặt hàng).
Các thao tác chính:
Thêm sản phẩm (product_id) + số lượng (quantity) vào danh sách tạm thời (localStorage/session/cart).
2.3 Khách hàng tiến hành đặt hàng (đang phát triển)
Mô tả: Người dùng nhập thông tin cá nhân và xác nhận đơn hàng.
Dữ liệu liên quan: orders, order_items
Các thao tác chính:
Tạo bản ghi mới trong bảng orders:
order_code (mã đơn hàng tự sinh, ví dụ: OD20251020001)
customer_name, customer_phone
total_price_number
Tạo nhiều bản ghi trong order_items, liên kết đến order_id và product_id tương ứng.
quantity, price_number theo từng sản phẩm.
3. Cấu trúc thư mục Laravel
teddy-shop/
├── app/
│   └── Http/Controllers/
│       ├── HomeController.php
│       ├── CartController.php
│       ├── ProductController.php
│       └── OrderController.php
│
├── app/Models/
│   ├── Product.php
│   ├── Order.php
│   └── OrderItem.php
│
├── database/
│   ├── migrations/
│   └── seeders/
│       └── ProductSeeder.php
│
├── resources/views/
│   ├── home.blade.php
│   ├── layouts/app.blade.php
│   └── auth/... (tự tạo bởi Laravel UI)
│
├── public/
│   └── css/style.css
│
├── routes/web.php
└── .env

4.Tính năng mở rộng (Đang phát triển)
Đánh giá sản phẩm
Quản lý tồn kho
Tích hợp thanh toán (VNPay, Momo…)
