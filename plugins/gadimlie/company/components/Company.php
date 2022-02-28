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
        $company->slogan = $settings->slogan;
        $company->logo = $settings->logo;
        $company->light_logo = $settings->light_logo;
        $company->image = $settings->image;
        $company->phone = $settings->phone;
        $company->email = $settings->email;
        $company->map = $settings->map;
        $company->event = $settings->event;
        $company->testimonials = $settings->testimonials;
        $company->about_title = $settings->about_title;
        $company->about_subtitle= $settings->about_subtitle;
        $company->about_icons = $settings->about_icons;
        $company->follow = $settings->follow;
        $company->main_office = $settings->main_office;
        $company->academic_programs = $settings->academic_programs;
        $company->campus_information = $settings->campus_information;
        $company->partners = $settings->partners;


        



        $this->page['company'] = $company;
    }
}
