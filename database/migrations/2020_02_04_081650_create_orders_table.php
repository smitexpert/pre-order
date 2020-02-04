<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number', 90)->nullable();
            $table->string('name', 90);
            $table->string('mobile', 90);
            $table->string('email', 90)->nullable();
            $table->text('address');
            $table->string('product_name', 90);
            $table->unsignedBigInteger('colour');
            $table->string('amount', 90);
            $table->string('trs_no', 90)->nullable();
            $table->string('status', 90);
            $table->foreign('colour')->references('id')->on('colours');
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
        Schema::dropIfExists('orders');
    }
}
