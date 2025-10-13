<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Hàm chạy khi migrate (tạo bảng).
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID tự động
            $table->string('name'); // Tên sản phẩm
            $table->text('description')->nullable(); // Mô tả sản phẩm
            $table->decimal('price', 10, 2); // Giá (VD: 150000.00)
            $table->string('image')->nullable(); // Tên/đường dẫn ảnh
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Hàm rollback (xóa bảng nếu rollback).
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
