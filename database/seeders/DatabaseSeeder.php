<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('tbl_customer')->insert([
            [
                'customer_avatar' => 'avt.jpg',
                'customer_name' => 'Châu Hoàng Long',
                'email' => 'hoanglong1407b@gmail.com',
                'customer_username' => 'hoanglong1407b',
                'password' => bcrypt('Long1234'),
                'customer_phone' => '0794690384',
                'status' => '0',
            ]
        ]);

        DB::table('tbl_admin')->insert([
            [
                'admin_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'admin_phone' => '070123456',

            ]
        ]);

        // DB::table('tbl_user')->insert([
        //     [
        //         'user_name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'password' => bcrypt('1234'),
        //         'user_phone' => '070123456',
        //     ]
        // ]);
        // // =================================== TẠO DỮ LIỆU CHO BRAND ============================================== 

        DB::table('tbl_brand')->insert([
            [
                'brand_name' => 'Nhà xuất bản Kim Đồng',
                'brand_content' => 'Nhà xuất bản Kim Đồng là nhà xuất bản chuyên về sách văn học thiếu nhi của Việt Nam được thành lập vào ngày 15 tháng 6 năm 1956 tại Hà Nội.',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nhà xuất bản Trẻ',
                'brand_content' => 'Nhà xuất bản Trẻ là một đơn vị chuyên xuất bản và phát hành sách nhiều thể loại có trụ sở chính tại Thành phố Hồ Chí Minh.',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nhà xuất bản Giáo dục Việt Nam',
                'brand_content' => 'Nhà xuất bản Trẻ là một đơn vị chuyên xuất bản và phát hành sách nhiều thể loại có trụ sở chính tại Thành phố Hồ Chí Minh. ',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ]
        ]);

        // // =================================== TẠO DỮ LIỆU CHO CATEGORY ==============================================

        DB::table('tbl_category')->insert([
            [
                'category_name' => 'Tiểu thuyết, hồi ký',
                'status' => 1,
            ],
            [
                'category_name' => 'Sách Thiếu nhi',
                'status' => 1,
            ],

            [
                'category_name' => 'Chính trị - Triết học Đông Tây',
                'status' => 1,
            ],
            [
                'category_name' => 'Sách Kinh tế',
                'status' => 1,
            ],

        ]);

        // // =================================== TẠO DỮ LIỆU CHO PRODUCT ==============================================

        DB::table('tbl_product')->insert([
            
            
            [
                'product_name' => 'The Beauty Within',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Samantha Donald',
                'product_img' => 'thebeautyWithin.jpg',
                'product_quantity' => 11,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Văn hóa Thăng Long',
                'brand_id' => '2',
                'category_id' => '4',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhuận Ngọc',
                'product_img' => 'vanhoathanglong.png',
                'product_quantity' => 19,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Điều Bí Mật - The Secret',
                'brand_id' => '1',
                'category_id' => '3',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 239000,
                'product_author' => 'Quảng Văn',
                'product_img' => 'DieuBiMat.jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => '24 Ngày Lênh Đênh',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 440000,
                'product_author' => 'Phạm Mai Thanh',
                'product_img' => '24NgayLenhDenh.png',
                'product_quantity' => 9,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đời Đơn Giản Khi Ta Đơn Giản',
                'brand_id' => '3',
                'category_id' => '3',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 120000,
                'product_author' => 'Xuân Nghuyễn',
                'product_img' => 'doi-don-gian-khi-ta-don-gian.jpg',
                'product_quantity' => 12,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Dế mèn phiêu lưu ký',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Tạ Huy Long',
                'product_img' => 'bia-sach2-9886.jpg',
                'product_quantity' => 30,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Bộ luật dân sự và văn bản hướng dẫn thi hành',
                'brand_id' => '1',
                'category_id' => '4',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản Lao động - Xã hội',
                'product_img' => 'body-2-Cong-Ly-2574-1416197358.jpg',
                'product_quantity' => 30,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Tô hoài Dế mèn phiêu lưu ký',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản văn hóa Thông tin',
                'product_img' => 'demen.jpg',
                'product_quantity' => 23,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Late Night Thoughts',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'VEE',
                'product_img' => 'latenighthough.jpg',
                'product_quantity' => 6,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Lunar Storm',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Terry Crosby',
                'product_img' => 'lunarstorm.jpeg',
                'product_quantity' => 9,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đại cường về Nhà nước và pháp luật',
                'brand_id' => '1',
                'category_id' => '3',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản đại học Quốc gia Hà Nội',
                'product_img' => 'sach_Tan_Nhat_Minh-669x1024.png',
                'product_quantity' => 40,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Sự tích bánh chưng bánh giày - Nhựt khánh',
                'brand_id' => '1',
                'category_id' => '2',
                'product_content' => 'Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh',
                'product_price' => 200000,
                'product_author' => 'Nhựt Khánh',
                'product_img' => 'bia-sach2-9886.jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,

            ],
            [
                'product_name' => 'Ai từng là con nít',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít ',
                'product_price' => 299000,
                'product_author' => 'Nhiều tác giả',
                'product_img' => 'aitunglaconnitjpg.jpg',
                'product_quantity' => 14,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'The delicate adornment',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of The delicate adornment book This is a content of The delicate adornment book This is a content of The delicate adornment book This is a content of The delicate adornment book This is a content of The delicate adornment book ',
                'product_price' => 349000,
                'product_author' => 'Dr.bob',
                'product_img' => 'artistic.png',
                'product_quantity' => 29,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Muốn nhanh thì phải Từ - Từ',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 139000,
                'product_author' => 'Anh ba xe ôm',
                'product_img' => 'bia-sach-hoc-vien-thiet-ke-viettamduc02.jpg',
                'product_quantity' => 8,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đủ Gần Mà Không Đau Đớn - Đủ Xa Mà Không Cô Đơn',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 299000,
                'product_author' => 'Hyenam Kim',
                'product_img' => 'DuGanDuXa.png',
                'product_quantity' => 102,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Hãy Là Chính Mình',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 112000,
                'product_author' => 'Trần Ngọc Xuân',
                'product_img' => 'HayLaChinhMinh.png',
                'product_quantity' => 25,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Hãy Nhớ Tên Anh Ấy',
                'brand_id' => '3',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 149000,
                'product_author' => 'Trần Hồng Quân',
                'product_img' => 'HayNhoTenAnhAy.png',
                'product_quantity' => 35,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Nhật Ký Thức Ăn',
                'brand_id' => '1',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'An An',
                'product_img' => 'nhatKyThucAn.png',
                'product_quantity' => 5,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Những Quý Cô Thời Trang',
                'brand_id' => '2',
                'category_id' => '4',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 249000,
                'product_author' => 'Nguyễn Lan Phương',
                'product_img' => 'NhungQuyCoThoiTrang.png',
                'product_quantity' => 14,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Sâu Vào Những Giấc Mơ',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 349000,
                'product_author' => 'Vũ Minh Thái',
                'product_img' => 'SauVaoNhungGiacMo.png',
                'product_quantity' => 19,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Sương Mù Nơi Rừng Rậm',
                'brand_id' => '3',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 289000,
                'product_author' => 'Mạnh Nam Huy',
                'product_img' => 'SuongMuNoiRungRam.png',
                'product_quantity' => 8,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Thời Trang Tiết Kiệm',
                'brand_id' => '1',
                'category_id' => '4',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 189000,
                'product_author' => 'Phương Khanh',
                'product_img' => 'ThoiTrangTietKiem.jpg',
                'product_quantity' => 55,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long ',
                'product_price' => 200000,
                'product_author' => 'Hoàng Long',
                'product_img' => '1 (3).jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,

            ],
            
        ]);
    }
}
