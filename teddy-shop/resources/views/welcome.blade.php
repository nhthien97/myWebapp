<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Teddy's Toy Chest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f3f6fb; font-family: sans-serif; }
        .product-card { background: #fff; padding: 15px; border-radius: 12px; text-align: center; height: 100%; }
        .product-image { width: 100%; height: 150px; object-fit: cover; margin-bottom: 10px; }
        .cart-box { background: #fff; padding: 20px; border-radius: 12px; }
        .header-logo { width: 50px; border-radius: 50%; }
        .icon-cart { width: 32px; }
    </style>
</head>
<body>
<div class="container py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
            <img src="https://anhminhgift.vn/upload/blog/thumbnail/thiet-ke-logo-gau-bong-doc-dao-cho-thuong-hieu-cua-ban.jpg" class="header-logo" alt="Logo">
            <div class="ms-3">
                <h5 class="mb-0">Teddy's Toy Chest</h5>
                <small class="text-muted">Cửa hàng thú bông dễ thương</small>
            </div>
        </div>
        <!-- Form tìm kiếm -->
        <form action="{{ route('search') }}" method="GET" class="d-flex flex-grow-1 mx-4">
            <input type="text" name="keyword" class="form-control me-2" placeholder="Tìm kiếm thú bông..." value="{{ request('keyword') }}">
            <button class="btn btn-outline-primary" type="submit">Tìm</button>
        </form>
        <div>
            <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="Giỏ hàng" class="icon-cart">
        </div>
    </div>

    <div class="row">
        <!-- Danh sách sản phẩm -->
        <div class="col-md-8">
            <h5 class="mb-3">
                @if(request('keyword'))
                    Kết quả cho: "<strong>{{ request('keyword') }}</strong>"
                @else
                    Sản phẩm Mới Nhất
                @endif
            </h5>
            <div class="row g-3">
                @forelse($products as $product)
                    <div class="col-md-4 d-flex">
                        <div class="product-card shadow-sm w-100">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="product-image">
                            <div><strong>Tên:</strong> {{ $product['name'] }}</div>
                            <div><strong>Giá:</strong> {{ $product['price'] }}</div>
                            <div class="mt-2">
                                <button class="btn btn-outline-danger btn-sm">Xem chi tiết</button>
                                <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning">Không tìm thấy sản phẩm phù hợp.</div>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Giỏ hàng -->
        <div class="col-md-4">
            <div class="cart-box shadow-sm mb-4">
                <h6>🛒 Giỏ hàng yêu quý</h6>
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between border-bottom py-2">
                        <span>🧸 Gấu kỳ lân hồng</span>
                        <strong>35.000đ</strong>
                    </li>
                    <li class="d-flex justify-content-between border-bottom py-2">
                        <span>🧸 Gấu mờ blur</span>
                        <strong>35.000đ</strong>
                    </li>
                    <li class="d-flex justify-content-between border-bottom py-2">
                        <span>🧸 Gấu hưu hồng</span>
                        <strong>35.000đ</strong>
                    </li>
                </ul>
            </div>

            <div class="cart-box shadow-sm">
                <h6>🚚 Theo dõi đơn hàng</h6>
                <input type="text" class="form-control mb-2" placeholder="Nhập mã đơn hàng">
                <button class="btn btn-primary w-100">Thanh kiểm</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
