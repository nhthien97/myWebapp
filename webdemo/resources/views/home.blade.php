@extends('layouts.app')

@section('content')
    <h2>🧸 Danh sách Gấu Bông</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach ($products as $product)
            <div style="border: 1px solid #ddd; padding: 15px; width: 250px;">
                <div style="text-align: center;">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="150">
                    @else
                        <p>(Không có ảnh)</p>
                    @endif
                </div>

                <h3>{{ $product->name }}</h3>
                <p><strong>{{ number_format($product->price, 0) }} VND</strong></p>

                <form action="{{ url('/cart/add/' . $product->id) }}" method="POST" style="margin-bottom: 10px;">
                    @csrf
                    <button type="submit">🛒 Thêm vào giỏ</button>
                </form>

                <a href="{{ url('/product/' . $product->id) }}">🔍 Xem chi tiết</a>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 30px;">
        {{ $products->links() }}
    </div>
@endsection
