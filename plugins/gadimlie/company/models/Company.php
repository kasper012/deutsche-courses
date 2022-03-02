<?php namespace Gadimlie\Company\Models;

use Model;

/**
 * Company Model
 */
class Company extends Model
{
    public $jsonable = [
        'event',
        'testimonials',
        'about_icons',
        'follow',
        'main_office',
        'academic_programs',
        'campus_information',
        'partners'
    ];

    public $implement = [
        'System.Behaviors.SettingsModel',
        //'RainLab.Translate.Behaviors.TranslatableModel'
       ];
    

    public $settingsCode = 'gadimlie_company_settings';

    public $settingsFields = 'fields.yaml';
}
