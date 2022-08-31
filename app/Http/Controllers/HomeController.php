<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Partner;
use App\Models\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function render(){
        $testimonies = Testimony::all();
        $partners = Partner::all();

        $members = Member::all();

        return view('home',['testimonies' => $testimonies,'partners' => $partners,'members' => $members]);
    }
}
