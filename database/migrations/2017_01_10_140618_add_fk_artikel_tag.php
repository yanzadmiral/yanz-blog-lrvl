<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkArtikelTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikeltags', function (Blueprint $table) {
            $table->foreign('id_artikel', 'fk_artikeltagtoartikel')->references('id_artikel')->on('artikels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_tag', 'fk_artikeltagtotag')->references('id_tag')->on('tags')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikeltags', function (Blueprint $table) {
            $table->dropForeign('fk_artikeltagtotag');
            $table->dropForeign('fk_artikeltagtoartikel');
        });
    }
}
