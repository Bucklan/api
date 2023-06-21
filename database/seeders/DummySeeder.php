<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\File;
use App\Enums as Enums;
use App\Models\Genre;
use App\Models\HelpSection;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->cities as $city) {
            City::create($city);
        }
        foreach ($this->genres as $genre) {
            Genre::create($genre);
        }
        foreach ($this->categories as $category) {
            Category::create($category);
        }

//        $game = Product::create($this->games[0]);
//        $game->genres()->attach(2);
//
//        $game = Product::create($this->games[1]);
//        $game->genres()->attach(1);

//        Product::create($this->products[0]);
//        Product::create($this->products[1]);
//
//        $set = Product::create($this->sets[0]);
//        $set->subproducts()->attach([1, 2, 3, 4]);
//        $set = Product::create($this->sets[1]);
//        $set->subproducts()->attach([1, 3]);

        foreach ($this->prices as $price) {
            ProductPrice::create($price);
        }

        foreach ($this->files as $file) {
            File::create($file);
        }

//        foreach ($this->help_sections as $help_section) {
//            HelpSection::create($help_section);
//        }
    }

//    public array $help_sections = [
//        [
//            'name' => [
//                'ru' => 'Вопрос 1',
//                'kz' => 'Сурак 1',
//            ],
//            'content' => [
//                'ru' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
//                'kz' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
//            ],
//        ],
//        [
//            'name' => [
//                'ru' => 'Вопрос 2',
//                'kz' => 'Сурак 2',
//            ],
//            'content' => [
//                'ru' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
//                'kz' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
//            ],
//        ],
//    ];

    public array $cities = [
        [
            'name' => [
                'kz' => 'Алматы',
                'ru' => 'Алматы',
            ],
        ],
        [
            'name' => [
                'kz' => 'Астана',
                'ru' => 'Астана',
            ],
        ],
    ];

    public array $genres = [
        [
            'name' => [
                'kz' => 'Спорт',
                'ru' => 'Спорт',
            ],
        ],
        [
            'name' => [
                'kz' => 'Файтинг',
                'ru' => 'Файтинг',
            ],
        ],
        [
            'name' => [
                'kz' => 'Стратегия',
                'ru' => 'Стратегия',
            ],
        ],
    ];

    public array $categories = [
        [
            'city_id' => 1,
            'name' => [
                'ru' => 'Приставки',
                'kz' => 'Приставкалар',
            ],
        ],
        [
            'city_id' => 1,
            'name' => [
                'ru' => 'Сеты',
                'kz' => 'Сеттер',
            ],
        ],
        [
            'city_id' => 1,
            'name' => [
                'ru' => 'Телевизоры',
                'kz' => 'Теледидарлар',
            ],
        ],
        [
            'city_id' => 1,
            'name' => [
                'ru' => 'Джойстики',
                'kz' => 'Джойстиктар',
            ],
        ],
    ];

//    public array $games = [
//        [
//            'name' => 'Mortal Kombat 11',
//            'description' => [
//                'ru' => 'Mortal Kombat 11 - это одиннадцатая часть знаменитой серии файтингов, которая предлагает игрокам необычайно глубокую кастомизацию, улучшенный по сравнению с предыдущей частью движок, множество новых - и крайне брутальных - добиваний, а также новых и старых знакомых бойцов, многих из которых игроки знают более 20 лет',
//                'kz' => 'Mortal Kombat 11 - это одиннадцатая часть знаменитой серии файтингов, которая предлагает игрокам необычайно глубокую кастомизацию, улучшенный по сравнению с предыдущей частью движок, множество новых - и крайне брутальных - добиваний, а также новых и старых знакомых бойцов, многих из которых игроки знают более 20 лет'
//            ],
//            'type' => Enums\Product\Type::GAME,
//        ],
//        [
//            'name' => 'FIFA 54',
//            'description' => [
//                'ru' => 'FIFA 23 — компьютерная игра в жанре спортивного симулятора, 30-я в серии FIFA, разработанная компанией EA Vancouver под издательством Electronic Arts. Видеоигра вышла на ПК, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S и Nintendo Switch 30 сентября 2022 года',
//                'kz' => 'FIFA 23 — компьютерная игра в жанре спортивного симулятора, 30-я в серии FIFA, разработанная компанией EA Vancouver под издательством Electronic Arts. Видеоигра вышла на ПК, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S и Nintendo Switch 30 сентября 2022 года'
//            ],
//            'type' => Enums\Product\Type::GAME,
//        ],
//    ];

//    public array $products = [
//        [
//            'name' => 'Play Station 4',
//            'description' => [
//                'ru' => 'игровая приставка восьмого поколения, выпускаемая японской компанией Sony',
//                'kz' => 'игровая приставка восьмого поколения, выпускаемая японской компанией Sony'
//            ],
//            'quantity' => 3,
//            'category_id' => 1,
//            'type' => Enums\Product\Type::PRODUCT,
//        ],
//        [
//            'name' => 'DualShock 4',
//            'description' => [
//                'ru' => 'Серия игровых контроллеров-геймпадов, выпускаемых японской компанией Sony Interactive Entertainment для её серии игровых приставок PlayStation',
//                'kz' => 'Серия игровых контроллеров-геймпадов, выпускаемых японской компанией Sony Interactive Entertainment для её серии игровых приставок PlayStation'
//            ],
//            'quantity' => 7,
//            'category_id' => 4,
//            'type' => Enums\Product\Type::PRODUCT,
//        ],
//    ];

//---------------------------------


//    public array $sets = [
//        [
//            'name' => 'Сет 1: PlayStation 4',
//            'description' => [
//                'ru' => 'Игровая приставка восьмого поколения, выпускаемая японской компанией Sony',
//                'kz' => 'Жапондық SONY компаниясы шығарған сегізінші буын ойын консолі'
//            ],
//            'quantity' => 3,
//            'category_id' => 2,
//            'type' => Enums\Product\Type::SET,
//        ],
//        [
//            'name' => 'Сет 2: PlayStation 5',
//            'description' => [
//                'ru' => 'PlayStation 5 получила 16 ГБ оперативной памяти нового стандарта GDDR6 с пропускной способностью 448 ГБ в секунду',
//                'kz' => 'PlayStation 5 секундына 448 ГБ өткізу қабілеті бар жаңа GDDR6 стандартының 16 ГБ жедел жадын алды'
//            ],
//            'quantity' => 2,
//            'category_id' => 2,
//            'type' => Enums\Product\Type::SET,
//        ],
//    ];

    public array $prices = [
        [
            'product_id' => 3,
            'price' => 3000,
            'old_price' => 3500,
            'bonus' => 259,
            'days_count' => 1,
        ],
        [
            'product_id' => 3,
            'price' => 4000,
            'old_price' => 4500,
            'bonus' => 259,
            'days_count' => 2,
        ],
        [
            'product_id' => 3,
            'price' => 5000,
            'old_price' => 5500,
            'bonus' => 259,
            'days_count' => 3,
        ],
        [
            'product_id' => 4,
            'price' => 1000,
            'old_price' => 1500,
            'bonus' => 80,
            'days_count' => 1,
        ],
        [
            'product_id' => 4,
            'price' => 1500,
            'old_price' => 2000,
            'bonus' => 80,
            'days_count' => 2,
        ],
        [
            'product_id' => 4,
            'price' => 2000,
            'old_price' => 2500,
            'bonus' => 80,
            'days_count' => 3,
        ],
        [
            'product_id' => 5,
            'price' => 4000,
            'old_price' => 4500,
            'bonus' => 300,
            'days_count' => 1,
        ],
        [
            'product_id' => 5,
            'price' => 5000,
            'old_price' => 5500,
            'bonus' => 300,
            'days_count' => 2,
        ],
        [
            'product_id' => 5,
            'price' => 6000,
            'old_price' => 6500,
            'bonus' => 300,
            'days_count' => 3,
        ],
        [
            'product_id' => 6,
            'price' => 6000,
            'old_price' => 6500,
            'bonus' => 300,
            'days_count' => 1,
        ],
        [
            'product_id' => 6,
            'price' => 7000,
            'old_price' => 6500,
            'bonus' => 300,
            'days_count' => 2,
        ],
        [
            'product_id' => 6,
            'price' => 8000,
            'old_price' => 7500,
            'bonus' => 300,
            'days_count' => 3,
        ],
    ];

    public array $files = [
        [
            'name' => 'sony-playstation.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '51118',
            'url' => 'public/categories/syiqkGzGKRqO3LPhlNZWyA7DAKegFyoSL0gHaPoO.jpg',
            'fileable_id' => 1,
            'fileable_type' => 'App\Models\Category',
        ],
        [
            'name' => 'set.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '16576',
            'url' => 'public/categories/5vWJcHZSNNSy2VeE6bVIXoLRJF8tmSvKxBA3VMVp.jpg',
            'fileable_id' => 2,
            'fileable_type' => 'App\Models\Category',
        ],
        [
            'name' => 'TV.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '201570',
            'url' => 'public/categories/0TknsV9UfUBKb0HE6WIyCCMkbKslIKKi8f9EI5xb.jpg',
            'fileable_id' => 3,
            'fileable_type' => 'App\Models\Category',
        ],
        [
            'name' => 'Joystick.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '106176',
            'url' => 'public/categories/ugtKbkN5Z8udwCyyzLFveO9euzNmcXpZMQ1jdpx2.jpg',
            'fileable_id' => 4,
            'fileable_type' => 'App\Models\Category',
        ],
        [
            'name' => 'sport genre.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '36060',
            'url' => 'public/genres/C2wkMSF5toIZwcJBHqbhPDy5o4thp6z0hRBGD8Lc.jpg',
            'fileable_id' => 1,
            'fileable_type' => 'App\Models\Genre',
        ],
        [
            'name' => 'fighting genre.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '448623',
            'url' => 'public/genres/q0BKKUNhkF0yTOGQBaZTkLzAsAA9bwMTH10kNDzQ.jpg',
            'fileable_id' => 2,
            'fileable_type' => 'App\Models\Genre',
        ],
        [
            'name' => 'strategy genre.jpg',
            'mime' => 'image/jpg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '496949',
            'url' => 'public/genres/DzAARr7EzjSFHNO4o3S6uofCtInc6HMHWvhJIMDp.jpg',
            'fileable_id' => 3,
            'fileable_type' => 'App\Models\Genre',
        ],
        [
            'name' => 'cover mk.png',
            'mime' => 'image/png',
            'ext' => 'png',
            'type' => 1,
            'size' => '157804',
            'url' => 'public/games/JcgjTDTc24zy3ZsRJyCEtKvfsAQxbOFdXWTJYomx.png',
            'fileable_id' => 1,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'cover fifa 23.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '684105',
            'url' => 'public/games/RvTWWM8LvyGz7BYf92DDogwCZSc21MRKEHk0EYxX.jpg',
            'fileable_id' => 2,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'sony-playstation.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 2,
            'size' => '51118',
            'url' => 'public/products/G38cxLN4Vu6o36Aj2Pu3flPQzOSzJssUBjdqbUNO.jpg',
            'fileable_id' => 3,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'sony-playstation.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '51118',
            'url' => 'public/products/3sNvRActeJ4mHnPn8654O2VpmD1qFX3jVVeiL0Ca.jpg',
            'fileable_id' => 3,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'Joystick (2).jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '79844',
            'url' => 'public/products/X5conRI1ZpcEFvInl0wiT2XSB7nCnzPtcp8dPwZi.jpg',
            'fileable_id' => 4,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'Joystick.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '85897',
            'url' => 'public/products/eHjm3tr9YG8JpEUUB9ti0uQxoBmduWfkwsp7yeRJ.jpg',
            'fileable_id' => 4,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'cover joystick.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 2,
            'size' => '106176',
            'url' => 'public/products/lkotnXZKhgmAS9MYPFgcdM1xo6TItGjXUaFxZsvU.jpg',
            'fileable_id' => 4,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'set (2).jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '414220',
            'url' => 'public/products/aUjzK9FBaaD21ow8KZqKp6fPkUmo2Kg8DbmGUvLO.jpg',
            'fileable_id' => 5,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'set.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '6149',
            'url' => 'public/products/G4zb0vyTGOCpqGaNraXdoiwNQgjTI47nYqWi9QTD.jpg',
            'fileable_id' => 5,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'cover set.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 2,
            'size' => '26532',
            'url' => 'public/products/rRPrf6dMZRey02kiJPQshRz4RDg63UVtA8DivZmw.jpg',
            'fileable_id' => 5,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'cover set.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 2,
            'size' => '26532',
            'url' => 'public/products/9IVNWnksAARxi8KWZC1HvlQRFNYt9LbjTtpKasef.jpg',
            'fileable_id' => 6,
            'fileable_type' => 'App\Models\Product',
        ],
        [
            'name' => 'cover set.jpg',
            'mime' => 'image/jpeg',
            'ext' => 'jpg',
            'type' => 1,
            'size' => '26532',
            'url' => 'public/products/3sNvRActeJ4mHnPn8654O2VpmD1qFX3jVVeiL0Cf.jpg',
            'fileable_id' => 6,
            'fileable_type' => 'App\Models\Product',
        ],
    ];
}
