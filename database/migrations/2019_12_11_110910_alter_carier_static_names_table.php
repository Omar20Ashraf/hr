<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCarierStaticNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carier_static_names', function (Blueprint $table) {
            //
            $table->string('select_employee')->afrer('company_name_ar');
            $table->string('select_employee_ar')->afrer('select_employee');
            $table->string('select_employee_slug')->afrer('select_employee_ar');
            $table->string('select_employee_slug_ar')->afrer('select_employee_slug');
            $table->string('select_company')->afrer('select_employee_slug_ar');
            $table->string('select_company_ar')->afrer('select_company');
            $table->string('select_company_slug')->afrer('select_company_ar');
            $table->string('select_company_slug_ar')->afrer('select_company_slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carier_static_names', function (Blueprint $table) {
            //
            $table->dropColumn('select_employee');
            $table->dropColumn('select_employee_ar');
            $table->dropColumn('select_employee_slug');
            $table->dropColumn('select_employee_slug_ar');
            $table->dropColumn('select_company');
            $table->dropColumn('select_company_ar');
            $table->dropColumn('select_company_slug');
            $table->dropColumn('select_company_slug_ar');
        });
    }
}
