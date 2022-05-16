<?php

use Illuminate\Database\Seeder;
use App\Flower;
class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flowers = [
            [
                'name' => 'Red Roses Bouquet',
                'flower_type_id' => 1,
                'price' => 599000,
                'description' => "This beautiful rose bouquet is an all time favorite at Flower Chimp. No matter if for Valentine's Day, Anniversaries or Birthdays, this gorgeous arrangement never fails to succeed!",
                'stock' => 77,
                'image_path' => 'flower/68ef723e-aac6-4bda-b70b-86d04705d63b.jpg'
            ],
            [
                'name' => 'Lavish Lilies',
                'flower_type_id' => 2,
                'price' => 359000,
                'description' => "Be still my heart! What an impression you'll make when you send her this gorgeous array of red roses and fragrant pink lilies in a classic reception vase.",
                'stock' => 23,
                'image_path' => 'flower/7946acc7-9d5c-413b-a182-23b1be1fc6b3.png'
            ],
            [
                'name' => 'Rose Merah',
                'flower_type_id' => 1,
                'price' => 35000,
                'description' => "Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar",
                'stock' => 7,
                'image_path' => 'flower/9399b8d7-a483-4223-95a0-51a72aefcdb0.jpg'
            ],
            [
                'name' => 'Chantilly Pink Roses',
                'flower_type_id' => 1,
                'price' => 750000,
                'description' => "Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar",
                'stock' => 48,
                'image_path' => 'flower/d1a948e7-8856-449f-9ffa-cf91293c92c7.jpg'
            ],
            [
                'name' => 'Romance of Roses',
                'flower_type_id' => 1,
                'price' => 899000,
                'description' => "Classic Urn Vase, Foliage: Variegated Pittosporum, White Mini Sweetheart Or Spray Roses, Red Mini Sweetheart Or Spray Roses, Pink Mini Sweetheart Or Spray Roses, Bupleurum.",
                'stock' => 48,
                'image_path' => 'flower/0610b1db-ea7f-4f1f-b878-16eba99b57b6.jpg'
            ],
            [
                'name' => 'Red Roses Bouquet L',
                'flower_type_id' => 1,
                'price' => 599000,
                'description' => "This beautiful rose bouquet is an all time favorite at Flower Chimp. No matter if for Valentine's Day, Anniversaries or Birthdays, this gorgeous arrangement never fails to succeed!",
                'stock' => 77,
                'image_path' => 'flower/68ef723e-aac6-4bda-b70b-86d04705d63b.jpg'
            ],
            [
                'name' => 'Lavish Lilies L',
                'flower_type_id' => 2,
                'price' => 359000,
                'description' => "Be still my heart! What an impression you'll make when you send her this gorgeous array of red roses and fragrant pink lilies in a classic reception vase.",
                'stock' => 23,
                'image_path' => 'flower/7946acc7-9d5c-413b-a182-23b1be1fc6b3.png'
            ],
            [
                'name' => 'Rose Merah L',
                'flower_type_id' => 1,
                'price' => 35000,
                'description' => "Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar",
                'stock' => 7,
                'image_path' => 'flower/9399b8d7-a483-4223-95a0-51a72aefcdb0.jpg'
            ],
            [
                'name' => 'Chantilly Pink Roses L',
                'flower_type_id' => 1,
                'price' => 750000,
                'description' => "Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar",
                'stock' => 48,
                'image_path' => 'flower/d1a948e7-8856-449f-9ffa-cf91293c92c7.jpg'
            ],
            [
                'name' => 'Romance of Roses L',
                'flower_type_id' => 1,
                'price' => 899000,
                'description' => "Classic Urn Vase, Foliage: Variegated Pittosporum, White Mini Sweetheart Or Spray Roses, Red Mini Sweetheart Or Spray Roses, Pink Mini Sweetheart Or Spray Roses, Bupleurum.",
                'stock' => 48,
                'image_path' => 'flower/0610b1db-ea7f-4f1f-b878-16eba99b57b6.jpg'
            ],
            [
                'name' => 'Red Roses Bouquet XL',
                'flower_type_id' => 1,
                'price' => 599000,
                'description' => "This beautiful rose bouquet is an all time favorite at Flower Chimp. No matter if for Valentine's Day, Anniversaries or Birthdays, this gorgeous arrangement never fails to succeed!",
                'stock' => 77,
                'image_path' => 'flower/68ef723e-aac6-4bda-b70b-86d04705d63b.jpg'
            ],
            [
                'name' => 'Lavish Lilies XL',
                'flower_type_id' => 2,
                'price' => 359000,
                'description' => "Be still my heart! What an impression you'll make when you send her this gorgeous array of red roses and fragrant pink lilies in a classic reception vase.",
                'stock' => 23,
                'image_path' => 'flower/7946acc7-9d5c-413b-a182-23b1be1fc6b3.png'
            ],
            [
                'name' => 'Rose Merah XL',
                'flower_type_id' => 1,
                'price' => 35000,
                'description' => "Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar",
                'stock' => 7,
                'image_path' => 'flower/9399b8d7-a483-4223-95a0-51a72aefcdb0.jpg'
            ],
            [
                'name' => 'Chantilly Pink Roses XL',
                'flower_type_id' => 1,
                'price' => 750000,
                'description' => "Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar",
                'stock' => 48,
                'image_path' => 'flower/d1a948e7-8856-449f-9ffa-cf91293c92c7.jpg'
            ],
            [
                'name' => 'Romance of Roses XL',
                'flower_type_id' => 1,
                'price' => 899000,
                'description' => "Classic Urn Vase, Foliage: Variegated Pittosporum, White Mini Sweetheart Or Spray Roses, Red Mini Sweetheart Or Spray Roses, Pink Mini Sweetheart Or Spray Roses, Bupleurum.",
                'stock' => 48,
                'image_path' => 'flower/0610b1db-ea7f-4f1f-b878-16eba99b57b6.jpg'
            ]
        ];

        Flower::insert($flowers);
    }
}
