<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratecard extends Model
{
    protected $table = 'ratecard';
    public $timestamps = false;

    protected $fillable = [
        'header_title', 'header_subtitle', 'header_desc',
        'report', 'report_subtitle', 'total', 'online', 'offline', 'percent_total', 'percent_online', 'percent_offline', 'seller', 'seller_desc', 'adv', 'adv_desc'
    ];
}
