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
        Schema::create('kelas_kamar', function (Blueprint $table) {
            $table->string("id", 36)->primary();
            $table->string('name')->index();
            $table->string('description');
            $table->float('harga', 3, 2)->default(0);
            $table->string('BPJS')->nullable();
            $table->string('SIRANAP')->nullable();
            $table->string('SPGDT')->nullable();
            $table->bigInteger('user_id')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_kamar');
    }
};
