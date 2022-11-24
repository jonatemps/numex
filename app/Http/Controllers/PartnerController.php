<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Testimony;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function list(){

        $testimonies = Testimony::all();
        $Partners = Partner::all();
        return view('partners',['partners' => $Partners,'testimonies' => $testimonies]);
    }
}
