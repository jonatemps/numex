<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function list(){
        $Partners = Partner::all();
        return view('partners',['partners' => $Partners]);
    }
}
