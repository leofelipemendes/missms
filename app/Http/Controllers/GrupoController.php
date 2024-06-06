<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Ip;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index(){
        $grupos = Grupo::whereIn('id',[6,7])
            ->orderBy('custo','asc')->first();
        $ips = Ip::whereHas('grupos',function($q) use($grupos){
            $q->where('grupo_id',$grupos->id);
        })->get();
        dd($ips);
    }
}
