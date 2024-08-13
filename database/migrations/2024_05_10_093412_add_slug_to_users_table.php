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
        Schema::table('users', function (Blueprint $table) {
            $table->string('slug', 255)->nullable()->after('username')->after('username');
        });
    }
    // asset('images/not_found.png') 
    // asset('storage/cover/' . $item->cover)
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
         
                if (Schema::hasColumn('users', 'slug')) {
                    $table->dropColumn('slug');
                }
             



        });
    }
};
