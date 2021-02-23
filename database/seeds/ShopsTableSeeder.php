<?php

use Illuminate\Database\Seeder;
use App\Shop;
class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create(['name' => '〇〇〇工房　福岡店','addressnumber' => '814-0104','address1' => '福岡県','address2' => '福岡市中央区','address3' => '天神1-2-3','tell' => '092-123-4567','hp' => 'https://google.com','img1' => 'aaa.jpeg','img2' => 'bbb.jpeg','img3' => 'ccc.jpeg','detail' => 'お店の詳細説明です。','delivery' => 0]);
        Shop::create(['name' => 'うえの工房　上野店','addressnumber' => '110-0015','address1' => '東京都','address2' => '台東区','address3' => '東上野3-18-4','tell' => '03-3832-5234','hp' => 'https://google.com','img1' => 'ueno1.jpg','img2' => 'ueno2.jpg','img3' => 'ueno3.jpg','detail' => 'お店の詳細説明です。','delivery' => 1]);
        Shop::create(['name' => 'making cloth　新宿店','addressnumber' => '160-0023','address1' => '東京都','address2' => '新宿区','address3' => '西新宿6-15-1','tell' => '03-3343-6580','hp' => 'https://google.com','img1' => 'shinzyuku1.jpg','img2' => 'shinzyuku2.jpg','img3' => 'shinzyuku3.jpg','detail' => 'お店の詳細説明です。','delivery' => 1]);
        Shop::create(['name' => 'なにわ　難波店','addressnumber' => '556-0017','address1' => '大阪府','address2' => '大阪市浪速区','address3' => '湊町2-1-17','tell' => '06-4396-8888','hp' => 'https://google.com','img1' => 'naniwa1.jpg','img2' => 'naniwa2.jpg','img3' => 'naniwa3.jpg','detail' => 'お店の詳細説明です。','delivery' => 1]);
        Shop::create(['name' => 'making cloth　梅田店','addressnumber' => '160-0023','address1' => '大阪府','address2' => '大阪市北区','address3' => '茶屋町1-45','tell' => '06-6147-6289','hp' => 'https://google.com','img1' => 'umeda1.jpg','img2' => 'umeda2.jpg','img3' => 'umeda3.jpg','detail' => 'お店の詳細説明です。','delivery' => 1]);
        Shop::create(['name' => 'あいおえお工房　福岡店','addressnumber' => '812-0012','address1' => '福岡県','address2' => '福岡市博多区','address3' => '博多駅中央街9-1','tell' => '092-577-1611','hp' => 'https://google.com','img1' => 'hakata1.jpg','img2' => 'hakata2.jpg','img3' => 'hakata3.jpg','detail' => 'お店の詳細説明です。','delivery' => 1]);
        Shop::create(['name' => 'いろはにほへと　天神店','addressnumber' => '810-0001','address1' => '福岡県','address2' => '福岡市中央区','address3' => '天神1-7-11','tell' => '092-731-3909','hp' => 'https://google.com','img1' => 'tenjin1.jpg','img2' => 'tenjin2.jpg','img3' => 'tenjin3.jpg','detail' => 'お店の詳細説明です。','delivery' => 0]);    
        Shop::create(['name' => '港工房　横浜店','addressnumber' => '220-0045','address1' => '神奈川県','address2' => '横浜市西区','address3' => '伊勢町1-74','tell' => '045-286-0112','hp' => 'https://google.com','img1' => 'yokohama1.jpg','img2' => 'yokohama2.jpg','img3' => 'yokohama3.jpg','detail' => 'お店の詳細説明です。','delivery' => 1]);
        Shop::create(['name' => '〇〇〇工房　福岡店','addressnumber' => '814-0104','address1' => '福岡県','address2' => '福岡市中央区','address3' => '天神1-2-3','tell' => '092-123-4567','hp' => 'https://google.com','img1' => 'aaa.jpeg','img2' => 'bbb.jpeg','img3' => 'ccc.jpeg','detail' => 'お店の詳細説明です。','delivery' => 0]);
    }
}