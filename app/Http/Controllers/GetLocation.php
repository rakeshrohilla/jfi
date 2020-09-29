<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetLocation extends Controller
{
    function getlocation() {

        $ip = request()->ip();
        $data = \Location::get($ip);
        dd($data);



    }


}
