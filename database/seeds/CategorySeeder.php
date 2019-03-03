<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $categories = [
        '料理',
        'プログラミング',
        '趣味',
        'WEBサービス',
        '起業',
        'Youtube',
        '家事',
        '育児',
        '勉強',
        'ゲーム',
    ];
    public function run()
    {
        foreach ($this->categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
            ]);
        }

    }
}
