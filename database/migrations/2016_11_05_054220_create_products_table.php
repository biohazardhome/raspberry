<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')
                ->unique();
            $table->text('description');
            $table->string('slug');
            $table->longText('content');
            $table->integer('category_id');
            $table->integer('count') // Количество товаров
                ->unsigned()
                ->default(0);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->softDeletes();
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
        Schema::drop('products');
        // Schema::table('products', function (Blueprint $table) {
        //     $table->dropForeign('category_id');
        // });
    }
}
