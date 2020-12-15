<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProductParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_participant', function (Blueprint $table) {
            $table->string('sertifikat_number')->after('kesan')->nullable()->unique();
            $table->string('sertifikat_point')->after('sertifikat_number')->nullable();
            $table->string('nomor_ketetapan_point')->after('sertifikat_point')->nullable();
            $table->text('tanggal')->after('sertifikat_point')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_participant', function (Blueprint $table) {
            $table->dropColumn('sertifikat_number');
            $table->dropColumn('sertifikat_point');
            $table->dropColumn('nomor_ketetapan_point');
            $table->dropColumn('tanggal');
        });
    }
}
