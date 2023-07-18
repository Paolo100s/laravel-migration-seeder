<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railways', function (Blueprint $table) {
            $table -> id();

            $table -> string('company', 64);
            $table -> string('start_station', 64);
            $table -> string('end_station', 64);
            $table -> dateTime('start_date');
            $table -> dateTime('end_date');
            $table -> string('train_code', 10) -> unique();
            $table -> integer('carriage_count');
            $table -> boolean('in_time') -> default(true);
            $table -> boolean('deleted') -> deafult(false);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('railways');
    }
};
