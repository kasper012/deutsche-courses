<?php namespace Gadimliestudio\Teams\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_teams_teams', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('name');
            $table->text('position')->nullable();
            $table->text('socials')->nullable();
            $table->text('teacher_img')->nullable();




            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_teams_teams');
    }
}
