<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('phone')->nullable()->after('email');
          $table->string('address')->nullable()->after('phone');
          $table->string('city')->nullable()->after('email');
          $table->string('state')->nullable()->after('email');
          $table->string('country')->nullable()->after('email');
          $table->string('zipcode')->nullable()->after('email');
          $table->text('about')->nullable()->after('email');
          $table->string('image')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('phone');
          $table->dropColumn('address');
          $table->dropColumn('city');
          $table->dropColumn('state');
          $table->dropColumn('country');
          $table->dropColumn('zipcode');
          $table->dropColumn('about');
          $table->dropColumn('image');

        });
    }
}
