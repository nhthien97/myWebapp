<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products = [
        [
            'name' => 'Gấu Nâu Nghệ Thuật',
            'price' => '120.000đ',
            'image' => 'https://img2.thuthuat123.com/uploads/2020/03/23/hinh-anh-gau-bong-dep-va-nghe-thuat_103143470.jpg',
        ],
        [
            'name' => 'Gấu Bing Hồng',
            'price' => '150.000đ',
            'image' => 'https://tse1.mm.bing.net/th/id/OIP.todAMdz-yM3mbUpkjXCMHwHaEK?pid=Api&P=0&h=220',
        ],
        [
            'name' => 'Gấu Xám Trắng',
            'price' => '130.000đ',
            'image' => 'https://img1.kienthucvui.vn/uploads/2020/08/07/anh-gau-bong-dep_044459709.jpg',
        ],
        [
            'name' => 'Gấu Cute Trắng',
            'price' => '140.000đ',
            'image' => 'https://img1.kienthucvui.vn/uploads/2021/01/13/anh-gau-bong-dep-cute_030009195.jpg',
        ],
        [
            'name' => 'Gấu Cover Tình Yêu',
            'price' => '160.000đ',
            'image' => 'https://vanhoadoisong.vn/wp-content/uploads/2022/05/hinh-nen-gau-bong-cover-thumb.jpg',
        ],
        [
            'name' => 'Gấu Happy To You',
            'price' => '125.000đ',
            'image' => 'https://thuthuatnhanh.com/wp-content/uploads/2020/03/hinh-anh-gau-bong-trang-happy-to-you.jpg',
        ],
        [
            'name' => 'Logo Gấu Độc Đáo',
            'price' => '170.000đ',
            'image' => 'https://anhminhgift.vn/upload/blog/thumbnail/thiet-ke-logo-gau-bong-doc-dao-cho-thuong-hieu-cua-ban.jpg',
        ]
    ];

    // Trang chủ
    public function index()
    {
        $products = $this->products;
        return view('home', compact('products'));
    }

    // Tìm kiếm sản phẩm
    public function search(Request $request)
    {
        $query = strtolower($request->input('keyword'));
        $products = collect($this->products)->filter(function ($item) use ($query) {
            return str_contains(strtolower($item['name']), $query);
        });

        return view('home', ['products' => $products]);
    }
}
