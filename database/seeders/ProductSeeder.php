<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Get the IDs of categories for Men, Women, and Kids
        // $categories = Category::whereIn('category_name', ['Men', 'Women', 'Kids'])->pluck('id')->toArray();

        $descriptions = [
            "Experience the ultimate comfort and style with our latest collection of shoes. Made from high-quality materials, these shoes are perfect for both casual and formal occasions.",
            "Elevate your workout routine with our premium fitness gear. Designed for durability and performance, our products will help you reach your fitness goals in style.",
            "Transform your living space with our modern furniture collection. From sleek sofas to elegant dining sets, we have everything you need to create the perfect home.",
            "Discover the latest trends in fashion with our stylish clothing range. Whether you're dressing up for a night out or keeping it casual, we have the perfect outfit for every occasion.",
            "Indulge in luxury with our exquisite collection of skincare products. Formulated with natural ingredients, our skincare range will leave your skin feeling refreshed and rejuvenated.",
        ];

        $colors = ['White', 'Black', 'Blue', 'Red', 'Green'];
        $sizes = range(35, 45);

        // for ($i = 1; $i <= 100; $i++) {
        //     $product = new Product();
        //     $product->name = "Nike Shoe $i";
        //     $product->category_id = Arr::random([1, 2, 3]);
        //     $product->price = rand(50, 200); 
        //     $product->description = "Description of Nike Shoe $i.\n" . Arr::random($descriptions);
        //     $product->total_quantity = 1000; 
        //     $product->color = Arr::random($colors);
        //     $product->size = Arr::random($sizes);
        //     $product->image = "nike_shoe_$i.jpg";
        //     $product->save();
        // }

        $dir = public_path('images/Images_db_1'); // Đường dẫn đến thư mục
        $files = scandir($dir); // Lấy tất cả các tệp trong thư mục


        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue; // Bỏ qua . và ..

            $filename = pathinfo($file, PATHINFO_FILENAME); // Lấy tên tệp không có phần mở rộng
            $filename = preg_replace('/-shoes-\d+/', '', $filename); // Loại bỏ "-shoes-" và các chữ số theo sau

            $product = new Product();
            $product->name = "Nike Shoe $filename"; // Sử dụng tên tệp như là tên sản phẩm
            $product->category_id = Arr::random([1, 2, 3]);
            $product->price = rand(50, 200); 
            $product->description = "Description of Nike Shoe $filename.\n" . Arr::random($descriptions);
            $product->total_quantity = 1000; 
            $product->color = Arr::random($colors);
            $product->size = Arr::random($sizes);
            $product->image = "images/Images_db_1/" . $file; // Thêm đường dẫn tệp vào cơ sở dữ liệu
            $product->save();
        }
    
    }
}
