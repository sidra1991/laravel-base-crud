<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('title',100);
            $table->longText('description');
            $table->char('thumb',200);
            $table->unsignedDecimal('price',5,2)->nullable();
            $table->char('series',50);
            $table->date('sale_date');
            $table->char('type',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comics');
    }
}
