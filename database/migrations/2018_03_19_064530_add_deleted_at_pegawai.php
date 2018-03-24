<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedAtPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('pegawais', function($table) {
          $table->date('deleted_at')->nullable();
      });

      Schema::table('gajis', function($table) {
          $table->date('deleted_at')->nullable();
      });

      Schema::table('jabatans', function($table) {
          $table->date('deleted_at')->nullable();
      });

      Schema::table('golongans', function($table) {
          $table->date('deleted_at')->nullable();
      });

      Schema::table('potongans', function($table) {
          $table->date('deleted_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::table('pegawais', function($table) {
          $table->dropColumn('deleted_at')->nullable();
      });

      Schema::table('gajis', function($table) {
          $table->dropColumn('deleted_at')->nullable();
      });

      Schema::table('jabatans', function($table) {
          $table->dropColumn('deleted_at')->nullable();
      });

      Schema::table('golongans', function($table) {
          $table->dropColumn('deleted_at')->nullable();
      });

      Schema::table('potongans', function($table) {
          $table->dropColumn('deleted_at')->nullable();
      });
    }
}
