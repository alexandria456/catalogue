<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = [
            'title' => 'Меню',
            'slug' => 'Menu',
            'level' => 1,
                'children' => [
                    ['title' => 'Женщины',
                        'slug' => 'Woman',
                        'level' => 1,
                        'children' => [
                            [
                                'title' => 'Одежда',
                                'slug' => 'Clothing',
                                'level' => 1,
                                'children' => [
                                    ['title' => 'Рубашки',
                                        'slug' => 'Shirts',
                                        'level' => 1,
                                        'children' => [
                                            ['title' => 'Рубашка'],
                                            ['title' => 'Блуза'],
                                            ['title' => 'Атлас'],
                                        ],
                                    ],
                                    [
                                        'title' => 'Футболки',
                                        'slug' => 'T-shirts',
                                        'level' => 1,
                                        'children' => [
                                            ['title' => 'Базовые'],
                                            ['title' => 'Короткий рукав'],
                                            ['title' => 'Длинный рукав'],
                                            ['title' => 'Топы'],
                                            ['title' => 'Поло'],
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Обувь',
                                'slug' => 'Shoes',
                                'level' => 1,
                                'children' => [
                                    ['title' => 'Кроссовки'],
                                    ['title' => 'Сапоги'],
                                    ['title' => 'Туфли'],
                                    ['title' => 'Лоферы'],
                                    ['title' => 'Босоножки'],
                                    ['title' => 'Ботинки'],
                                ]
                            ],
                        ]
                    ],
                    [
                        'title' => 'Мужчины',
                        'slug' => 'Man',
                        'level' => 1,
                        'children' => [
                            [
                                'title' => 'Одежда',
                                'slug' => 'Clothing',
                                'level' => 1,
                                'children' => [
                                    ['title' => 'Рубашки',
                                        'slug' => 'Shirts',
                                        'level' => 1,
                                        'children' => [
                                            ['title' => 'Формальные'],
                                            ['title' => 'Однотонные'],
                                            ['title' => 'С принтом'],
                                            ['title' => 'С короткими рукавами'],
                                        ],
                                    ],
                                    ['title' => 'Футболки',
                                        'slug' => 'T-shirts',
                                        'level' => 1,
                                        'children' => [
                                            ['title' => 'Базовые'],
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Обувь',
                                'slug' => 'Shoes',
                                'level' => 1,
                                'children' => [
                                    ['title' => 'Спортивная обувь'],
                                    ['title' => 'Сандали'],
                                    ['title' => 'Мокасины'],
                                    ['title' => 'Сапоги'],
                                ]
                            ]
                        ]
                    ]
                ]
        ];
        Category::create($categories);

    }
}
