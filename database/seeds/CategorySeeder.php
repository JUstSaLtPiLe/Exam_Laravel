<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories') -> truncate();
        \Illuminate\Support\Facades\DB::table('categories') -> insert([
            [
                'name' => 'Bread',
                'description' => "Loại bánh thông dụng được làm từ nước, bột mì lên men, và muối. Sau đó mang ra nướng. Bạn có thể ăn bánh mì ở bất cứ đâu, có thể ăn trong văn phòng, ăn trong quán café, ăn ngoài vỉa hè",
                'images' => 'http://banhminguyen.com/wp-content/uploads/2014/12/2407.jpg',
            ],
            [
                'name' => 'Quick Bread',
                'description' => 'Đây là tên gọi chung cho các loại bánh dạng bánh mì nhưng không qua công đoạn ủ và lên men tự nhiên (khoảng vài tiếng) mà dùng các chất hóa học gây tác dụng nở nhanh, vì thế làm rất nhanh. Quick bread cũng thường có kết cấu mềm hơn và “rich” hơn, không có được độ dai như với bánh mì nở bằng men tự nhiên.',
                'images' => 'http://cdn-image.myrecipes.com/sites/default/files/styles/medium_2x/public/image/recipes/ck/09/06/quickbread-ck-1898572-x.jpg?itok=r2LEDwQu',
            ],
            [
                'name' => 'Non-Grilled Bread',
                'description' => 'Đây là những loại bánh dùng phương pháp rán bằng chất béo. Các loại phổ biến:',
                'images' => 'http://www.savourydays.com/wp-content/uploads/2016/11/c%C3%A1ch-l%C3%A0m-b%C3%A1nh-r%C3%A1n-l%C3%BAc-l%E1%BA%AFc-banner.jpg',
            ],
            [
                'name' => 'Cookie',
                'description' => 'Cookies là loại bánh ăn thường ngày trong gia đình, thường dùng kèm với trà hoặc cho trẻ em ăn vặt. Cookies rất dễ làm và có rất nhiều loại. Linh nghĩ rằng các mẹ nên làm sẵn ở nhà nhiều lọ cookies khác nhau, phục vụ cho chồng uống trà và cho các bé ăn tạm khi đói, hoặc ăn chơi vài cái trong ngày.',
                'images' => 'https://images-gmi-pmc.edge-generalmills.com/5504a4d4-ac62-4e63-b475-563ba492ccff.jpg',
            ],
            [
                'name' => 'Cream Puff',
                'description' => 'Bánh su kem là tên gọi tiếng Việt của bánh Choux có nguồn gốc từ Pháp. Vỏ bánh choux là một trong những loại pastry rất nổi tiếng. Bánh có vỏ mềm, hơi dai, rỗng ruột để nhồi các vị kem khác nhau ở bên trong.',
                'images' => 'https://pioneerwoman.files.wordpress.com/2017/06/how-to-make-cream-puffs-3.jpg',
            ]
        ]);
    }
}
