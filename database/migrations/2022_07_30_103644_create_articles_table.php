<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
        category :
         1 news --> x
        2 food

        articles
        bla bla , 1
        bla bla , 1

    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            // foreignId : 'column'  int : refrence
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            // image : 1- public/images/a.jpg --> 1kb
            // 2: binary -->
            $table->string('image')->nullable();

            // 255 --> char
            $table->longText('content')->nullable();
            $table->longText('content_ar')->nullable();

            // $table->foreignId('user_id')->constrained('users');

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
        Schema::dropIfExists('articles');
    }
};
