<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddNewColumnLastSeen extends Migration
{
/**
*
*@return void
*/
public function up()
{
     Schema::table('users', function(Blueprint $table){
     $table->timestamp('last_seen')->nullable();
});
}
/**
*
 *@return void
*/
public function down()
{
}
}