<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    public $timestamps = false;

    protected $fillable = [
        'header_title','header_subtitle','header_desc',
        'vision_title', 'vision_desc', 
        'mission_title', 'mission_desc', 
        'foc', 'foc_q1', 'foc_q2', 'foc_q3', 'foc_a1a', 'foc_a1b', 'foc_a2a', 'foc_a2b', 'foc_a2c', 'foc_a3a', 'foc_a3b',
        'timeline', 'timeline_desc', 'year1', 'year2', 'year3', 'desc1', 'desc2', 'desc3'

    ];
}
