<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('districts') -> truncate();
        \Illuminate\Support\Facades\DB::table('districts') -> insert([
            [
                'name' => 'District 1',
                'city' => "HCM",
                'images' => 'http://5office.vn/wp-content/uploads/2015/11/van-phong-cho-thue-quan-1-5office.vn-3.jpg',
            ],
            [
                'name' => 'District 2',
                'city' => "HCM",
                'images' => 'http://5office.vn/wp-content/uploads/2015/11/van-phong-cho-thue-quan-1-5office.vn-3.jpg',
            ],[
                'name' => 'District 3',
                'city' => "HCM",
                'images' => 'http://5office.vn/wp-content/uploads/2015/11/van-phong-cho-thue-quan-1-5office.vn-3.jpg',
            ],[
                'name' => 'District 4',
                'city' => "HCM",
                'images' => 'http://5office.vn/wp-content/uploads/2015/11/van-phong-cho-thue-quan-1-5office.vn-3.jpg',
            ],[
                'name' => 'District 5',
                'city' => "HCM",
                'images' => 'http://5office.vn/wp-content/uploads/2015/11/van-phong-cho-thue-quan-1-5office.vn-3.jpg',
            ],[
                'name' => 'District 1',
                'city' => "HCM",
                'images' => 'http://5office.vn/wp-content/uploads/2015/11/van-phong-cho-thue-quan-1-5office.vn-3.jpg',
            ],
        ]);
    }
}
