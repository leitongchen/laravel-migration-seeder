<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('holidays', function (Blueprint $table) {
            $table->string('destination', 255);
            $table->string('departure', 255);
            $table->date('departure_date')->nullable();
            $table->date('return_date')->nullable();    
            $table->longText('description')->nullable()->comment('inserire descrizione');
            $table->double('price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('holidays', function (Blueprint $table) {
            $table->dropColumn('destination');
            $table->dropColumn('departure');
            $table->dropColumn('departure_date');
            $table->dropColumn('return_date');    
            $table->dropColumn('description');
            $table->dropColumn('price');
        });
    }
}
