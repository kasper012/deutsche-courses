<?php namespace Gadimliestudio\Courses\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Courses\Models\Course as ModelsCourse;

class Course extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Course Component',
            'description' => 'Courses'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $courses = ModelsCourse::all();
        $this->page['courses'] = $courses;
    }
}
