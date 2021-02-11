<?php

use Illuminate\Database\Seeder;
use App\item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '裾の丈詰め']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => 'ボタン交換']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '裏地交換']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '穴・虫食いの修復']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => 'ボタンホール作成']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '防ダニ加工']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '寸法の接ぎ足し']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '染色']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '撥水加工']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => 'ファスナー修理']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => 'ネーム刺繍']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => 'リメイク（別の物に作り直す）']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => 'すりきれ・ほころび補修']);
        Item::create(['item_no' => 1,'item' => '洋服（トップス・ボトム）','service' => '絵柄刺繍']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '裾の丈詰め']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => 'ボタン交換']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '裏地交換']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '穴・虫食いの修復']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => 'ボタンホール作成']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '防ダニ加工']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '寸法の接ぎ足し']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '染色']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '撥水加工']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => 'ファスナー修理']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => 'ネーム刺繍']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => 'リメイク（別の物に作り直す）']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => 'すりきれ・ほころび補修']);
        Item::create(['item_no' => 2,'item' => '洋服（コート）','service' => '絵柄刺繍']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '丸洗い']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => 'すりきれ・ほころび補修']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '防水加工']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '寸法直し']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '裏地交換']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '仕立て']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '染め']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '湯のし']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => 'リメイク']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '染色補正']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => '染色']);
        Item::create(['item_no' => 3,'item' => '着物（帯・肌襦袢含む）','service' => 'リメイク（別の物に作り直す）']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '裾の丈詰め']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => 'ボタン交換']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '裏地交換']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '穴・虫食いの修復']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => 'ボタンホール作成']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '防ダニ加工']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '寸法の接ぎ足し']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '染色']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '撥水加工']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => 'ファスナー修理']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => 'ネーム刺繍']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => 'リメイク（別の物に作り直す）']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => 'すりきれ・ほころび補修']);
        Item::create(['item_no' => 4,'item' => 'スーツ','service' => '仕立て']);
    }
}
