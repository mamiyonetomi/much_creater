<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //文字列　name
            $table->string('addressnumber');//〒
            $table->string('address1');
            $table->string('address2');  
            $table->string('address3');
            $table->string('tell');
            $table->string('hp');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->text('detail');//textは文字数の上限がないstring
            $table->boolean('delivery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
