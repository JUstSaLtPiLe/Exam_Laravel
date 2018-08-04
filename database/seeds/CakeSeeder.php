<?php

use Illuminate\Database\Seeder;

class CakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('cakes') -> truncate();
        \Illuminate\Support\Facades\DB::table('cakes') -> insert([
            [
                'name' => 'Lean yeast bread',
                'type' => 'Bread',
                'price' => '3',
                'quantity' => '1000',
                'description' => 'Là loại bánh mì thường thành phần chỉ có bột và nước, có thể có dùng men hoặc không dùng men, vì thế có loại bánh mì cần qua quá trình ủ nở lên men và có loại không qua quá trình này.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-mi.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Rich yeast bread',
                'type' => 'Bread',
                'price' => '3',
                'quantity' => '1000',
                'description' => 'Đây là những loại bánh mì ngoài bột, nước, men, có sử dụng thêm các thành phần khác như đường, chất béo, sữa, bột sữa, vì thế bánh mì có thêm nhiều mùi vị thơm ngon và kết cấu khác với bánh mì thường.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/Ten-goi-cac-loai-banh-phuong-Tay-10.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Muffins',
                'type' => 'Quick Bread',
                'price' => '4',
                'quantity' => '3000',
                'description' => 'Có dạng giống chiếc bánh nhỏ hình cốc, có thể được để trong cốc giấy hoặc không cần. Muffins ngọt hoặc mặn đều có và không ăn cùng với kem (icing/frosting).',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/Ten-goi-cac-loai-banh-phuong-Tay-4.jpg'
            ],
            [
                'name' => 'Scone',
                'type' => 'Quick Bread',
                'price' => '4',
                'quantity' => '3000',
                'description' => 'Có dạng hình nón, hình tam giác bẹt.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2017/03/fixed-banh-mut-qua-333.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Loaf',
                'type' => 'Quick Bread',
                'price' => '3',
                'quantity' => '1000',
                'description' => 'Có hình khối chữ nhật.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-hat-popp.-333y.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Coffee Cake',
                'type' => 'Quick Bread',
                'price' => '6',
                'quantity' => '5000',
                'description' => 'làm với khuôn tròn, vuông, chữ nhật, vv.. là các loại bánh phù hợp để ăn khi uống trà, trong những bữa tea break.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2017/03/Ten-goi-cac-loai-banh-phuong-Tay-9-fixed.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Doughnuts',
                'type' => 'Non-Grilled Bread',
                'price' => '3',
                'quantity' => '5000',
                'description' => 'Là bánh ngọt có hình bánh xe tròn, làm chín bằng cách rán ngập dầu. Hiện nay có thêm doughnut làm bằng phương pháp nướng để hạn chế dầu mỡ trong bánh. Donut thường được trang trí thêm bằng kẹo, đường, hoa quả khô, socola, hạnh nhân và các loại hạt ở trên bề mặt bánh khiến chúng ngon và hấp dẫn hơn.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-mi-donut-333.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Pancake',
                'type' => 'Non-Grilled Bread',
                'price' => '5',
                'quantity' => '4000',
                'description' => 'Là bánh rán chảo làm chín bằng cách quét lớp dầu/bơ mỏng lên mặt chảo, bánh dẹt, mỏng. Có nhiều loại pancake với các vị khác nhau. Pancake được ăn kèm với bơ và maple syrup (siro của cây lá phong), hoa quả tươi và kem tươi.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/Ten-goi-cac-loai-banh-phuong-Tay-8.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Crepe',
                'type' => 'Non-Grilled Bread',
                'price' => '5',
                'quantity' => '3000',
                'description' => 'Là loại bánh gần giống như pancake nhưng được tráng mỏng hơn rất nhiều. Crepe thường được ăn cùng các loại mứt quả, hoa quả tươi, kem tươi, siro.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-crepe-333.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Fritters',
                'type' => 'Non-Grilled Bread',
                'price' => '2',
                'quantity' => '5000',
                'description' => 'Là loại bánh có vị ngọt và mặn tùy nguyên liệu sử dụng, không có hình dạng cố định, làm chín bằng rán ngập dầu.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2017/03/fixed-banh-tao-chien-333.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Waffles',
                'type' => 'Non-Grilled Bread',
                'price' => '6',
                'quantity' => '2000',
                'description' => 'Là bánh có dạng mỏng, dẹt và thường làm vào khuôn riêng. Waffles cũng được ăn kèm với hoa quả tươi, kem tươi, mứt quả.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-waffer.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Pie',
                'type' => 'Bread',
                'price' => '10',
                'quantity' => '1000',
                'description' => 'Là loại bánh vỏ kín có chứa nhân bên trong, tất cả gọi chung là vỏ pie. Bột cho vỏ pie được chia làm 2 phần, 1 phần cán mỏng làm đế, xếp nhân bên trong, rồi phần còn lại cán mỏng phủ lên trên, gắn kín các mép và xiên thủng vài chỗ trên vỏ bề mặt để hơi thoát ra trong quá trình nướng.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-pie-rau-cai-333.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Tart',
                'type' => 'Bread',
                'price' => '10',
                'quantity' => '1000',
                'description' => 'Là loại bánh ko có vỏ, nướng hở phần nhân. Tart là 1 dạng đặc biệt của pie mà ko cần 1 lớp vỏ bọc kín nhân.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2017/03/fixed-banh-tart-tao-333.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Chip Chocolate Cookie',
                'type' => 'Cookie',
                'price' => '2',
                'quantity' => '5000',
                'description' => 'Bánh cookie nướng socola chip',
                'images' => 'http://www.savourydays.com/wp-content/uploads/2015/12/chocolate-chip-cookies-610x350.jpg'
            ],
            [
                'name' => 'Craquelin',
                'type' => 'Cookie',
                'price' => '4',
                'quantity' => '2000',
                'description' => 'Craquelin như phiên bản mùa lạnh của món Su kem quen thuộc. Bởi vì trời đã lạnh rồi, cho nên bên ngoài lớp vỏ mỏng mềm mong manh của Su cần thêm một tấm áo khoác bông xù nữa. Tấm áo này có thể màu vàng nâu hay vàng.',
                'images' => 'http://www.savourydays.com/wp-content/uploads/2015/10/Craqueline-610x350.jpg'
            ],
            [
                'name' => 'Puff Pastry',
                'type' => 'Bread',
                'price' => '5',
                'quantity' => '3000',
                'description' => 'Là một loại bánh gồm cực kì nhiều lớp bột và bơ xen lẫn với nhau, tới vài trăm lớp. Sau khi nướng, bánh thường nhẹ và nở thành nhiều lớp bột, nếu khéo léo thậm chí chúng ta có thể tách chúng thành từng lớp.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2017/03/fixed-Ten-goi-cac-loai-banh-phuong-Tay-5.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Matcha Cream Puff',
                'type' => 'Cream Puff',
                'price' => '2',
                'quantity' => '5000',
                'description' => 'Là loại bánh  Bánh có vỏ mềm, hơi dai, rỗng ruột để nhồi các vị kem khác nhau ở bên trong.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/Ten-goi-cac-loai-banh-phuong-Tay-6.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Cheesecake',
                'type' => 'Non-Grilled Bread',
                'price' => '7',
                'quantity' => '2000',
                'description' => 'Là loại bánh thành phần chủ yếu là cream cheese. Bột mì được sử dụng rất ít hoặc không sử dụng.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2017/03/fixed-Oreo-cheesecake-cupcake-2-.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Almond Nut Cookie ',
                'type' => 'Cookie',
                'price' => '2',
                'quantity' => '5000',
                'description' => 'Bánh quy nhân hạnh nhân.',
                'images' => 'https://kokotaru.com/wp-content/uploads/2009/05/banh-quy-chanh-hanh-nhan-1.jpg?9d7bd4&9d7bd4'
            ],
            [
                'name' => 'Eclair',
                'type' => 'Cream Puff',
                'price' => '3',
                'quantity' => '1000',
                'description' => 'Là bánh làm từ công thức choux nhưng được tạo hình dài và thon. Bánh được xẻ đôi để nhồi kem vào giữa, mặt trên bánh nhúng trong chocolate chảy, hương vị chiếc bánh thì không khác gì chiếc mini cream puff trừ mùi vị chocolate đậm hơn..',
                'images' => 'https://kokotaru.com/wp-content/uploads/image3/IMG_3769.jpg?9d7bd4&9d7bd4'
            ],
        ]);
    }
}
