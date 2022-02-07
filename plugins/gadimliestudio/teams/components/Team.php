<?php namespace Gadimliestudio\Teams\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Teams\Models\Team as ModelsTeam;

class Team extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Team Component',
            'description' => 'Teams'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $teams = ModelsTeam::all();
        $this->page['teams'] = $teams;
    }
}
