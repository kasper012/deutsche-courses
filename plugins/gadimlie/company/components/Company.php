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
        $company->event = $settings->event;
        $company->testimonials = $settings->testimonials;

        



        $this->page['company'] = $company;
    }
}
