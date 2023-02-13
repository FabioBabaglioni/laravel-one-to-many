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
        Schema::table('posts', function (Blueprint $table) {
           
            // $table -> bigInteger('user_id') -> unsigned();

            // $table -> foreign('user_id')
            //        -> references('id')
            //        -> on('users');
            
            $table -> foreignId('people_id') -> constrained();
                
        });

        Schema::table('person_details', function (Blueprint $table) {
            
            $table -> foreignId('people_id') -> constrained();
            $table -> primary('people_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
