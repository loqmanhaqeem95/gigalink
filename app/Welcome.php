<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $table = 'welcomes';

    public $timestamps = false;
    // $Welcome = Welcome::all();

    protected $fillable = [
        'header_title1','header_title2','header_title3','header_title4',
        'header_subtitle1','header_subtitle2','header_subtitle3','header_subtitle4',
        'about_title', 'about_desc', 'service_title', 'service_subtitle', 'service_name1',
        'service_name2','service_name3','service_name4','service_name5','service_name6',
        'project_title', 'project_subtitle', 'project_name1','project_name2','project_name3','project_name4',
         'ratecard_title', 'ratecard_subtitle',
    ];
}
