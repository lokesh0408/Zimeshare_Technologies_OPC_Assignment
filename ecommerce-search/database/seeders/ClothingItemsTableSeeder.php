<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothingItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clothing_items')->insert([
            ['name' => 'Aim Factory Plain Boys blue Cotton Shirt', 'image_url' => 'https://5.imimg.com/data5/LE/TN/MY-48128201/mens-cotton-shirt-500x500.jpg', 'price' => 220.00, 'brand' => 'Lion Traders'],
            ['name' => 'Full Sleeves Plain Icon Men Red Cotton Shirts', 'image_url' => 'https://5.imimg.com/data5/SELLER/Default/2021/12/KT/TM/LD/94876657/img-6246-500x500.jpg', 'price' => 380.00, 'brand' => 'Denim Co.'],
            ['name' => 'White Colour Full Sleeves Printed shirt', 'image_url' => 'https://tiimg.tistatic.com/fp/1/007/678/white-colour-full-sleeves-printed-shirt-for-festival-596.jpg', 'price' => 303.00, 'brand' => 'Cotton World'],
            ['name' => 'Mens Blue Faded Denim Jeans', 'image_url' => 'https://5.imimg.com/data5/OR/QO/YQ/SELLER-52896215/men-blue-jeans-500x500.jpg', 'price' => 425.00, 'brand' => 'Denim Co.'],
            ['name' => 'Mid rise flared jeans, medium blue', 'image_url' => 'https://cdn.laredoute.com/cdn-cgi/image/width=500,height=500,fit=pad,dpr=1/products/2/8/b/28bc33cd47940193728fed0f949d84c8.jpg', 'price' => 999.00, 'brand' => 'Only'],
            ['name' => 'White TShirt', 'image_url' => 'https://4.imimg.com/data4/IY/VD/MY-2/cool-and-cheap-white-t-shirts-500x500.jpg', 'price' => 79.00, 'brand' => 'Denim Co.'],
            ['name' => 'Men tShirt', 'image_url' => 'https://shopdeworld.com/image/cache/catalog/mens/mens-graphic-printed-t-shirt-only-snow-i-like-white-500x500.jpg', 'price' => 239.00, 'brand' => 'Lion Traders'],
            ['name' => 'Just Married tShirt', 'image_url' => 'https://m.media-amazon.com/images/I/414Ac11RIiL.jpg', 'price' => 499.00, 'brand' => 'Only'],
            ['name' => 'Mens Formal Black Pants', 'image_url' => 'https://5.imimg.com/data5/NB/RC/MY-64222822/mens-printed-cotton-pant6239137695-500x500.jpg', 'price' => 390.00, 'brand' => 'Denim Co.'],
            ['name' => 'Casual White pants', 'image_url' => 'https://5.imimg.com/data5/IV/HO/EN/SELLER-2571290/2-500x500.JPG', 'price' => 560.00, 'brand' => 'Only'],
            ['name' => 'Plain Grey Color Pants', 'image_url' => 'https://5.imimg.com/data5/TQ/GT/MY-70166266/mens-stylish-pant-500x500.jpg', 'price' => 452.00, 'brand' => 'Denim Traders'],
            ['name' => 'Party Wear Dress', 'image_url' => 'https://5.imimg.com/data5/SELLER/Default/2023/10/351795258/WV/SO/FN/41101389/designer-georgette-digital-print-work-only-gown-party-wear-wholesdale-price-ethnic-garment-1-500x500.jpeg', 'price' => 1380.00, 'brand' => 'Denim Co.'],
            ['name' => 'Summer Dress', 'image_url' => 'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/24/7981791/1.jpg?9453', 'price' => 1680.00, 'brand' => 'Only'],
            ['name' => 'Gym Clothes', 'image_url' => 'https://only-approved.com/wp-content/uploads/barbell-club-hulk-cut-tee-red-2-500x500.jpg', 'price' => 380.00, 'brand' => 'Denim Co.'],
            ['name' => 'Black Hoodie', 'image_url' => 'https://5.imimg.com/data5/ECOM/Default/2023/3/294245757/AX/ND/UM/50364137/h99db4b745c0845848d216d94fc55e1f5t-500x500.jpg', 'price' => 380.00, 'brand' => 'Denim Co.'],
            ['name' => 'Sports Sneakers', 'image_url' => 'https://5.imimg.com/data5/ECOM/Default/2022/12/GN/RG/WF/78653235/8be1e01c0e9cd338f28bd881aa379aaa-500x500.jpg', 'price' => 2380.00, 'brand' => 'Denim Co.'],
            ['name' => 'Men shoes', 'image_url' => 'https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/Z/V/199326_1666179389.jpg', 'price' => 4380.00, 'brand' => 'Konga Online Shopping'],
        ]);
    }
}
