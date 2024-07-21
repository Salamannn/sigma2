<?php

namespace App\Http\Controllers;

use App\Models\anak;
use App\Models\posyandu;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function posyandu(){
        $posyandu = posyandu::all();
        return view('user_admin.posyandu.index',compact('posyandu'));
    }

    public function anak(){
        $anak = anak::all();
        $posyandu = posyandu::all();
        return view('user_admin.anak.index',compact('anak','posyandu'));
    }

    public function user(){
        $users = User::where('kode_roles','=','2')->get();
        $posyandu = posyandu::all();
        //dd($users);
        return view('user_admin.user.index', compact('users','posyandu'));
    }

}
