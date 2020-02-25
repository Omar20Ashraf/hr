<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIcarierToStaticNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('static_names', function (Blueprint $table) {
            //
            $table->char('icarier')->after('id');
            $table->char('icarier_ar')->after('icarier');
            $table->char('istudy')->after('icarier_ar');
            $table->char('istudy_ar')->after('istudy');
            $table->char('imedia')->after('istudy_ar');
            $table->char('imedia_ar')->after('imedia');
            $table->char('ilife')->after('imedia_ar');
            $table->char('ilife_ar')->after('ilife');
            $table->char('read_more')->after('ilife_ar');
            $table->char('read_more_ar')->after('read_more');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('static_names', function (Blueprint $table) {
            //
            $table->dropColumn('icarier');
            $table->dropColumn('icarier_ar');
            $table->dropColumn('istudy');
            $table->dropColumn('istudy_ar');
            $table->dropColumn('imedia');
            $table->dropColumn('imedia_ar');
            $table->dropColumn('ilife');
            $table->dropColumn('ilife_ar');
            $table->dropColumn('read_more');
            $table->dropColumn('read_more_ar');
        });
    }
}
