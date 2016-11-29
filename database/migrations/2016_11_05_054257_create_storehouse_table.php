<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storehouse', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->index();
            $table->integer('count')->unsigned();

            $table->decimal('purchase_price', 8, 2)
                ->unsigned()
                ->comment('Закупочная цена')
                ->default(0);

            $table->integer('arrive_count')
                ->unsigned()
                ->comment('Приходящие количество товаров на склад')
                ->default(0);

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
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
        Schema::drop('storehouse');
        /*Schema::table('storehouse', function (Blueprint $table) {
            $table->dropForeign('product_id');
        });*/
    }
}
