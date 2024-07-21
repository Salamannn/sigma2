<?php

namespace App\Http\Controllers;

use App\Models\anak;
use App\Models\posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $jmlPos = posyandu::count();
        $jmlAnak = anak::count();
        // dd($jmlPos);
        $pos = posyandu::all()->take(5);
        $anak = anak::all()->take(5);
        return view('user_admin.dashboard',compact('jmlPos','jmlAnak','pos','anak'));
    }

    public function posyandu(){
        $user = Auth::user();
        //dd($user->nama);
        return view('user_posyandu.dashboard', compact('user'));
    }

    public function ortu(){
        return view('user_ortu.dashboard');
    }
}
