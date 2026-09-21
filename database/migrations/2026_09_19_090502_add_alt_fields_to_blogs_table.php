<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('front_image_alt')->nullable()->after('front_image');
            $table->string('detail_image_alt')->nullable()->after('detail_image');
            $table->string('lower_banner_alt')->nullable()->after('lower_banner');
        });
    }

    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['front_image_alt', 'detail_image_alt', 'lower_banner_alt']);
        });
    }
};