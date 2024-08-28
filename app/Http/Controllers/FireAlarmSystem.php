<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Pages;
use Illuminate\Support\Str;

class FireAlarmSystem extends Controller
{

    public function getProductAlarmSystem($slug)
{
    $fireAlarmSystem = Pages::where('post_title_seo_url', $slug)
        ->where('post_type', 'pages')
        ->where('post_status', 'enable')
        ->first();

    $details = Pages::where('post_id', $fireAlarmSystem->id)
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->orderBy('sort_order', 'ASC')->get();

    // dd($fireAlarmSystem->id);

    return view('fire_alarm_system', [
        'fireAlarmSystem' => $fireAlarmSystem,
        'details' => $details
    ]);
}


}
