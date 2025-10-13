@extends('layouts.app')

@section('content')
    <h2>🛒 Giỏ Hàng</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: left;">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $id => $item)
                    @php
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>
                            @if($item['image'])
                                <img src="{{ asset('storage/' . $item['image']) }}" width="60">
                            @else
                                (Không có ảnh)
                            @endif
                        </td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'], 0) }} VND</td>
                        <td>{{ number_format($subtotal, 0) }} VND</td>
                        <td>
                            <form action="{{ url('/cart/remove/' . $id) }}" method="POST">
                                @csrf
                                <button type="submit" onclick="return confirm('Xoá sản phẩm này?')">Xoá</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 style="margin-top: 20px;">Tổng cộng: {{ number_format($total, 0) }} VND</h3>
    @else
        <p>🪹 Giỏ hàng đang trống.</p>
    @endif
@endsection
