<?php namespace Gadimlie\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Company\Models\Company as Settings;
use October\Rain\Database\Model;

class Company extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Company details',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $company = new Model();

        $company->name = $settings->name;
        $company->address = $settings->address;
        $company->why_work_with_us_subtitle = $settings->why_work_with_us_subtitle;
        $company->slogan = $settings->slogan;
        $company->logo = $settings->logo;
        $company->document = $settings->document;
        $company->excerpt = $settings->excerpt;
        $company->image = $settings->image;
        $company->mission = $settings->mission;

        $company->vision = $settings->vision;
        $company->values = $settings->values;
        $company->who_we_are_excerpt = $settings->who_we_are_excerpt;
        $company->who_we_are = $settings->who_we_are;

        $company->team = $settings->team;
        $company->workHours = $settings->workHours;
        $company->cv = $settings->cv;

        
        $company->phone = $settings->phone;
        $company->email = $settings->email;

        $company->gmaps = $settings->gmaps;
        $company->socials = $settings->socials;



        $this->page['company'] = $company;
    }
}
