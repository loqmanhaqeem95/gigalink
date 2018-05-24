<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps = false;

    protected $fillable = [
        'header_title','header_subtitle',
        'header_desc', 'p1', 'p2', 'p3', 'p4',
        'p1_subtitle', 'p1_button1', 'p1_button2', 'p1_button3', 'p1_desc1', 'p1_desc2', 'p1_desc3',
        'p2_q1', 'p2_q2', 'p2_q3', 'p2_a1', 'p2_a2', 'p2_a3', 'p3_bold1', 'p3_bold2', 'p3_desc1', 'p3_desc2', 'p4_desc1', 'p4_desc2'
    ];
}
