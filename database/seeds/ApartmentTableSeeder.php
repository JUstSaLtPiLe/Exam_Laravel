<?php

use Illuminate\Database\Seeder;

class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments') -> truncate();
        \Illuminate\Support\Facades\DB::table('apartments') -> insert([
            [
                'name' => 'Apartment demo',
                'address' => 'District 1',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 2',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],            [
                'name' => 'Apartment demo',
                'address' => 'District 2',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],            [
                'name' => 'Apartment demo',
                'address' => 'District 3',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],            [
                'name' => 'Apartment demo',
                'address' => 'District 3',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],            [
                'name' => 'Apartment demo',
                'address' => 'District 4',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],            [
                'name' => 'Apartment demo',
                'address' => 'District 4',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 5',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 5',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 6',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 6',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 7',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 7',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 8',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],
            [
                'name' => 'Apartment demo',
                'address' => 'District 8',
                'price' => '15000',
                'information' => 'Apartment 1',
                'images' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/914/91481398.jpg'
            ],

        ]);
    }
}
