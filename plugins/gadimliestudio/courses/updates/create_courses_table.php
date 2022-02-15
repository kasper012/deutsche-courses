<?php namespace Gadimliestudio\Courses\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_courses_courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('teacher_name');
            $table->text('price');
            $table->text('stars');
            $table->text('students')->nullable();
            $table->text('teachers_img')->nullable();
            $table->text('courses_img')->nullable();
            $table->text('title');
            $table->text('course_type')->nullable();
            $table->text('last_update');
            $table->text('about')->nullable();
            $table->text('lectures')->nullable();
            $table->text('language');
            $table->text('duration')->nullable();
            $table->text('discount')->nullable();




            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_courses_courses');
    }
}
