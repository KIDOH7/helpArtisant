<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToArtisansTable extends Migration
{
    public function up()
    {
        Schema::table('artisans', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('artisans', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}