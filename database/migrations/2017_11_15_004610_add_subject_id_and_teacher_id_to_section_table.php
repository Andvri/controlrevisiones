<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubjectIdAndTeacherIdToSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropForeign('sections_subject_id_foreign');
            $table->dropColumn('subject_id');
            $table->dropForeign('sections_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
