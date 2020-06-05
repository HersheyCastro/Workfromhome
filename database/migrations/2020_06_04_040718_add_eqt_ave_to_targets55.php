<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEqtAveToTargets55 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('targets55', function($table){
            $table->decimal('eqt_ave', 5, 2);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

         Schema::table('targets55', function($table){
             $table->dropColumn('eqt_ave');
           
        });
        
           
       
    }
}
